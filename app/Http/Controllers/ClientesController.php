<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;
use MercadoPago\Webhook\WebhookSignatureValidator;
use MercadoPago\Exceptions\InvalidWebhookSignatureException;
// use MercadoPago\Client\Payment\PaymentCaptureRequest;
use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\MercadoPagoConfig;
use App\Jobs\ProcessarMpPagamento;
use Illuminate\Support\Facades\Log;
// use Illuminate\Http\JsonResponse;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('Olá, mundo!');
        $clientes = Cliente::all();
        // dd($clientes);
        return view('clientes.index', ['clientes' => $clientes]);
    }

    public function notification()
    {
        // dd('Olá, mundo!');
        // $clientes = Cliente::all();
        // dd($clientes);
        return view('clientes.notifications');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $timestamp = now()->valueOf();
        // return view('clientes.create');
        return view('clientes.create', compact('timestamp'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $timeSend = $request->input('timestamp_envio');
        $firstname = $request->input('firstname');
        $email = $request->input('email');

        Cliente::create($request->all());

        $identidade = Cliente::select('id')
                      ->where('firstname', [$firstname])
                      ->where('email', [$email])
                      ->where('timestamp_envio', [$timeSend])
                      ->get();

        $identidade1 = $identidade[0];
        $iD = $identidade1['id'];
        $id = strval($iD);

        $user = Cliente::where('id', $id)->first();
        if ($user) {
            $user->external_reference = $id;
            $user->save();
        }

        

        // $var_dados = array('id', 'name', 'email', 'cpf');
        // $dados = compact("cliente", $var_dados);

        // return redirect()->route('clientes-pagamento', compact('cliente', $var_dados));
        return redirect()->route('clientes-pagamento', ['id'=>$id]);
    }

    public function pagamento(Cliente $id)
    {

        // $cliente = Cliente::select()
        //               ->where('id', [$id])
        //               ->get();

        // $clienteJson = $cliente->toJson(JSON_UNESCAPED_UNICODE);

        return view('clientes.pagamento', ['cliente'=>$id]);
        // return view('clientes.pagamento', compact('cliente', $clienteJson));

    }

    public function handle(Request $request)
    {
        // Log::info(json_encode($request->all()));
        $raw = $request->getContent();
        $payload = json_decode($raw, true) ?: [];

        // (1) LOG NO COMEÇO: captura o que realmente chegou
        Log::info('MP webhook recebido', [
            'content_type' => $request->header('content-type'),
            'raw_len'      => strlen($raw ?? ''),
            'query'        => $request->query(),
            'has_signature'=> (bool) $request->header('x-signature'),
            'x_request_id' => $request->header('x-request-id'),
        ]);

        $topic = $request->query('topic')
            ?? $request->query('type')
            ?? ($payload['type'] ?? null);

         // (2) LOG APÓS EXTRAIR: confirma o que o seu código resolveu
        Log::info('MP webhook resolvido', [
            'topic'  => $topic,
            'dataId' => $dataId,
        ]);

        // Se você quiser focar só em pagamento, ignore merchant_order
        if ($topic && $topic !== 'payment') {
            return response()->noContent(200);
        }

        // Priorize query string (é o que seu log está mostrando)
        $dataId = $request->query('data_id')   // quando o MP manda data.id e o PHP converte para data_id
            ?? $request->query('id')           // quando vem como id direto
            ?? ($payload['data']['id'] ?? null);

        if (!$dataId) {
            return response()->noContent(400);
        }

        // Validação de assinatura: passe exatamente o dataId que veio na URL
        try {
            WebhookSignatureValidator::validate(
                $request->header('x-signature'),
                $request->header('x-request-id'),
                (string) $dataId,
                config('services.mercadopago.webhook_secret')
            );
        } catch (InvalidWebhookSignatureException $e) {
            // (3) LOG NO CATCH: quando a assinatura falhar
            Log::warning('MP webhook assinatura inválida', [
                'topic' => $topic,
                'dataId' => $dataId,
                'x_request_id' => $request->header('x-request-id'),
            ]);

            return response()->noContent(401);
        }

        // (4) LOG ANTES DO DISPATCH: garante que vai enfileirar o ID certo
        Log::info('MP webhook enfileirando job', [
            'payment_id' => (string) $dataId,
        ]);

        ProcessarMpPagamento::dispatch((string) $dataId);
        return response()->noContent(200);
    }

    public function teste(Cliente $id)
    {
        // $dados = Cliente::all();
        // dd($id);
        return view('clientes.teste',['cliente'=>$id]);

        // dd($request);

        // $dados = $request;
        // dd($dados->name);
        // Cliente::create($request->all());

        // $dados = Cliente::all();
        // dd(['dados' => $dados]);
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
