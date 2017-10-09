<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{url('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="{{url('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('css/sb-admin.css')}}" rel="stylesheet">

  </head>

  <body class="fixed-nav" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#">Controle de Almoxarifado</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav navbar-sidenav" style="background:#0070c0 !important ">
             <!-- <div class="profile" style="padding-top: 10px; padding-bottom: 10px;">
                  <div class="img-circle">
                      <img src="{{url('img/almoxarifado.jpg')}}" width="45" height="45" title="jaylan" alt="jaylan"/>
                  </div>
                    <div>
                        <span style="color: #fff; font-size: 15px">Jaylan</span><br>
                        <span style="color: #fff">Administrador</span>
                    </div>
                  </div> -->
          <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="#" style="background:#0070c0 !important;">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">
                Painel de Controle</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents">
              <i class="fa fa-plus fw"></i>
              <span class="nav-link-text">
                 Registra</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents" style="background:#0070c0 !important;">
              <li>
                <a href="#" style=" color: rgba(255,255,255,.5) !important;">Local</a>
              </li>
              <li>
                  <a href="#" style=" color: rgba(255,255,255,.5) !important;">Rua</a>
              </li>
              <li>
                <a href="#" style=" color: rgba(255,255,255,.5) !important;">Prateleira</a>
              </li>
              <li>
                <a href="#" style=" color: rgba(255,255,255,.5) !important;">Repositório</a>
              </li>
              <li>
                <a href="#" style=" color: rgba(255,255,255,.5) !important;">Item</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents1">
              <i class="fa fa-puzzle-piece fw"></i>
              <span class="nav-link-text">
                Inventário</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents1" style="background:#0070c0 !important;">
              <li>
                <a href="#" style=" color: rgba(255,255,255,.5) !important;">Geral</a>
              </li>
              <li>
                  <a href="#" style=" color: rgba(255,255,255,.5) !important;">Área Expecifica</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents5">
              <i class="fa fa-fw fa-arrow-down"></i>
              <span class="nav-link-text">
                Entrada</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents5" style="background:#0070c0 !important;">
              <li>
                <a href="#" style=" color: rgba(255,255,255,.5) !important;">Registrar</a>
              </li>
              <li>
                  <a href="#" style=" color: rgba(255,255,255,.5) !important;">Visualizar</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents4">
              <i class="fa fa-fw fa-arrow-down"></i>
              <span class="nav-link-text">
                Saida</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents4" style="background:#0070c0 !important;">
              <li>
                <a href="#" style=" color: rgba(255,255,255,.5) !important;">Registrar</a>
              </li>
              <li>
                  <a href="#" style=" color: rgba(255,255,255,.5) !important;">Visualizar</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents6">
              <i class="fa fa-fw fa-users"></i>
              <span class="nav-link-text">
                Usuários</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents6" style="background:#0070c0 !important;">
              <li>
                <a class="nav-link-collapse collapsed" style=" color: rgba(255,255,255,.5) !important;" data-toggle="collapse" href="#collapseMulti1USER">Registrar</a>
                <ul class="sidenav-third-level collapse" id="collapseMulti1USER" style="background:#0070c0 !important ">
                  <li>
                    <a href="#" style=" color: rgba(255,255,255,.5) !important;">Funcionário</a>
                  </li>
                  <li>
                    <a href="#" style=" color: rgba(255,255,255,.5) !important;">Professor(a)</a>
                  </li>
                  <li>
                    <a href="#" style=" color: rgba(255,255,255,.5) !important;">Cordenador(a)</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="nav-link-collapse collapsed" style=" color: rgba(255,255,255,.5) !important;" data-toggle="collapse" href="#collapseMulti1VIEW">Visualizar</a>
                <ul class="sidenav-third-level collapse" id="collapseMulti1VIEW" style="background:#0070c0 !important ">
                  <li>
                    <a href="#" style=" color: rgba(255,255,255,.5) !important;">Funcionário</a>
                  </li>
                  <li>
                    <a href="#" style=" color: rgba(255,255,255,.5) !important;">Professor(a)</a>
                  </li>
                  <li>
                    <a href="#" style=" color: rgba(255,255,255,.5) !important;">Cordenador(a)</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents6">
              <i class="fa fa-fw fa-cubes"></i>
              <span class="nav-link-text">
                Áreas</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents6" style="background:#0070c0 !important;">
              <li>
                <a href="#" style=" color: rgba(255,255,255,.5) !important;">Registrar</a>
              </li>
              <li>
                  <a href="#" style=" color: rgba(255,255,255,.5) !important;">Visualizar</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents3">
              <i class="fa fa-cog fw"></i>
              <span class="nav-link-text">
                Configurações</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents3" style="background:#0070c0 !important;">
              <li>
                <a href="#" style=" color: rgba(255,255,255,.5) !important;">Configurações</a>
              </li>
              <li>
                  <a href="#" style=" color: rgba(255,255,255,.5) !important;">Gerenciar usuários</a>
              </li>
              <li>
                <a href="#" style=" color: rgba(255,255,255,.5) !important;">Ferramentas</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti">
              <i class="fa fa-bar-chart-o fw"></i>
              <span class="nav-link-text">
                Relatórios</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMulti" style="background:#0070c0 !important ">
              
              <li>
                <a class="nav-link-collapse collapsed" style=" color: rgba(255,255,255,.5) !important;" data-toggle="collapse" href="#collapseMulti1">Entradas</a>
                <ul class="sidenav-third-level collapse" id="collapseMulti1" style="background:#0070c0 !important ">
                  <li>
                    <a href="#" style=" color: rgba(255,255,255,.5) !important;">Semanal</a>
                  </li>
                  <li>
                    <a href="#" style=" color: rgba(255,255,255,.5) !important;">Mensal</a>
                  </li>
                  <li>
                    <a href="#" style=" color: rgba(255,255,255,.5) !important;">Anoal</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="nav-link-collapse collapsed" style=" color: rgba(255,255,255,.5) !important;" data-toggle="collapse" href="#collapseMulti2">Saidas</a>
                <ul class="sidenav-third-level collapse" id="collapseMulti2" style="background:#0070c0 !important ">
                  <li>
                    <a href="#" style=" color: rgba(255,255,255,.5) !important;">Semanal</a>
                  </li>
                  <li>
                    <a href="#" style=" color: rgba(255,255,255,.5) !important;">Mensal</a>
                  </li>
                  <li>
                    <a href="#" style=" color: rgba(255,255,255,.5) !important;">Anoal</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="nav-link-collapse collapsed" style=" color: rgba(255,255,255,.5) !important;" data-toggle="collapse" href="#collapseMulti3">Itens</a>
                <ul class="sidenav-third-level collapse" id="collapseMulti3" style="background:#0070c0 !important ">
                  <li>
                    <a href="#" style=" color: rgba(255,255,255,.5) !important;">Semanal</a>
                  </li>
                  <li>
                    <a href="#" style=" color: rgba(255,255,255,.5) !important;">Mensal</a>
                  </li>
                  <li>
                    <a href="#" style=" color: rgba(255,255,255,.5) !important;">Anoal</a>
                  </li>
                </ul>
              </li>
 
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-bell"></i>
              <span class="d-lg-none">Alertas
                <span class="badge badge-pill badge-warning">6 Novo</span>
              </span>
              <span class="new-indicator text-warning d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
                <span class="number">6</span>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="alertsDropdown">
              <h6 class="dropdown-header">Novos Alertas:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up"></i>
                    Status de Estoque</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">Nova atualizaçao no estoque de produtos de limpeza.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-danger">
                  <strong>
                    <i class="fa fa-long-arrow-down"></i>
                    Status de Estoque</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">O estoque de papel A4 está C para Secretaria.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up"></i>
                    Status de Estoque</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">Nova atualizaçao no estoque de capacetes para area de Construção civil.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#">
                Visualizar todos os alertas
              </a>
            </div>
          </li>
          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0 mr-lg-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Consulta Rapida">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content-wrapper py-3">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Painel de Controle</a>
          </li>
          <li class="breadcrumb-item active">Principal</li>
        </ol>

        <!-- Icon Cards -->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-bar-chart-o"></i>
                </div>
                <div class="mr-5">
                  26 Relatórios!
                </div>
              </div>
              <a href="#" class="card-footer text-white clearfix small z-1">
                <span class="float-left">Mais detalhes</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-list"></i>
                </div>
                <div class="mr-5">
                  11 Agendamento
                </div>
              </div>
              <a href="#" class="card-footer text-white clearfix small z-1">
                <span class="float-left">Mais detalhes</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-plus"></i>
                </div>
                <div class="mr-5">
                  123 Entradas!
                </div>
              </div>
              <a href="#" class="card-footer text-white clearfix small z-1">
                <span class="float-left">Mais detalhes</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-minus"></i>
                </div>
                <div class="mr-5">
                  13 Saidas!
                </div>
              </div>
              <a href="#" class="card-footer text-white clearfix small z-1">
                <span class="float-left">Mais detalhes</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <!-- Area Chart Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-area-chart"></i>
            Entradas de itens
          </div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">
            Atualização 11:59 PM
          </div>
        </div>

        <div class="row">

          <div class="col-lg-8">

            <!-- Example Bar Chart Card -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-bar-chart"></i>
                Saida de itens
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-8 my-auto">
                    <canvas id="myBarChart" width="100" height="50"></canvas>
                  </div>
                  <!--<div class="col-sm-4 text-center my-auto">
                    <div class="h4 mb-0 text-primary">$34,693</div>
                    <div class="small text-muted">YTD Revenue</div>
                    <hr>
                    <div class="h4 mb-0 text-warning">$18,474</div>
                    <div class="small text-muted">YTD Expenses</div>
                    <hr>
                    <div class="h4 mb-0 text-success">$16,219</div>
                    <div class="small text-muted">YTD Margin</div>
                  </div>-->
                </div>
              </div>
              <div class="card-footer small text-muted">
                Atualizaçao 11:59 PM
              </div>
            </div>

            <!-- Card Columns Example Social Feed -->
            
            <hr class="mt-2">
          </div>

          <div class="col-lg-4">
            <!-- Example Pie Chart Card -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-pie-chart"></i>
                Kabam Geral
              </div>
              <div class="card-body">
                <canvas id="myPieChart" width="100%" height="100"></canvas>
              </div>
              <div class="card-footer small text-muted">
                Atualização 11:59 PM
              </div>
            </div>
            <!-- Example Notifications Card
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-bell-o"></i>
                Feed Example
              </div>
              <div class="list-group list-group-flush small">
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <strong>David Miller</strong>
                      posted a new article to
                      <strong>David Miller Website</strong>.
                      <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <strong>Samantha King</strong>
                      sent you a new message!
                      <div class="text-muted smaller">Today at 4:37 PM - 1hr ago</div>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <strong>Jeffery Wellings</strong>
                      added a new photo to the album
                      <strong>Beach</strong>.
                      <div class="text-muted smaller">Today at 4:31 PM - 1hr ago</div>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="media">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                    <div class="media-body">
                      <i class="fa fa-code-fork"></i>
                      <strong>Monica Dennis</strong>
                      forked the
                      <strong>startbootstrap-sb-admin</strong>
                      repository on
                      <strong>GitHub</strong>.
                      <div class="text-muted smaller">Today at 3:54 PM - 2hrs ago</div>
                    </div>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  View all activity...
                </a>
              </div>
              <div class="card-footer small text-muted">
                Updated yesterday at 11:59 PM
              </div>
            </div>
          </div>
        </div> -->
       </div>

        <!-- Example Tables Card -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Saidas em aberto.
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Àrea</th>
                    <th>Tipo</th>
                    <th>Data de saida</th>
                    <th>Data de Devolução</th>
                    <th>Item</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nome</th>
                    <th>Àrea</th>
                    <th>Tipo</th>
                    <th>Data de saida</th>
                    <th>Data de Devolução</th>
                    <th>Item</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Jorge</td>
                    <td>Manutenção</td>
                    <td>Dorcente</td>
                    <td>10/10/2017</td>
                    <td>10/10/2017</td>
                    <td>Alicate de Pressão</td>
                  </tr>
                  <tr>
                    <td>Roberta</td>
                    <td>Quimica</td>
                    <td>Dorcente</td>
                    <td>09/10/2017</td>
                    <td>10/10/2017</td>
                    <td>Acetona P.A</td>
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            Atualizaçao 11:59 PM
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('vendor/popper/popper.min.js')}}"></script>
    <script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{url('vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{url('vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{url('vendor/datatables/dataTables.bootstrap4.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{url('js/sb-admin.min.js')}}"></script>

  </body>

</html>
