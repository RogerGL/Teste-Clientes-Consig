{{-- resources/views/clients/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Novo Cliente</h1>
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        @include('clients.partials.form')
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
