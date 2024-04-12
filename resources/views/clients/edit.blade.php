{{-- resources/views/clients/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Cliente</h1>
    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('PUT')
        @include('clients.partials.form')
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
