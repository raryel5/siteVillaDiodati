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
        $timestamp = now()->valueOf(); 
        // return view('clientes.create');
        return view('clientes.create', compact('timestamp'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'timestamp_envio' => 'required|integer',
        // ]);

        // dd($request);

        // $dados = $request;
        // dd($dados->name);
        $timeSend = $request->input('timestamp_envio');
        $name = $request->input('name');
        $email = $request->input('email');
        // dd($email);

        Cliente::create($request->all());

        $cliente = Cliente::where('name', [$name])->where('email', [$email])->whereIn('timestamp_envio', [$timeSend])->get();

        $identidade = Cliente::select('id')
                      ->where('name', [$name])
                      ->where('email', [$email])
                      ->where('timestamp_envio', [$timeSend])
                      ->get();

        // dd($id[0]);
        $identidade1 = $identidade[0];
        $id = $identidade1['id'];
        // dd($id);

        // return response()->json($cliente);
        // $clienteJson = $cliente->toJson(JSON_UNESCAPED_UNICODE);

        // dd($cliente[array]['id']);

        // $dados = Cliente::all();
        // dd(['dados' => $dados]);
        // dd($cliente->toArray());
        $dadosCliente = $cliente->toArray();
        // dd($dadosCliente);

        // return redirect()->route('clientes-pagamento', ['email'=>$email]);
        // return redirect()->route('clientes-pagamento', ['id' => $cliente('id')]);
        // return view ('clientes.pagamento', compact('dadosCliente'));
        // return view ('clientes.pagamento', $id);
        return redirect()->route('clientes-pagamento', ['id'=>$id]);
        // return redirect()->route('clientes-pagamento', [$id]);

    }

    public function pagamento(Cliente $request)
    {
        dd($request);
        // $id = $request[0];
        // dd($id);

        // $dados = $request;
        // dd($dados->name);
        // Cliente::create($request->all());

        // $dados = Cliente::all();
        // dd(['dados' => $dados]);
        // dd($id);
        // $dados = Cliente::all();

        // $cliente = Cliente::select()
                    //   ->where('id', [$id])
                    //   ->get();

        // dd($cliente);

        // return view('clientes.pagamento', ['cliente'=>$cliente]);
        return view('clientes.pagamento', ['cliente'=>$id]);

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
