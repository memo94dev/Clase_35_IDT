<?php

echo "\n Ejercicio 01: \n";

for ($galletas = 0; $galletas < 10; $galletas++){
 echo $galletas.", ";
}
//Crea el código PHP donde generes:
//a) Un bucle for que cuente desde 50 hasta 40 (fíjate que en este caso es
//decreciente y que por tanto la variable deberá operar como $galletas––).
//b) Un bucle for que a partir de una variable $contador que toma valores de
//1 a 5, muestre por pantalla el doble del valor de $contador, es decir, que
//muestre 2, 4, 6, 8, 10.
//c) Mostrar en pantalla la tabla del 6 utilizando un bucle for.

echo "\n Ejercicio 02: \n";

for ($galletas = 50; $galletas >= 40; $galletas--){
 echo $galletas.", ";
}

echo "\n Ejercicio 03: \n";

for ($contador = 1; $contador <= 5; $contador++){
    $resultado = $contador * 2 . ", ";
    echo $resultado;
}

echo "\n Ejercicio 04: \n";

for ($i = 0; $i <= 10; $i++){
    $resultado = $i * 6;
    echo "\n 6 x {$i} = ".($resultado);
}

?>