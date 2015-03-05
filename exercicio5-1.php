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
        <style>
            table,tr,th,td{border:solid 2px;text-align:left;border-collapse: collapse;}
            
        </style>
    </head>
    <body>
       
        <?php
        // put your code here
            $aulas = array(array("02K01","Tecnologia Web II","Segunda","Charles"),array("02J01","Linguagem de Programação I","Terça","João"),array("02K01","Linguagem de Programação I","Quarta","Charles"));
            echo "<table>";
            echo"<tr><th>Turma</th><th>Disciplina</th><th>Semana</th><th>Professor</th></tr>";
            for($l=0;$l<count($aulas);$l++){
                echo "<tr>";
                $n_col = $aulas[$l];
                    for($c=0;$c<count($n_col);$c++){
                        echo"<td> $n_col[$c] </td>";
                    }
                echo "</tr>";
            }
            echo"</table>";
        ?>

    </body>
</html>
