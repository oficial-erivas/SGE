   <div class="container py-4">
      <div class="row">
        <h3>Equipamentos</h3>
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
           @foreach ($equipamentos as $equipamentos)
          <tr>
              <th scope="row">{{$equipamentos->id}}</th>
              <td>{{$equipamentos->equi_nome}}</td>
              <td>{{$equipamentos->equi_num_pat}}</td>
              <td>
              <a
              href="{{route('ver_equipamento', ['id'=>$equipamentos->id])}}"
              >
                <span class="btn btn-primary"
                  ><i class="far fa-eye"> Visualizar</i></span
                >
              </a>
              <a
                href="{{route('solicitar_emprestimo', ['equi_id'=>$equipamentos->id , 'colab_id'=>$colaborador->id])}}"
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