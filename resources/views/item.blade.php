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
                          <th>item</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>RUA 1</td>
                        </tr>
                        <tr>
                          <td>RUA 2</td>
                        </tr>
                        <tr>
                          <td>RUA 3</td>
                        </tr>
                        <tr>
                          <td>RUA 4</td>
                        </tr>
                        <tr>
                          <td>RUA 5</td>
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
  <script>
     $(document).ready(function() {
        $('#01').on('change', function() {
          var $this = $(this);
          var nextSelect = $this.next().closest('select');
          if (nextSelect.is(':enabled')) {
            return false;
          }
          nextSelect.removeAttr('disabled');
        });
    });
</script>
  @endsection
