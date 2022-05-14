   <div class="container py-4">
      <div class="row">
        <h3>Equipamentos Disponíveis</h3>
      </div>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Número de Patrimônio</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
           @foreach ($equipamentos as $equipamento)
          <tr>
              <th scope="row">{{$equipamento->id}}</th>
              <td>{{$equipamento->equi_nome}}</td>
              <td>{{$equipamento->equi_num_pat}}</td>
              <td>
              <a
              href="{{route('ver_equipamento', ['id'=>$equipamento->id])}}"
              >
                <span class="btn btn-primary"
                  ><i class="far fa-eye"> Visualizar</i></span
                >
              </a>
              <a
                href="{{route('solicitar_emprestimo', ['equi_id'=>$equipamento->id , 'colab_id'=>$colaborador->id])}}"
              >
                <span class="btn btn-success"
                  ><i class="fas fa-edit"> Empréstimo</i></span
                >
              </a>
              <a href="">
                <span class="btn btn-danger"
                  ><i class="fas fa-bookmark"> Reservar</i></span
                >
              </a>
            </td>
          </tr>
           @endforeach
        </tbody>
      </table>
    </div>