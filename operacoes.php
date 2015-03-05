<?php      
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
         // put your code here

function soma($x,$y){
    return ($x+$y);
}       
                            
function subtracao($x,$y){
    return ($x-$y);
} 

function multiplicacao($x,$y){
    return ($x*$y);
}

function divisao ($x,$y){
    if($y!=0){
        return ($x/$y);
    }else{
        return 0;
    }
}

               