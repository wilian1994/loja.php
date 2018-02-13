<?php include("cabecalho.php");
 include("conecta.php");
 include("banco-encomenda.php");
 include("banco-produto.php");

 $produtos = listaProdutos($conexao);
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
      <form action="adiciona-encomenda.php" method="POST">
        <div class="row">
          <div class="col-4">
              <label for="control-label">Produto</label> <select
                class="form-control" id="selectbasic" name="produto_id" required autofocus>
                <option></option>
                <?php foreach($produtos as $produto){ ?> 
                  <option value="<?=$produto['id']?>"><?=$produto['produto']?></option>
                <?php   
                  }
                ?> 
              </select>
          </div>

          <div class="col-4">
              <label for="control-label">Categoria</label> <select
                class="form-control" id="selectbasic" name="categoria_id" required autofocus>
                <option></option>
                <option value="1">Eletrônicos</option>
                <option value="2">Perfume</option>
              </select>
          </div>
          <div class="col-4">          
            <label class='control-label'>Nº Pedido</label>
            <input class='form-control' name="pedido" size='4' type='text'>
          </div>
        </div>
        <div class="row">         
    
            <div class="col-4">
                <label for="control-label">Loja</label> <select
                  class="form-control" id="selectbasic" name="loja_id" required autofocus>
                  <option></option>
                  <option value="1">Aliexpress</option>
                  <option value="2">Gearbest</option>
                </select>
            </div>
            <div class="col-4">          
                <label class='control-label'>Rastreio</label>
                <input class='form-control' name="rastreio" size='4' type='text'>
            </div>
            <div class="col-4">          
                <label class='control-label'>Valor Pago</label>
                <input class='form-control' name="valorPago" size='4' type='text'>
            </div>
          
          </div>
          <div class="row">
          <div class="col-12">          
            <label class='control-label'>Descrição</label>
            <textarea class='form-control' name="descricao" rows="4"  id="comment"></textarea>
          </div>
       
    </div>
        <hr />
        <div class="row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
        </form>         
      </div>
    </div>

<?php include("rodape.php"); ?>
