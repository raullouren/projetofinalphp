<?php


if(isset($_POST['ingredientes'])){

        $ingredientes = $_POST['ingredientes'];

        print_r($ingredientes);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div>
                <form action="index.php" method="POST">
</div>
    <div>
        <input type="checkbox" name="ingredientes[]" value="Tomate"> tomate
</div>
<div>
        <input type="checkbox" name="ingredientes[]" value="Abobora"> abobora
</div>
<div>
        <input type="checkbox" name="ingredientes[]" value="Feijao"> feijao
</div>
<div>
        <input type="checkbox" name="ingredientes[]" value="Alface"> alface
</div>
<div>
        <input type="checkbox" name="ingredientes[]" value="Cebola"> cebola
</div>
<div>
        <input type="submit" value="Enviar">
</div>
</form>
</body>
</html>