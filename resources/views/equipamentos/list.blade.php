<h2 class="text-center">
    Equipamentos
  </h2>
  <div class="container-sm mt-5">
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Número de Patrimônio</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($equipamentos as $equipamentos)
          <tr>
              <th scope="row">{{$equipamentos->id}}</th>
              <td>{{$equipamentos->equi_nome}}</td>
              <td>{{$equipamentos->equi_num_pat}}</td>
              <td>
              <a href="{{route('ver_equipamento', ['id'=>$equipamentos->id])}}">
                  <span class="btn btn-primary"><i class="far fa-eye">Vizualizar</span>
                </a>
                <a href="{{route('solicitar_emprestimo', ['equi_id'=>$equipamentos->id , 'colab_id'=>$colaborador->id])}}">
                  <span class="btn btn-success"><i class="fas fa-edit">Empréstimo</span>
                </a>
                <a href="">
                  <span class="btn btn-danger"><i class="far fa-trash-alt">Reservar</span>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>