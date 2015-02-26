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
                for( $i=0; $i<5;$i++){
                    echo '<tr>
                     <td>id</td>
                     <td>nome</td>
                     <td>desc</td>
                    </tr>';
                    if($k>$i){echo '<tr>
                     <td>id</td>
                     <td>nome</td>
                     <td>desc</td>
                    </tr>';}
                    $k++;
                }
               
        
?>
        </table>
    </body>
</html>