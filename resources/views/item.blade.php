@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url('/principal')}}">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Registro</li>
          <li class="breadcrumb-item active">Item</li>
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
                  <label for="nome">Descrição do Material:</label>
                  <input type="text" class="form-control" id="nomeFunc" name="nomeFunc" placeholder="Ex: 1">
                </div>
                <div class="form-group">
                  <label for="nome">Area Associada:</label>
                  <select name="rua" class="form-control">
                      <option value="">--- Selecione ---</option>
                      <option value="1">Quimica</option>
                      <option value="2">Automação</option>
                      <option value="2">Manutenção</option>
                      <option value="2">Informática</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nome">Rua:</label>
                  <select name="rua" class="form-control" id="01">
                      <option value="">--- Selecione ---</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="2">3</option>
                      <option value="2">4</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nome">Bloco:</label>
                  <select name="rua" class="form-control" id="02" disabled>
                      <option value="">--- Selecione ---</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="2">3</option>
                      <option value="2">4</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nome">repositorio:</label>
                  <select name="rua" class="form-control" id="03" disabled>
                      <option value="">--- Selecione ---</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="2">3</option>
                      <option value="2">4</option>
                  </select>
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
                          <th>DESCRIÇÃO DO MATERIAL</th>
                          <th>ÁREA</th>
                          <th>LOCAL</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Alicate rh</td>
                          <td>Segurança do trabalho</td>
                          <td> 1 1 2 3</td>
                        </tr>
                        <tr>
                          <td>Alicate rh</td>
                          <td>Segurança do trabalho</td>
                          <td> 1 1 2 3</td>
                        </tr>
                        <tr>
                          <td>Alicate rh</td>
                          <td>Segurança do trabalho</td>
                          <td> 1 1 2 3</td>
                        </tr>
                        <tr>
                          <td>Alicate rh</td>
                          <td>Segurança do trabalho</td>
                          <td> 1 1 2 3</td>
                        </tr>
                        <tr>
                          <td>Alicate rh</td>
                          <td>Segurança do trabalho</td>
                          <td> 1 1 2 3</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer small text-muted">Nova Atualização {{date('Y')}}</div>
              </div>
          </div>
      </div>
      <a href="{{url('/item/item-config')}}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> Visualizar todos registros</a>
  </div>
  @endsection
  @section('js')
  
  @endsection
