<?php

#Funcion Pi devuelve el valro de PI
echo (pi());
echo "\n";

#Funcion min y max devuvle el valor en una lista de argumento
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo "\n";
echo(max(0, 150, 30, 20, -8, -200));  // returns 150
echo "\n";

#Funcion valor absoluto
echo(abs(-6.7));  // returns 6.7
echo "\n";

#Funcion raiz cuadrada
echo(sqrt(64));  // returns 8
echo "\n";

#Funcion redondea
echo(round(0.60));  // returns 1
echo "\n";
echo(round(0.49));  // returns 0
echo "\n";

#Funcion numero random
echo(rand());
echo "\n";

#Funcion numero random entre
echo(rand(10, 100));
?>