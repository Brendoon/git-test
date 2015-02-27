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
            table,tr,td{border:solid 1px;}
            #tr2{background-color: gray;}
        </style>
    </head>
    <body>
        <table>
        <?php
            echo'<tr>
                    <td>ID</td>
                    <td>NOME</td>
                    <td>DESC</td>
                </tr>';
            $k = 1;
            for( $i=0; $i<7;$i++){
                if(($i%2==0)||($i==0)){
                    echo '<tr>
                    <td>id</td>
                    <td>nome</td>
                    <td>desc</td>
                    </tr>'; 
                }else{
                     echo '<tr id="tr2">
                    <td>id</td>
                    <td>nome</td>
                    <td>desc</td>
                    </tr>'; 
                }
            }
        ?>
        </table>
        
        <p><?php
             $n = 1193;
                $cont = 0;
               for($j=1;$j<=$n;$j++){
                   if($n%$j==0){
                       $cont++;
                   }
               }
               if($cont==2){
                   echo "<p>Número: $n é primo.</p>";
               }else{
                   echo "<p>Número: $n não é primo.<p>";
               }    
            ?>
        </p>
        
        <p>
            <?php
                $n = 10;
                $a = 0;
                $b = 1;
                echo "$n números da sequência de Fibonacci :{";
                echo"$a,$b,";
                for($i=0;$i<$n;$i++){
                    $soma = $a +$b;
                    echo "$soma";
                    if($i!=$n-1){
                        echo ',';
                    }
                    $a = $b;
                    $b = $soma;
                }echo '}';
            ?>
        </p>
    </body>
</html>