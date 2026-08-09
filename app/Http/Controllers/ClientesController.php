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

        // $id = $request->input(key: 'data')['id'];

        // $pago = Payment::get($id);
        // $pago = PaymentCaptureRequest::get($id);

        // if ($pago->status === 'approved')
        //     {
        //         // $externalReference = $pago->external_reference;
        //         $id = $pago->external_reference;
        //         $compra = Cliente::find($id);
        //         $compra->payment_status = 'pago';
        //         $compra->save();
        //     }

        $dataId = $request->query('data.id') ?? $request->query('data_id');

        try {
            WebhookSignatureValidator::validate(
            $request->header('x-signature'),
            $request->header('x-request-id'),
            $dataId,
            // $request->query('data.id'),
            config('services.mercadopago.webhook_secret')
            );
        } catch (InvalidWebhookSignatureException $e) {
            return response()->noContent(401);
        }

        // PROCESSAMENTO DE PAGAMENTO

        if ($request->get('type') === 'payment') {
            $paymentId = $request->get('data')['id'];

            $chave = config('services.mercadopago.api_key');

            MercadoPagoConfig::setAccessToken($chave);
            $client = new PaymentClient();
            $payment = $client->get($paymentId);

            if ($payment->status === 'approved') {

                $apoaidor = Cliente::where('id', $paymentId)->first();
                if ($apoaidor) {
                    $apoaidor->payment_status = 'pago';
                    $apoaidor->save();
                }
            }
        }

        // ProcessarMpPagamento::dispatch($dataId);

        // Processe o evento e atualize seu pedido no seu banco
        // Recomendo: responder 200 e processar em background (fila)
        // dispatch(new ProcessPaymentWebhook($dataId));
        // $paymentId = $dataId;

        // ProcessPaymentWebhook::dispatch($dataId)->afterResponse();

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
