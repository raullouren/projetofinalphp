<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "cadastro.php" method="POST">
    <div>
        <input type="text"  name="marca" placeholder="Marca do carro">
</div>
<div>
        <input type="text"  name="preco" placeholder="preço do carro">
</div>
<div>
    <input type="checkbox" name="tetoSolar" value="Teto solar"> Teto solar
</div>
<div>
    <input type="checkbox" name="pelicula" value="Película"> Película
<div>
<div>
    <input type="checkbox" name="opcionais[]" value="Blindado"> Blindado
</div>
    <input type="submit" value="Enviar">
</div>
</form>
</body>
</html>