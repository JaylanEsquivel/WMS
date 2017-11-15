@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url('/principal')}}">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Registro</li>
          <li class="breadcrumb-item active">Prateleira</li>
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
                  <label for="nome">Nome da Prateleira:</label>
                  <input type="text" class="form-control" id="nomeFunc" name="nomeFunc" placeholder="Ex: A">
                </div>
                <div class="form-group">
                  <label for="nome">Quantidade de andares Prateleira:</label>
                  <input type="text" class="form-control" id="nomeFunc" name="nomeFunc" placeholder="Ex: 5">
                </div>
                <div class="form-group">
                  <label for="nome">Prateleira da Rua:</label>
                  <select name="rua" class="form-control">
                      <option value="">--- Selecione ---</option>
                      <option value="1">RUA 1</option>
                      <option value="2">RUA 2</option>
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
                          <th>NOME DA PRATELEIRA</th>
                          <th>QUANTIDADE DE ANDARES</th>
                          <th>RUA</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>A</td>
                          <td>1</td>
                          <td>RUA 1</td>
                        </tr>
                        <tr>
                          <td>B</td>
                          <td>1</td>
                          <td>RUA 1</td>
                        </tr>
                        <tr>
                          <td>C</td>
                          <td>1</td>
                          <td>RUA 1</td>
                        </tr>
                        <tr>
                          <td>D</td>
                          <td>1</td>
                          <td>RUA 1</td>
                        </tr>
                        <tr>
                          <td>E</td>
                          <td>5</td>
                          <td>RUA 1</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer small text-muted">Nova Atualização {{date('Y')}}</div>
              </div>
          </div>
      </div>
      <a href="{{url('/prateleira/prateleira-config')}}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> Visualizar todos registros</a>
  </div>
  @endsection