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
                        <div class="div-menu {{ request()->routeIs('HomeIndex') ? 'menu-ativo' : '' }}">
                            <span class="material-icons posicao-material">home</span>
                            <span class="span-link" onclick="location.href='{{ route('HomeIndex') }}'">Home</span>
                        </div>

                        <div class="div-menu">
                            <span class="material-icons">supervisor_account</span>
                            <span class="span-link"> Clientes </span>
                        </div>

                        <div class="div-menu">
                            <span class="material-icons">person_add_alt_1</span>
                            <span class="span-link"> Cadastrar cliente </span>
                        </div>

                        <div class="div-menu">
                            <span class="material-icons">history</span>
                            <span class="span-link"> Histórico pagamentos </span>
                        </div>

                        <div class="div-menu">
                            <span class="material-icons">watch_later</span>
                            <span class="span-link"> Mensalidades atrasadas </span>
                        </div>

                        <div class="div-menu {{ request()->routeIs('PlanoIndex') ? 'menu-ativo' : '' }}">
                            <span class="material-icons">settings</span>
                            <span class="span-link" onclick="location.href='{{ route('PlanoIndex') }}'">Configuração de planos</span>
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
    
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

</body>
</html>