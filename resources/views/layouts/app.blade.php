<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicativo de Clientes</title>
    <!-- Inclua aqui links para folhas de estilo externas ou internas -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    <!-- Inclua aqui scripts JavaScript externos ou internos -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
