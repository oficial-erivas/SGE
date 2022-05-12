<h2 class="text-center">
  Meus Empréstimos
</h2>
<div class="container-sm mt-5">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">Nome do Equipamento</th>
            <th scope="col">Número de Patrimônio</th>
            <th scope="col">Status</th>
            <th scope="col">Colaborador Responsável</th>
            <th scope="col">Técnico Responsável</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($equipamentos as $equipamentos)
          <tr>
            <th scope="row">{{$equipamentos->equi_nome}}</th>
            <td>{{$equipamentos->equi_num_pat}}</td>

            @foreach ($emprestimos as $emprestimos)
            @if($emprestimos->equi_id == $equipamentos->id)
            <td>{{$emprestimos->emp_status}}</td>
            @endif

            @foreach ($colaboradoresResp as $colaboradoresResp)
            @if($colaboradoresResp->id == $emprestimos->colabResp_id)
            <td>{{$colaboradoresResp->colabResp_nome}}</td>
            @endif
            @endforeach
            
            @foreach ($tecnicos as $tecnicos)
            @if($tecnicos->id == $emprestimos->tec_id)
            <td>{{$tecnicos->tec_nome}}</td>
            @endif
            @endforeach
            <td>
              <a href="{{route('ver_emprestimo', ['id'=>$emprestimos->id])}}">
                <span class="btn btn-primary"><i class="far fa-eye">Vizualizar</span>
              </a>
             
              <a href="{{route('solicitar_devolucao', ['emp_id'=>$emprestimos->id, 'equi_id'=>$equipamentos->id])}}" >
                <span class="btn btn-success"><i class="fas fa-edit">Devolver</span>
              </a>
            </td>
            @endforeach
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

