<?php

function listaProdutos($conexao){
    $produtos = [];
    $query = "select * from produtos"; 
    
    $resultado = mysqli_query($conexao, $query);
    
    //pegando o produto associado a query
    while($produto = mysqli_fetch_assoc($resultado)){    
        array_push($produtos, $produto);
    } 

    return $produtos;
}

function alteraProduto($conexao,$id, $produto, $estoqueMinimo ){
    $query = "update produtos set produto = '{$produto}', estoqueMinimo = '{$estoqueMinimo}' where id = {$id} ";
    return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id){
    $query = "select * from produtos where id = {$id} ";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function insereProduto($conexao, $produto, $estoqueMinimo ){
    $query = "insert into produtos (produto, estoqueMinimo) values ('{$produto}', {$estoqueMinimo})";
    return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id){
    $query = "delete from produtos where id =  {$id}";
    return mysqli_query($conexao, $query);
}