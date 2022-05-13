<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produto</title>
</head>
<body>
    <h1>Listar Produto</h1>
    <?php

    $conexao = mysqli_connect("localhost","root","","sapato");
    $sql_pesquisar = "select * from tbprodutos";
    $resultado = mysqli_query($conexao,$sql_pesquisar);
    while($linha = mysqli_fetch_assoc($resultado)){
        echo "Marca do Produto:{$linha['marca']} ";
        echo "Modelo do Produto:{$linha['modelo']} ";
        echo "Tamanho:{$linha['tamanho']} ";
        echo "Cor:{$linha['cor']} ";
        echo "Preço:{$linha['preco']} ";    
        echo "<br>";
    }
    mysqli_close($conexao)
    ?>
</body>
</html>