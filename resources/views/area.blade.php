@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url('/principal')}}">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Registro</li>
          <li class="breadcrumb-item active">Área</li>
        </ol>
      
      <div class="row">
          <div class="col-lg-12 col-md-12">
                <div class="alert alert-success" id="alert">
                     Resgistro cadastrado com sucesso.
                     <div class="pull-right">
                         <a href="#" id="sair" onclick="fechar()"><img src="{{url('/img/x.png')}}" class="img-responsive" width="20"/></a>
                     </div>
                </div>
                <div class="alert alert-danger" id="alert1">
                     Falha na inserção tente novamente ou solicite o suporte técnico.
                     <div class="pull-right">
                         <a href="#" id="sair1" onclick="fechar()"><img src="{{url('/img/x.png')}}" class="img-responsive" width="20"/></a>
                     </div>                
                </div>
            <div class="col-lg-12 col-md-12">
              <form action="{{url('/funcionario/form_funcionario')}}" method="post" >
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                  <label for="nome">Nome da Área:</label>
                  <input type="text" class="form-control" id="nomeFunc" name="nomeFunc" placeholder="Ex: Química"><br>
                  <label for="nome">Sigla:</label>
                  <input type="text" class="form-control" id="nomeFunc" name="nomeFunc" placeholder="Ex: QUI">
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
      <div class="row">
          <div class="col-lg-12">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>NOME DA ÁREA</th>
                          <th>SIGLA</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Química</td>
                          <td>QUI</td>
                        </tr>
                        <tr>
                          <td>Automação Industrial</td>
                          <td>ATI</td>
                        </tr>
                        <tr>
                          <td>Segurança do Trabalho</td>
                          <td>SdT</td>
                        </tr>
                        <tr>
                          <td>Infomática</td>
                          <td>INF</td>
                        </tr>
                        <tr>
                          <td>Mecânica</td>
                          <td>MEC</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer small text-muted">Nova Atualização {{date('Y')}}</div>
              </div>
          </div>
      </div>
      <a href="{{url('/area/area-config')}}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> Visualizar todos registros</a>
  </div>
  @endsection