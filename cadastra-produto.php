<?php
 $conexao = mysqli_connect("localhost","root","","sapato");

 $marca =$_POST['marca'];
 $modelo =$_POST['modelo'];
 $tamanho =$_POST['tamanho'];
 $cor = $_POST['cor'];
 $preco = $_POST['preco'];
 echo "{$marca} - {$modelo} - {$tamanho} - {$cor} - {$preco}";

 $sql_inserir = "insert into tbprodutos(marca,modelo,tamanho,cor,preco) value ('{$marca}','{$modelo}',{$tamanho},'{$cor}',{$preco})";

 mysqli_query($conexao,$sql_inserir);

 mysqli_close($conexao);

 ?>
  