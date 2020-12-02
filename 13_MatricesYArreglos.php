<?php

/*
¿Qué es un arreglo?
Una arreglo es una variable especial, que puede contener más de un valor a la vez.
Si tiene una lista de elementos (una lista de nombres de automóviles, por ejemplo),
el almacenamiento de los automóviles en variables individuales podría verse así:

$cars1 = "Volvo";
$cars2 = "BMW";
$cars3 = "Toyota";

Sin embargo, ¿qué pasa si quieres recorrer los autos y encontrar uno específico? ¿Y si no tuvieras 3 autos, sino 300?
¡La solución es crear un arreglo!
Una arreglo puede contener muchos valores con un solo nombre, y puede acceder a los valores haciendo referencia a un número de índice.

CREAR UNA ARREGLO
Crear una arreglo en PHP
En PHP, la función array() se usa para crear una matriz:

En PHP, hay tres tipos de arreglos:

arreglos indexadas : arreglo con un índice numérico
arreglos asociativas : arreglo con claves con nombre
arreglos multidimensionales : arreglos que contienen una o más arreglos

LONGITUD DE UNA ARRAY
la función count () se usa para devolver la longitud (el número de elementos) de una arreglo:
puedes usar más funciones integras para arreglos en https://www.w3schools.com/php/php_ref_array.asp

//ARREGLOS INDEXADOS:
Hay dos formas de crear arreglos indexadas:
El índice se puede asignar automáticamente (el índice siempre comienza en 0), así:

$cars = array("Volvo", "BMW", "Toyota");

o el índice se puede asignar manualmente:

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

//ARREGLOS ASOCIATIVOS
Las arreglos asociativas son arreglos que usan claves con nombre que tu les asignas
Hay dos formas de crear una arreglos asociativos:

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

o:

$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";

//ARREGLOS MULTIDIMENSIONALES
Los arreglos multidimensional son un arreglo que contiene uno o más arreglos.

PHP admite arreglos multidimensionales que tienen dos, tres, cuatro, cinco o más niveles de profundidad.
Sin embargo, las matrices de más de tres niveles de profundidad son difíciles de administrar para la mayoría de las personas.

La dimensión de una arreglo indica la cantidad de índices que necesita para seleccionar un elemento.

Para un arreglos bidimensional, necesita dos índices para seleccionar un elemento
Para un arreglos tridimensional, necesita tres índices para seleccionar un elemento


//ARREGLOS BIDIMENSIONALES
Una matriz o arreglo bidimensional es un arreglo de arreglos (una arreglo tridimensional es una arreglo de arreglo de arreglos).

Primero, eche un vistazo a la siguiente tabla:

Name	    |       en Stock    | 	vendidos
-------------------------------------------
Volvo	    |         22	    |    18
BMW	        |         15	    |    13
Saab	    |         5	        |     2
Land Rover	|         17	    |    15

Podemos almacenar los datos de la tabla anterior en una matriz, como esta:

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

Ahora la matriz  $ cars contiene cuatro arreglos,
es decir, tiene dos índices: fila y columna.
Para obtener acceso a los elementos de la matriz $ cars podemos hacerlo de manera manual o con bucles



PHP - Funciones de ordenación para arreglos

sort() - ordenar arreglo en orden ascendente
rsort() - ordenar arreglo en orden descendente
asort() - ordenar arreglo asociativas en orden ascendente, de acuerdo con el valor
ksort() - ordenar arreglo asociativas en orden ascendente, de acuerdo con la clave
arsort() - ordenar arreglo asociativas en orden descendente, de acuerdo con el valor
krsort() - ordenar arreglo asociativas en orden descendente, de acuerdo con la clave

 */

//Funcion count
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
print ("</br>");

//Arreglos indexados
$cars2 = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars2[0] . ", " . $cars2[1] . " and " . $cars2[2] . ".";
print ("</br>");

//Recorrer un arreglo indexado, usamos un bucle
$cars3 = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars3);

for ($x = 0; $x < $arrlength; $x++) {
    echo $cars3[$x];
    echo "<br>";
}
print ("</br>");

//Arreglos asociativos
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
print ("</br>");

//Recorrer un arreglo asociativo, usamos un bucle
$age2 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age2 as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
print ("</br>");

//MATRIZ
$aviones = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

//Accediendo a los elementos de una matriz
echo $aviones[0][0].": En stock: ".$aviones[0][1].", vendidos: ".$aviones[0][2].".<br>";
echo $aviones[1][0].": En stock: ".$aviones[1][1].", vendidos: ".$aviones[1][2].".<br>";
echo $aviones[2][0].": En stock: ".$aviones[2][1].", vendidos: ".$aviones[2][2].".<br>";
echo $aviones[3][0].": En stock: ".$aviones[3][1].", vendidos: ".$aviones[3][2].".<br>";
print ("</br>");

//Accediendo a los elementos de una matriz - usando bucles
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Fila: $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$aviones[$row][$col]."</li>";
    }
    echo "</ul>";
}
print ("</br>");

//Ordenar un arreglo idexado
//Ejemplo 1
$calificaciones = array(4, 6, 2, 7, 10);
sort($calificaciones); //ordenamos los elementos del arreglo en orden asendente
//Usa rsort() para ordenar en orden descendete
$tamanio = count($calificaciones); //determinamos el tamanio del arreglo!
for ($x = 0; $x < $tamanio; $x++) {
    echo $calificaciones[$x];
    echo "<br>";
}
print ("</br>");
//Ejemplo 2
$letras = array("Hola", "Adios", "Bueno");
sort($letras); //ordenamos los elementos del arreglo en orden asendente: A - B - C - ...
//Usa rsort() para ordenar en orden descendete
$tamanio2 = count($letras); //determinamos el tamanio del arreglo!
for ($x = 0; $x < $tamanio2; $x++) {
    echo $letras[$x];
    echo "<br>";
}
print ("</br>");

//Ordenar un arreglo asociativo
//Ejemplo 1: Acorde al valor
$age7 = array("Dani"=>"39", "Alex"=>"37", "Ben"=>"43");
asort($age7); //Ordenamos de acuerdo al valor: 37, 39, 43 ....en orden ascendente!
// arsort() para ordenar de forma descendente un arreglo asociativo acuerdo al valor
foreach($age7 as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
print ("</br>");

//Ejemplo 2: Acorde a la clave
$age8 = array("Goku"=>"39", "Vegeta"=>"37", "Alberto"=>"43");
ksort($age8); //Ordenamos de acuerdo al la clave: A, G, V ....en orden ascendente!
// Usa krsort() para ordenar de forma descente un arreglo asociativo acuerdo al la clave
foreach($age8 as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
print ("</br>");

?>