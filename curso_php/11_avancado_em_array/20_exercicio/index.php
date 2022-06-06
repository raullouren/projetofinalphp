<?php


$pessoas = [
    "Matheus" => 29,
    "Alexia" => 25,
    "pedro" => 24,
    "joão" => 43,

];

?>

<table border = "1">

<tr>
<th>Nome</th>
<th>Idade</th>
</tr>
<?php foreach($pessoas as $nome => $idade): ?>
    <tr>
    <td> <?=$nome;?></td>
    <td> <?=$idade;?></td>

    </tr>
    <?php endforeach; ?>
</table>