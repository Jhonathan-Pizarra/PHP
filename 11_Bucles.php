<?php
/*
Los bucles se utilizan para ejecutar el mismo bloque de código una y otra vez, siempre que una determinada condición sea verdadera.
En PHP, tenemos los siguientes tipos de bucles:

-while - recorre un bloque de código siempre que la condición especificada sea verdadera
-do...while - recorre un bloque de código una vez y luego repite el ciclo siempre que la condición especificada sea verdadera
-for - recorre un bloque de código un número específico de veces
-foreach - recorre un bloque de código para cada elemento en una matriz

BUCLE: WHILE
El bucle while recorre un bloque de código siempre que la condición especificada sea verdadera.

Sintaxis
while (condition is true) {
  code to be executed;
}

-----------------------------------------------------------------------------------------------
BUCLE: DO-WHILE
El do...while  siempre ejecutará el bloque de código al menos una vez,
luego verificará la condición y repetirá el bucle mientras la condición especificada sea verdadera.

Sintaxis
do {
  code to be executed;
} while (condition is true);


-----------------------------------------------------------------------------------------------
BUCLE: FOR
El for se usa cuando sabe de antemano cuántas veces debe ejecutarse el script.

Sintaxis
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}

Parámetros:
contador de inicio : inicializa el valor del contador de bucle
contador de prueba : evaluado para cada iteración del bucle. Si se evalúa como VERDADERO, el ciclo continúa. Si se evalúa como FALSO, el ciclo termina.
contador de incremento : aumenta el valor del contador de bucle


------------------------------------------------------------------------------------------------
BUCLE: FOR-EACH
El foreach  solo funciona en arreglos  y se usa para recorrer cada par (clave / valor) en una matriz.

Sintaxis
foreach ($array as $value) {
  code to be executed;
}
Para cada iteración de bucle, el valor del elemento de matriz actual se asigna a $ value y el puntero de matriz se mueve en uno, hasta que alcanza el último elemento de matriz.


*/

//While
$x = 1;
while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
print ("</br>");

//Do While
$y = 1;
do {
    echo "The number is: $y <br>";
    $y++;
} while ($y <= 5);
print ("</br>");

//For (Si se quiere recorrer matrices es un bucle anidado)
for ($z = 0; $z <= 10; $z++) {
    echo "The number is: $z <br>";
}
print ("</br>");

//For each: para arreglos
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "$value <br>";
}
print ("</br>");

//for each: para arreglos clave:valor (objetos)
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $val) {
    echo "$x = $val<br>";
}
print ("</br>");



?>