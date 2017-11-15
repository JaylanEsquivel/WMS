@extends('principal')
  @section('view')
  <div class="container-fluid font">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Registro</li>
          <li class="breadcrumb-item active">Área</li>
          <li class="breadcrumb-item active">Listagem</li>
        </ol>
      <div class="row full">
            <div class="col-lg-12 col-md-12">
                <div class="col-lg-12 col-md-12 full-recentes"> 
                    <span>Ruas Registradas</span>
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
                          <th>AÇÕES</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Química</td>
                          <td>QUI</td>
                          <td><a href="" class="btn btn-info btn-sm" title="EDITAR"><i class="fa fa-pencil"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm" title="INATIVA"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <tr>
                          <td>Automação Industrial</td>
                          <td>ATI</td>
                          <td><a href="" class="btn btn-info btn-sm" title="EDITAR"><i class="fa fa-pencil"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm" title="INATIVA"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <tr>
                          <td>Segurança do Trabalho</td>
                          <td>SdT</td>
                          <td><a href="" class="btn btn-info btn-sm" title="EDITAR"><i class="fa fa-pencil"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm" title="INATIVA"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <tr>
                          <td>Infomática</td>
                          <td>INF</td>
                          <td><a href="" class="btn btn-info btn-sm" title="EDITAR"><i class="fa fa-pencil"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm" title="INATIVA"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <tr>
                          <td>Mecânica</td>
                          <td>MEC</td>
                          <td><a href="" class="btn btn-info btn-sm" title="EDITAR"><i class="fa fa-pencil"></i></a>&nbsp;<a href="" class="btn btn-danger btn-sm" title="INATIVA"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer small text-muted">Nova Atualização {{date('Y')}}</div>
              </div>
          </div>
      </div>
      <a href="{{url('/area')}}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-circle-o-left"></i> Voltar</a>
  </div>
  @endsection