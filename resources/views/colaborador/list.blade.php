<h2 class="text-center">
    Colaboradores
  </h2>
  <div class="container-sm mt-5">
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th scope="col">Matricula</th>
              <th scope="col">Nome</th>
              <th scope="col">Setor</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($colaborador as $colaborador)
          <tr>
              <th scope="row">{{$colaborador->colab_matricula}}</th>
              <td>{{$colaborador->colab_nome}}</td>
              <td>{{$colaborador->colab_setor}}</td>
              <td>
              <a href="{{route('ver_colaborador', ['colab_id'=>$colaborador->id])}}">
                  <span class="btn btn-primary"><i class="far fa-eye">Vizualizar</span>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>