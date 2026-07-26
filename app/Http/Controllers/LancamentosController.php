<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercadoPago\SDK;
use MercadoPago\Payment;

class LancamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('menus.lancamentos.lancamentos');
    }

    /**
     * Exibir página de formulário de cadastro e pagamento.
     */
    public function formulario(Request $request)
    {
        return view('formularios/formLancamento');

        // 1. Validar os dados recebidos do cliente
        $request->validate([
            'name'              => 'required|string',
            'email'             => 'required|email',
            'cpf'               => 'required|string|size:11',
            'payment_method_id' => 'required|string', // ex: 'pix' ou 'bolbradesco'
        ]);

        // 2. Configurar o Token de Acesso do Mercado Pago
        SDK::setAccessToken(config('services.mytoken.key') ?? env('MINHA_API_TOKEN'));
        // SDK::setAccessToken(config('services.mytoken.key') ?? env('MERCADO_PAGO_ACCESS_TOKEN'));


        // 3. Instanciar e preencher o objeto de Pagamento
        $payment = new Payment();
        $payment->transaction_amount = 50.00; // Valor da cobrança
        $payment->description = "Compra de Livro";
        $payment->payment_method_id = $request->payment_method_id;

        // Separar nome e sobrenome do cliente
        $nameParts = explode(' ', $request->name, 2);
        $firstName = $nameParts[0];
        $lastName = $nameParts[1] ?? 'Silva';

        // 4. Estruturar os dados do cliente (Payer)
        $payment->payer = array(
            "email" => $request->email,
            "first_name" => $firstName,
            "last_name" => $lastName,
            "identification" => array(
                "type" => "CPF",
                "number" => $request->cpf
            )
        );

        try {
            // 5. Enviar a cobrança à API do Mercado Pago
            $payment->save();

            if ($payment->status === 'approved' || $payment->status === 'pending') {
                
                // Resposta específica se for Pix
                if ($request->payment_method_id === 'pix') {
                    return response()->json([
                        'status' => 'pending',
                        'qr_code' => $payment->point_of_interaction->transaction_data->qr_code,
                        'qr_code_base64' => $payment->point_of_interaction->transaction_data->qr_code_base64,
                    ]);
                }

                // Resposta específica se for Boleto
                if ($request->payment_method_id === 'bolbradesco') {
                    return response()->json([
                        'status' => 'pending',
                        'barcode' => $payment->barcode->content,
                        'pdf_url' => $payment->transaction_details->external_resource_url,
                    ]);
                }
            }

            return response()->json(['error' => 'Falha no processamento'], 400);

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function sucesso()
    {
        return view('menus.lancamentos.sucessos');
    }

    public function failure()
    {
        return view('menus.lancamentos.failures');
    }

    public function pending()
    {
        return view('menus.lancamentos.pendings');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
