<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

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
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        $dados = $request;
        dd($dados->name);
        Cliente::create($request->all());

        // $dados = Cliente::all();
        // dd(['dados' => $dados]);

        return redirect()->route('clientes-notification');            
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
