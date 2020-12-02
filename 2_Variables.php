<?php

echo "Hola Mundo!";

/*
Las variables son "contenedores" para almacenar información.

Crear (declarar) variables PHP
En PHP, una variable comienza con el $signo, seguido del nombre de la variable:
$txt = "Hello world!";
$x = 5;
$y = 10.5;

Nota: Cuando asigne un valor de texto a una variable, ponga comillas alrededor del valor.
Nota: A diferencia de otros lenguajes de programación, PHP no tiene ningún tipo de dato para declarar una variable. Es decir:
El tipo de dato de la variable dependerá del valor que se le asigne.

Piensa en las variables como contenedores para almacenar datos.

Variables PHP
Una variable puede tener un nombre corto (como x e y) o un nombre más descriptivo (edad, nombre del automóvil, volumen_total).

Reglas para variables PHP:
-Una variable comienza con el signo: $, seguido del nombre de la variable.
-Un nombre de variable debe comenzar con una letra o el carácter de subrayado: $x, $_x
-Un nombre de variable no puede comenzar con un número
-Un nombre de variable solo puede contener caracteres alfanuméricos y guiones bajos (Az, 0-9 y _)
-Los nombres de las variables distinguen entre mayúsculas y minúsculas ( $agey $AGEson dos variables diferentes)

Alcance de variables PHP
En PHP, las variables se pueden declarar en cualquier parte del script.
El alcance de una variable es la parte del script donde la variable puede ser referenciada / utilizada.
PHP tiene tres ámbitos variables diferentes:
-local
-global
-estático




*/
$nombre = "Jhonathan";
echo $nombre;  //echo viene siendo lo que cout es en C++, un operador de salida, por tanto podemos concatenar u operar!

$num1 = 3;
$num2 = 4;
//CONCATENAR
echo "<p>Soy ".$nombre." y me gusta PHP </p>"; //Uso <p> para que esé en un nuevo parrafo (HTML) o también podría usar una etiqueta <br> (más abajito lo hice)
echo $num1 + $num2; //resultado es 7
//echo $nombre + $num2; //ERROR
//echo $nombre . $num2; //Si funcioná, produce: Jhonathan4  ¡Ha hecho una conversión interna!, aprenderemos más sobre esto más adelante


//ALCANCEs
$x = 5; // global

function myTest() {
    //usar x dentro de esta función generará un error! ¡No existe!
    //echo "<p>Variable x inside function is: $x</p>"; //local, si estuviera declarada
    $y = 5; //mi propia variable, con juegos de azar y ... jaja!
}
myTest();

echo "<p>Variable x es: $x</p>";
//echo "<p>Variable y es: $y</p>";

//Puede tener variables locales con el mismo nombre en diferentes funciones,
// porque las variables locales solo se reconocen por la función en la que se declaran.

//Hasta aquí tenemos dos problemas
// Problema #1.
//...¡¿Y si quiero usar las variables que declaré afuera de una función y usarlas dentro?!
echo "<br>";


//GLOBAL
//La globalpalabra clave se utiliza para acceder a una variable global desde una función.
// global $x, $y; De ese modo se solucionará el problema.

$a = 5;
$b = 10;

function myTest2() {
    global $a, $b; //Aqui está la mágia
    $b = $a + $b;
}

myTest2();
echo $b; // imprimirá 15

echo "<br>";

//Problema #2
//.. ¡¿Y si quiero usar las varibables que hice en funciones en otras o quiero usar una variable que declaré fuera de una función?!
$x = 1;
$y = 2;

function myTest3() {
    //Los arreglos mantendrán en el "index" el nombre de la variable y podremos operar con ellas
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest3();
echo $y; // resultado del proceso 15

//PHP The static Keyword
//Imagina que tenemos una fucnción y esta tiene una variable (que sería local)
//Ahora imagina que la llamamos, ella hace lo suyo y listo, cuando termina de ejecutarse ¡Destruye todoloque hay en su interior!
// Probkema #3
// ... ¿Y si quisiera volver a llamar a la función pero que las variables mantengan el valor con el que resultadorn de la última llamada?
function myTest4() {
    static $x = 0; //static hará que los valores de esa variable no cambien (se reinicien), no importa las veces que la función sea invocada.
    echo $x;
    $x++;
}

myTest4();
myTest4();
myTest4();
//Then, each time the function is called, that variable will still have the information it contained from the last time the function was called

?>
