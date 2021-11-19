<?php

$cont = 1;                   
$div = 2;

while ($cont <= 100) {
    if($cont % $div == 0){
        echo $cont.' es un número par.<br>';
    }
            
    else{
        echo $cont.' es un número impar.<br>';
    } 
            
$cont++;
}

?>


