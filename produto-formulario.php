<?php include("cabecalho.php");
 include("conecta.php");
 include("banco-produto.php");
 include("regra-negocio-usuario.php");

 verificaUsuario();

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
    <form action="adiciona-produto.php" method="POST">
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
      <?php
        if( array_key_exists("removido", $_GET) && $_GET['removido']=="true"){
      ?>
          <p class="alert-success">Produto apagado com sucesso!</p>
      <?php
            }
      ?>
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
              <?php
                $produtos = listaProdutos($conexao);
                foreach($produtos as $produto){
               ?>
              <tbody>                
                <tr>
                  <td><?=$produto['produto']?></td>
                  <td><?=$produto['estoqueMinimo']?></td>
                  <td>7</td>
                  <td>3</td>
                  <td>
                    <form action="remove-produto.php" method="post">
                      <input type="hidden" name="id" value="<?=$produto['id']?>">
                      <button  class="btn btn-danger btn-sm" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </form>               
                    <a href="produto-altera-produto.php?id=<?=$produto['id']?>">
                      <button  class="btn btn-primary btn-sm" data-title="Edit" data-toggle="modal" data-target="#edit" >
                          <i class="fa fa-pencil" aria-hidden="true"></i>
                      </button>
                    </a>
                  </td>
                </tr>                
              </tbody>
            <?php
            }
            ?>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>


<?php include("rodape.php"); ?>
