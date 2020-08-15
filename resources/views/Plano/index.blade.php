@extends('Templates.template')

@section('conteudo')
    <div class="row">
        <div class="col-md-12">
            <div class="card-default">
                <section style="display: flex; justify-content: space-between; align-items: center;margin-bottom: 1rem">
                    <h5>Planos</h5>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCadastroDePlano">Adicionar plano</button>
                </section>
                                
                <div class="modal fade" id="modalCadastroDePlano" tabindex="-1" role="dialog" aria-labelledby="modalCadastroDePlanoLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalCadastroDePlanoLabel">Adicionar Plano</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="form-plano" method="post">
                                    @csrf
                                    <div>
                                        <div style="margin-bottom: 0.5rem;">
                                            <span>Velocidade</span>
                                            <input name="velocidade" type="number" class="form-control block" placeholder="Exemplo: 100"> 
                                        </div>

                                        <div style="margin-bottom: 0.5rem;">
                                            <span>Preço</span>
                                            <input name="preco" type="text" class="form-control" placeholder="Exemplo: 150.00"> 
                                        </div>

                                        <div style="margin-bottom: 0.5rem;">
                                            <span>Fibra</span>
                                            <select name="fibra" class="form-control">
                                                <option value="1">Sim</option>
                                                <option value="0">Não</option>
                                            </select> 
                                        </div>
                                    </div>

                                    <div style="display: flex; justify-content: flex-end; margin-top: 1rem;">
                                        <button class="btn btn-success flex" type="button" onclick="adicionarPlano()">
                                            <span>Cadastrar</span> 
                                            <span class="material-icons"> add </span>
                                        </button> 
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table table-hover">
                    <thead>
                        <th>Velocidade</th>
                        <th>Fibra</th>
                        <th>Preço</th>
                        <th>Clientes</th>
                        <th>Ações</th>
                    </thead>
                    <tbody id="table-body-planos">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

<script>
    window.onload = carregarListagem;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function carregarListagem() {
        $.ajax({
            url: '/planos/listagem',
            success: function(data) {
                $('#table-body-planos').html(data);
            }
        })
    }

    function adicionarPlano() {

        $.ajax({
            type:'POST',
            url:'/planos/store',
            data: $('#form-plano').serialize(),
            success: function(data) {
                carregarListagem();
            }
        });
    }
</script>