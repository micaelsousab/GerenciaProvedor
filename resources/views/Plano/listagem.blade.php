@foreach ($planos as $plano)   
    <tr>
        <td> {{ $plano['velocidade'] }} </td>
        <td> {{ $plano['fibra'] == 1 ? 'Sim' : 'Não' }} </td>
        <td> R$ {{ number_format($plano['preco'], 2, ',', '.') }} </td>
        <td> <span class="badge badge-pill badge-info">5</span> </td>
        <td> 
            <div>
                <span class="material-icons">edit</span>
                <span class="material-icons">delete</span>
            </div>    
        </td>
    </tr>
@endforeach