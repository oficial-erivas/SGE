<div class="py-4"></div>
    <div class="container py-4">
      <div class="row">
        <h3>Empréstimos em Aberto</h3>
      </div>
      <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Equipamento</th>
            <th scope="col">Nº Patrimônio</th>
            <th scope="col">Status</th>
            <th scope="col">Colab. Responsável</th>
            <th scope="col">Téc. Responsável</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($equipamentos as $equipamento)
          <tr>
            <th scope="row">{{$equipamento->equi_nome}}</th>
            <td>{{$equipamento->equi_num_pat}}</td>

            @foreach ($emprestimos as $emprestimo)
            @if($emprestimo->equi_id == $equipamento->id)
            <td>{{$emprestimo->emp_status}}</td>
            @break
            @endif
            @endforeach

            @foreach ($emprestimos as $emprestimo)
            @if($emprestimo->equi_id == $equipamento->id)

            @foreach ($colaboradoresResp as $colaboradorResp)
            @if($colaboradorResp->id == $emprestimo->colabResp_id)
            <td>{{$colaboradorResp->colabResp_nome}}</td>
            @break
            @endif
            @endforeach
            
            @foreach ($tecnicos as $tecnico)
            @if($tecnico->id == $emprestimo->tec_id)
            <td>{{$tecnico->tec_nome}}</td>
            @break
            @endif
            @endforeach
            <td>
              <a href="{{route('ver_emprestimo', ['id'=>$emprestimo->id])}}">
                <span class="btn btn-sm btn-primary"><i class="far fa-eye"> Visualizar</i></span>
              </a>
             
              <a href="{{route('solicitar_devolucao', ['emp_id'=>$emprestimo->id, 'equi_id'=>$equipamento->id])}}" >
                <span class="btn btn-sm btn-sm-success"><i class="fas fa-reply"> Devolver</i></span>
              </a>
            </td>
            @break
            @endif
            @endforeach
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

