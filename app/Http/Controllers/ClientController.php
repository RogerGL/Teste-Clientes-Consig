<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the clients.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new client.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created client in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|email|unique:clients,email',
            'cpf' => 'required|unique:clients,cpf',
            'data_de_nascimento' => 'required|date',
            'rua' => 'required|max:255',
            'numero_da_residencia' => 'required|max:255',
            'cep' => 'required|max:255',
            'cidade' => 'required|max:255',
            'estado' => 'required|max:255',
            'ativo' => 'required|boolean',
        ]);

        $client = Client::create($validatedData);

        return redirect()->route('clients.index')->with('success', 'Cliente criado com sucesso!');
    }

    /**
     * Display the specified client.
     *
     * @param  Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified client.
     *
     * @param  Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified client in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'email' => 'required|email|unique:clients,email,' . $client->id,
            'cpf' => 'required|unique:clients,cpf,' . $client->id,
            'data_de_nascimento' => 'required|date',
            'rua' => 'required|max:255',
            'numero_da_residencia' => 'required|max:255',
            'cep' => 'required|max:255',
            'cidade' => 'required|max:255',
            'estado' => 'required|max:255',
            'ativo' => 'required|boolean',
        ]);

        $client->update($validatedData);

        return redirect()->route('clients.index')->with('success', 'Cliente atualizado com sucesso!');
    }

    /**
     * Remove the specified client from storage.
     *
     * @param  Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Cliente excluído com sucesso!');
    }
}
