<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); 

$query = "select * from produtos"; 

$resultado = mysqli_query($conexao, $query);

//pegando o produto associado a query
while($produto = mysqli_fetch_assoc($resultado)){    
    echo $produto['produto'];
} 


?>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
    <form action="adiciona-produto.php" method="GET">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-4">
                <label class='control-label'>Produto</label>
                <div class="input-group">
                
                <input type="text" class="form-control" name="produto" placeholder="Produto">
                
                </div>
            </div>

            <div class="col-lg-offset-3 col-lg-4">
                <label class='control-label'>Estoque Mínimo</label>
            <div class="input-group">
                
                <input type="text" class="form-control" name="estoqueMinimo" placeholder="Estoque Mínimo">
                <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">Salvar</button>
                </span>
            </div>
            </div>
        </div>
    </form>
      <hr >
      <div class="card mb-3">

          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Produto</th>
                  <th>Estoque Minímo</th>
                  <th>Pedidos</th>
                  <th>Pedir</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Produto</th>
                  <th>Estoque Minímo</th>
                  <th>Pedidos</th>
                  <th>Pedir</th>
                  <th>Ação</th>
                </tr>
              </tfoot>
              <tbody>                
                <tr>
                  <td>Mi band</td>
                  <td>10</td>
                  <td>7</td>
                  <td>3</td>
                  <td>
                    <a href="#">
                      <button  class="btn btn-primary btn-sm" data-title="Edit" data-toggle="modal" data-target="#edit" >
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                      </button>
                    </a>
                    
                    <a href="#">
                        <button  class="btn btn-danger btn-sm" data-title="Edit" data-toggle="modal" data-target="#edit" >
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </button>
                    </a>               
                  </td>
                </tr>                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>


<?php include("rodape.php"); ?>
