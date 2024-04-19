<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
<div>
    <?php
    $nome = $_GET["n1"];
    $email = $_GET["n2"];
    $data = $_GET["n3"];
    $idade = $_GET["n4"];
    $sex = $_GET["n5"];
    $statuscivil = $_GET["n6"];
    $profissao = $_GET["n7"];

    echo $nome;
    echo "</br>".$idade;
    echo "</br>".$profissao;
    
    ?>

</div>
    
</body>
</html>