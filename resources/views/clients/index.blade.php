{{-- resources/views/clients/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Clientes</h1>
    <a href="{{ route('clients.create') }}" class="btn btn-primary">Adicionar Cliente</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <td>{{ $client->nome }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->cpf }}</td>
                <td>
                    <a href="{{ route('clients.show', $client) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar este cliente?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
