@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url('/principal')}}">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Registro</li>
          <li class="breadcrumb-item active">Repositório</li>
        </ol>
      
      <div class="row">
          <div class="col-lg-12 col-md-12">
                <div class="alert alert-success">
                     Resgistro cadastrado com sucesso.
                </div>
                <div class="alert alert-danger">
                     Falha na inserção tente novamente ou solicite o suporte técnico.
                </div>
            <div class="col-lg-12 col-md-12">
              <form action="{{url('/funcionario/form_funcionario')}}" method="post" >
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                  <label for="nome">Codigo do Repositório:</label>
                  <input type="text" class="form-control" id="nomeFunc" name="nomeFunc" placeholder="Ex: ABC8">
                </div>
                <div class="form-group">
                  <label for="nome">Repositório da Prateleira:</label>
                  <select name="rua" class="form-control">
                      <option value="">--- Selecione ---</option>
                      <option value="1">A</option>
                      <option value="2">B</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nome">Numero do andar:</label>
                  <select name="rua" class="form-control">
                      <option value="">--- Selecione ---</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="2">4</option>
                      <option value="2">5</option>
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
                          <th>CODIGO DO REPOSITÓRIO</th>
                          <th>NOME DA PRATELEIRA</th>
                          <th>NUMERO DO ANDAR</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>ABC1</td>
                          <td>A</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>ABC2</td>
                          <td>A</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>CDV1</td>
                          <td>A</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>RRE2</td>
                          <td>A</td>
                          <td>4</td>
                        </tr>
                        <tr>
                          <td>RPV5</td>
                          <td>A</td>
                          <td>5</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer small text-muted">Nova Atualização {{date('Y')}}</div>
              </div>
          </div>
      </div>
      <a href="{{url('/repositorio/repositorio-config')}}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> Visualizar todos registros</a>
  </div>
  @endsection