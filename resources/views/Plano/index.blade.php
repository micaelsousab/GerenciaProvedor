@extends('Templates.template')

@section('conteudo')
    <div class="row">
        <div class="col-md-12">
            <div class="card-default">
                Adicionar plano
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Velocidade</th>
                            <th>Fibra</th>
                            <th>Preço</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="/planoStore" method="post">
                            @csrf
                            @method('post')

                            <tr>
                                <td> <input name="velocidade" type="number" class="form-control" placeholder="Exemplo: 100"> </td>
                                <td> 
                                    <select name="fibra" class="form-control">
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select> 
                                </td>
                                <td> <input name="preco" type="text" class="form-control" placeholder="Exemplo: 150.00"> </td>
                                <td> 
                                    <button class="btn btn-success flex" type="submit">
                                        Cadastrar 
                                        <span class="material-icons"> add </span>
                                    </button> 
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>

                <hr>

                Planos
                <table class="table table-hover">
                    <thead>
                        <th>Velocidade</th>
                        <th>Fibra</th>
                        <th>Preço</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($planos as $plano)   
                            <tr>
                                <td> {{ $plano['velocidade'] }} </td>
                                <td> {{ ($plano['fibra'] == 1 ? 'Sim' : 'Não') }} </td>
                                <td> {{ $plano['preco'] }} </td>
                                <td>  </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection