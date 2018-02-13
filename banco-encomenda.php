<?php

 function listaEncomendas($conexao){

     $encomendas = [];
     $encomendas = "select * from encomendas"; 
  
     $resultado = mysqli_query($conexao, $query);
  
     //pegando o produto associado a query
     while($encomenda = mysqli_fetch_assoc($resultado)){    
         array_push($encomendas, $encomenda);
     } 
  
     return $encomendas;
 }
    
 function insereEncomenda($conexao, $produto_id, $categoria_id, $pedido, $loja_id, $rastreio, $valorPago,
     $descricao ){
     $query = "insert into encomendas (produto_id, categoria_id, pedido, loja_id, rastreio, valorPago,
     descricao) values ({$produto_id}, {$categoria_id}, {$pedido}, {$loja_id}, '{$rastreio}', {$valorPago},
     '{$descricao}')";
     return mysqli_query($conexao, $query);
 }

// function removeProduto($conexao, $id){
//     $query = "delete from produtos where id =  {$id}";
//     return mysqli_query($conexao, $query);
// }