<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota do Aluno</title>
</head>
<body>
<div>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $result = ($nota1 + $nota2) / 2;

        if ($result >= 7 && $result <= 10) {
            echo  "<h2> Média das notas $nota1 e $nota2 é igual a 
            $result , Parabéns, você está aprovado.</h2>";
        }
        elseif ($result >= 5 && $result <= 5.99) {
            echo "<h2>  Média das notas $nota1 e $nota2 é igual a 
            $result, Estude um pouco mais, Você está de recuperação.</h2>";

        }
        else {
            echo "<h2> Média entre as notas $nota1 e $nota2 é igual a $result";
            echo "</br> E o aluno está reprovado.</h2>";
        }
    
    ?>
    </br>
    <a href="pratica3.html">voltar</a>


</div>
    
</body>
</html>