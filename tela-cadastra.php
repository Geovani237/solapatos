<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel ="stylesheet" href ="estilo.css">
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form action="cadastra-produto.php" method="post">
        <div  class ="alinhar">
    <fieldset>
        <legend>Cadastro de Tenis</legend>
        Marca:
        <input name ="marca" id ="marca">
        <br>
        Modelo:
        <input name ="modelo" id ="modelo">
        <br>
        Tamanho:
        <input type="number" name ="tamanho" id ="tamanho">
        <br>
        Cor:
        <input name ="cor" id ="cor">
        <br>
        Preço:
        <input type="number" name ="preco" id = "preco">
        <br>
        <button type ="submit" id ="botao">Salvar</button>
    </fieldset>
        </div>
    </form>    
</body>
</html>