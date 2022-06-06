<?php

$arr = [
    "raul" => 123,
    "matheys" => 234,
    "nando" => 435,
    "milena" => 543,

];

arsort($arr);



?>

<table border = "1">

<h1>Ranking</h1>
<th>Nome</th>
<th>Pontuação</th>
</tr>
<?php foreach($arr as $nome => $Pontuação): ?>
    <tr>
    <td> <?=$nome;?></td>
    <td> <?=$Pontuação;?></td>

    </tr>
    <?php endforeach; ?>
</table>


<?php

//================= 
// outra opção
?>




<h1>Ranking</h1>
<ol>
    <?php foreach($arr as $nome => $Pontuação): ?>
        <li><?=$nome ?> -> <?= $Pontuação ?> pontos </li>
        <?php endforeach; ?>
    </ol>