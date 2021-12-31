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


//$ _REQUEST
//se utiliza para recopilar datos después de enviar un formulario HTML.
//Digamos que tenemos un form en HTML, y tiene un botón de Envío.
//los datos de ese formulario deberán ser procesados, ahi es donde entra PHP
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}

//$ _POST
//e utiliza para recopilar datos de formularios después de enviar un formulario HTML con method = "post".
// $ _POST también se usa ampliamente para pasar variables.
//Digamos que tenemos un form en HTML, y tiene un botón de Envío.
//Para procesar los datos, necesitamso saber el valor de ese dato que ha sido enviado
//POST recopila el valor de ese dato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}

//$ _GET
//es una variable súper global de PHP que se utiliza para recopilar datos de formularios después de enviar un formulario HTML con method = "get".
//$ _GET también puede recopilar datos enviados en la URL.
//Supongamos que tenemos una página HTML que contiene un hipervínculo: <a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
//Cuando un usuario hace clic en el enlace "Test $ GET", los parámetros "subject" y "web" se envían a "test_get.php", y luego puede acceder a sus valores en "test_get.php" con $ _GET.
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];

?>