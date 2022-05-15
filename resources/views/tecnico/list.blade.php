<h2 class="text-center">
    Tecnicos
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
          @foreach ($tecnico as $tecnico)
          <tr>
              <th scope="row">{{$tecnico->tec_matricula}}</th>
              <td>{{$tecnico->tec_nome}}</td>
              <td>{{$tecnico->tec_setor}}</td>
              <td>
              <a href="{{route('ver_tecnico', ['tec_id'=>$tecnico->id])}}">
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