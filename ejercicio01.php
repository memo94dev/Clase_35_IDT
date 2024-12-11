<?php

echo " Ejemplo 01 \n";

$galletas = 1;
while ($galletas < 10){
 echo $galletas;
 if($galletas<9){
 echo ", ";
 }
 $galletas++;
}

echo "\n Ejemplo 02 \n";

$desde = 50;
$hasta = 40;

while ($desde >= $hasta){
    echo $desde;
    if($desde > $hasta){
        echo ", ";
    }
    $desde --;
}

echo "\n Ejemplo 03 \n";

$contador = 1;
$hasta = 5;

while ($contador <= $hasta){
    echo $contador * 2;
    if($contador <= $hasta){
        echo ", ";
    }
    $contador ++;
}

echo "\n Ejemplo 04 \n";

for ($i=1; $i <= 10 ; $i++) { 
    $resultado = $i * 6;
    echo "\n 6 x {$i} = ".($resultado);
}