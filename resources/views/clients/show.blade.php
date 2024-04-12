{{-- resources/views/clients/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Cliente</h1>
    <ul>
        <li><strong>Nome:</strong> {{ $client->nome }}</li>
        <li><strong>Email:</strong> {{ $client->email }}</li>
        <li><strong>CPF:</strong> {{ $client->cpf }}</li>
        <li><strong>Data de Nascimento:</strong> {{ $client->data_de_nascimento }}</li>
        <!-- outros campos -->
    </ul>
    <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning">Editar</a>
    <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza?')">Excluir</button>
    </form>
    <a href="{{ route('clients.index') }}" class="btn btn-link">Voltar</a>
</div>
@endsection
