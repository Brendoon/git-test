<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include "operacoes.php";
            $a = 6;
            $b = 3;
            echo "<p>A soma de $a com $b é: ",  soma($a, $b),"</p>";
            echo "<p>A subtração de $a por $b é: ",  subtracao($a, $b),"</p>";
            echo "<p>A multiplicação de $a por $b é: ",  multiplicacao($a, $b),"</p>";
            echo "<p>A divisão de $a por $b é: ",  divisao($a, $b),"</p>";
        ?>
    </body>
</html>
