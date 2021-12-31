<?php
/*
 * CONSTANTES
Las constantes son como variables, excepto que una vez que se definen no se pueden cambiar ni poseer valores indefinidos
Una constantes es un identificador (nombre) que contiene simplemente un valor, el valor no puede ser cambiado a lo largo del programa
n nombre constante válido comienza con una letra o un guión bajo (sin signo $ antes del nombre constante). A diferencia de las variables,
las constantes son automáticamente globales en todo el script.

//CREAR UNA CONSTANTE
Sintaxis
define(name, value, case-insensitive)
donde:
Parámetros:

    nombre : especifica el nombre de la constante
    valor : especifica el valor de la constante
    case-"insesnsitive" (Sin distinción entre mayúsculas y minúsculas) : especifica si el nombre constante debe ser insensible entre mayúsculas y minúsculas. El valor predeterminado es falso

define("GREETING", "Welcome to W3Schools.com!", false);
//Estamos diciendo que GREETING tiene el valor "Welcome..." y que es no verdad que es lo mismo mayusc que minusc
echo greeting;

define("MESSAGE", "Welcome to W3Schools.com!", true);
//Estamos diciendo que MESSAGE tiene el valor "Welcome..." y que es verdad que es lo mismo mayusc que minusc
echo MESSAGE;

 * */

echo "Hola Mundo!";
//Recuerda, las constantes son globales!
define("saludo", "hola Mundo!", false);

function myTest() {
    echo saludo;
}

echo "</br>";
myTest();
echo "</br>";
echo saludo;


?>