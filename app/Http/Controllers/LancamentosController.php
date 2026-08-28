<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;


class LancamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $mytoken = env('MINHA_API_TOKEN');
        return view('menus.lancamentos.lancamentos', ['metaImage' => asset('storage/lancamentos/card02.jpg')]);

    }

    public function sucesso(Request $request)
    {
        // return view('menus.lancamentos.sucessos');

        $orderId   = $request->query('external_reference'); // ex.: "29"
        $paymentId = $request->query('payment_id');         // ex.: "172061218063"
        $status    = $request->query('status');             // ex.: "approved"

        if (!$orderId) {
            abort(400, 'external_reference ausente');
        }

        $order = Cliente::findOrFail((int) $orderId);

        // Registra o pagamento para auditoria (se você tiver campos para isso)
        // $order->mp_payment_id = $paymentId;
        // $order->payment_status = $status;

        // Atualiza o status do pedido no seu sistema
        if ($status === 'approved') {
            $order->payment_status = 'pago';
        } elseif ($status === 'pending') {
            $order->payment_status = 'pendente';
        } else {
            $order->payment_status = 'falha';
        }

        $order->save();

        // Renderize uma view de sucesso
        return view('menus.lancamentos.sucessos', [
            'order' => $order,
            'paymentId' => $paymentId,
            'status' => $status,
        ]);
    }

    public function failure(Request $request)
    {
        // return view('menus.lancamentos.failures');
        $orderId   = $request->query('external_reference'); // ex.: "29"
        $paymentId = $request->query('payment_id');         // ex.: "172061218063"
        $status    = $request->query('status');             // ex.: "approved"

        if (!$orderId) {
            abort(400, 'external_reference ausente');
        }

        $order = Cliente::findOrFail((int) $orderId);

        // Registra o pagamento para auditoria (se você tiver campos para isso)
        // $order->mp_payment_id = $paymentId;
        // $order->payment_status = $status;

        // Atualiza o status do pedido no seu sistema
        if ($status === 'approved') {
            $order->payment_status = 'pago';
        } elseif ($status === 'pending') {
            $order->payment_status = 'pendente';
        } else {
            $order->payment_status = 'falha';
        }

        $order->save();

        // Renderize uma view de sucesso
        return view('menus.lancamentos.failures', [
            'order' => $order,
            'paymentId' => $paymentId,
            'status' => $status,
        ]);        

    }

    public function pending(Request $request)
    {
        // return view('menus.lancamentos.pendings');
        $orderId   = $request->query('external_reference'); // ex.: "29"
        $paymentId = $request->query('payment_id');         // ex.: "172061218063"
        $status    = $request->query('status');             // ex.: "approved"

        if (!$orderId) {
            abort(400, 'external_reference ausente');
        }

        $order = Cliente::findOrFail((int) $orderId);

        // Registra o pagamento para auditoria (se você tiver campos para isso)
        // $order->mp_payment_id = $paymentId;
        // $order->payment_status = $status;

        // Atualiza o status do pedido no seu sistema
        if ($status === 'approved') {
            $order->payment_status = 'pago';
        } elseif ($status === 'pending') {
            $order->payment_status = 'pendente';
        } else {
            $order->payment_status = 'falha';
        }

        $order->save();

        // Renderize uma view de sucesso
        return view('menus.lancamentos.pendings', [
            'order' => $order,
            'paymentId' => $paymentId,
            'status' => $status,
        ]);
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
