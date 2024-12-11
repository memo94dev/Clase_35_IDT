<?php

echo "\n Ejercicio 01: \n";

$galletas =1;
do {
 echo $galletas.", ";
 $galletas++;
} while ($galletas < 10);
//Crea el código PHP donde generes:
//a) Un bucle do…while que cuente desde 50 hasta 40 (en este caso
//es decreciente)
//b) Un bucle do…while que a partir de una variable $contador que toma
//valores de 1 a 5, muestre por pantalla el doble del valor de $contador,
//es decir, que muestre 2, 4, 6, 8, 10.
//c) Mostrar en pantalla la tabla del 6 utilizando un bucle do while.

echo "\n Ejercicio 02: \n";

$contador = 50;
do {
    echo $contador.", ";
    $contador = $contador - 1;
} while ($contador >= 40);

echo "\n Ejercicio 03: \n";

$contador = 1;
do {
    $multi = $contador*2;
    echo $multi.", ";
    $contador++;
} while ($contador <= 5);

echo "\n Ejercicio 04: \n";

$contador = 0;
do {
    $multi = $contador*6;
    echo "\n 6 x {$contador} = ".($multi);
    $contador++;
} while ($contador <= 10);