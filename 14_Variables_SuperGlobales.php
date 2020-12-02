<?php

/*Variables globales PHP - Superglobales
Algunas variables predefinidas en PHP son "superglobales", lo que significa que siempre son accesibles, independientemente del alcance,
y puede acceder a ellas desde cualquier función, clase o archivo sin tener que hacer nada especial.

Las variables superglobales de PHP son:

$ GLOBALES
$ _SERVER
$ _REQUEST
$ _POST
$ _GET
$ _FILES
$ _ENV
$ _COOKIE
$ _SESIÓN


$ GLOBALS
es una variable súper global de PHP que se utiliza para acceder a las variables globales desde cualquier parte del script PHP (también desde funciones o métodos).
PHP almacena todas las variables globales en una matriz llamada $ GLOBALS [ índice ]. El índice contiene el nombre de la variable.

$ _SERVER
$ _SERVER es una variable súper global de PHP que contiene información sobre encabezados, rutas y ubicaciones de script.

//Post-Get-Request los veremos cuando trabajemos en Forms

*/


//$ GLOBALS
$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
print ("<br>");


//$ _SERVER
echo $_SERVER['SERVER_NAME'];
print ("<br>");
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

//Puedes ver más en: https://www.w3schools.com/php/php_superglobals_server.asp





?>