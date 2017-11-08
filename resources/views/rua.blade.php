@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Rua</li>
          <li class="breadcrumb-item active">Registro</li>
        </ol>
      
      <div class="row">
          <div class="col-lg-12 col-md-12">
               <div class="alert alert-success">
                     Resgistro cadastrado com sucesso.
                </div>
            <div class="col-lg-12 col-md-12">
              <form action="{{url('/funcionario/form_funcionario')}}" method="post" >
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                  <label for="nome">Nome da Rua:</label>
                  <input type="text" class="form-control" id="nomeFunc" name="nomeFunc" placeholder="João Carlos">
                </div>
                <button type="submit" class="btn btn-success" onclick="cadastrado()">Cadastrar</button>
              </form>
            </div>
          </div>
      </div>
      <div class="row full">
            <div class="col-lg-12 col-md-12">
                <div class="col-lg-12 col-md-12 full-recentes"> 
                    <span>Registros Recentemente</span>
                </div>
            </div>
      </div>
  </div>
  @endsection