<h2 class="text-center">
    Colaboradores Responsaveis
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
          @foreach ($colaboradorResp as $colaboradorResp)
          <tr>
              <th scope="row">{{$colaboradorResp->colabResp_matricula}}</th>
              <td>{{$colaboradorResp->colabResp_nome}}</td>
              <td>{{$colaboradorResp-colabResp_setor}}</td>
              <td>
              <a href="{{route('ver_colabResp', ['colabResp_id'=>$colaboradorResp->id])}}">
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