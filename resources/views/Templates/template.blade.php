<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>@yield('titulo')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Template/template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Geral/geral.css') }}">
</head>
<body>
    <div id="div-absolute">

    </div>
    <div class="container">
        <div class="col-md-12" style="margin-top: 6rem;">
            <div class="row">
                <div class="col-md-3">
                    <div class="card-default">
                        <div class="div-menu">
                            <span class="material-icons posicao-material">home</span>
                            Home
                        </div>
                        <div class="div-menu">
                            <span class="material-icons">supervisor_account</span>
                            Clientes
                        </div>
                        <div class="div-menu">
                            <span class="material-icons">person_add_alt_1</span>
                            Cadastrar cliente
                        </div>
                        <div class="div-menu">
                            <span class="material-icons">history</span>
                            Histórico pagamentos
                        </div>
                        <div class="div-menu">
                            <span class="material-icons">watch_later</span>
                            Mensalidades atrasadas
                        </div>
                        <div class="div-menu">
                            <span class="material-icons">settings</span>
                            Configuração de planos
                        </div>
                        <div class="div-menu">
                            <span class="material-icons">assignment</span>
                            Registro de atividades
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="col-md-12">
                        @yield('conteudo')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>