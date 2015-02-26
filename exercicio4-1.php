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
            $P1 = 10;
            $M1 = 10;
            $M2 = 10;
            $Proj1 = 10;
            $Proj2 = 10;
            $Proj3 = 10;
            $Proj4 = 10;
            $TrabF = 10;
            $Proc = 10;
            $PF = 10;
            
            $MI = (30*$P1 + 10*$M1 + 10*$M2 + 5*$Proj1 + 5*$Proj2 + 5*$Proj3 + 
            5*$Proj4 + 10*$TrabF + 20*$Proc)/100;
            
            if($M1 >= 7.5){
                $MF = $MI;
                echo 'Aprovado sem Prova Final<br>';
                echo 'Parabéns!!! Boas férias';
            }else{
                $MF = ($MI + $PF)/2;
                if(($MF>=6.0)&&($MF!=$M1)){
                echo 'Aprovado com Prova Final<br>';
                echo 'Agora já pode descansar tranquilo.';
                }else{
                echo 'Reprovado<br>';
                echo 'Não foi dessa vez. Ano que vem tem mais TWII.<br>';
                }
            }
            echo "\nMédia Intermediária: $MI<br>";
            echo "Média Final: $MF";
           
        ?>
    </body>
</html>