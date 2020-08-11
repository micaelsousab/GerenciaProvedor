@extends('Templates.template')

@section('conteudo')
    <div class="row">
        <div class="col-md-4">
            <div class="card-default">
                Renda Mensal
                <h4>R$ 400,00</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-default">
                Total de Clientes
                <h4>15</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-default">
                Novos clientes no mês
                <h4>3</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12" style="margin-top: 1rem;">
            <div class="card-default">
                <h4>Clientes recentes</h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Mensalidade</th>
                            <th>Velocidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Micael</td>
                            <td>R$ 60,00</td>
                            <td>100 mb</td>
                        </tr>
                        <tr>
                            <td>Rafael</td>
                            <td>R$ 120,00</td>
                            <td>200 mb</td>
                        </tr>
                        <tr>
                            <td>Mirella</td>
                            <td>R$ 120,00</td>
                            <td>200 mb</td>
                        </tr>
                        <tr>
                            <td>Vinicius</td>
                            <td>R$ 20,00</td>
                            <td>5 mb</td>
                        </tr>
                        <tr>
                            <td>Michael Jackson</td>
                            <td>R$ 500,00</td>
                            <td>1000 mb</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection