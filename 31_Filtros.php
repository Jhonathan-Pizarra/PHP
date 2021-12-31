<?php
/*
Validación de datos = Determinar si los datos están en la forma adecuada.
Desinfección de datos = Eliminar cualquier carácter ilegal de los datos.

Los filtros PHP se utilizan para validar y desinfectar la entrada externa (que venga de afuera)

La extensión de filtro PHP tiene muchas de las funciones necesarias para verificar la entrada del usuario y está diseñada para hacer que la validación de datos sea más fácil y rápida.
¿Por qué usar filtros?
Muchas aplicaciones web reciben entradas externas. La entrada/datos externos pueden ser:

Entrada del usuario desde un formulario
Cookies
Datos de servicios web
Variables de servidor
Resultados de la consulta de base de datos

¡Siempre debe validar los datos externos!
¡Los datos enviados no válidos pueden provocar problemas de seguridad y romper su página web!
¡Al usar filtros PHP, puede estar seguro de que su aplicación obtiene la entrada correcta!

*/
?>
<!DOCTYPE html>
<html>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
    }
</style>
<body>

<table>
    <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
    </tr>
    <?php
    #La función filter_list() se puede utilizar para enumerar lo que ofrece la extensión de filtro PHP
    foreach (filter_list() as $id =>$filter) {
        echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
    }
    ?>
</table>
    <!--PHP filter_var()
    La función valida y desinfecta los datos.
    La función filter_var() filtra una sola variable con un filtro especificado.
    Se necesitan dos datos:
    - La variable que desea comprobar
    - El tipo de comprobación que se va a utilizar
    -->

    <!--Desinfectar una cadena-->
    <?php
    $str = "<h1>Hello World!</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newstr;
    ?>

    <!--Validar un entero-->
    <?php
    $int = 100;

    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("Integer is valid");
    } else {
        echo("Integer is not valid");
    }
    ?>

    <!--Consejo: filter_var() y problema con 0
    En el ejemplo anterior, si $int se estableció en 0, la función anterior devolverá "Integer is not valid". Para resolver este problema, utilice el código siguiente:
    -->
    <?php
    $int = 0;

    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo("Integer is valid");
    } else {
        echo("Integer is not valid");
    }
    ?>

    <!--Validar una dirección IP-->
    <?php
    $ip = "127.0.0.1";

    if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
        echo("$ip is a valid IP address");
    } else {
        echo("$ip is not a valid IP address");
    }
    ?>

    <!--Desinfectar y validar una dirección de correo electrónico
    se utiliza la función para eliminar primero todos los caracteres no válidos de la variable $email y, a continuación, comprobar si se trata de una dirección de correo electrónico válida
    -->
    <?php
    $email = "johnathan.pizarra@example.com";

    // Remove all illegal characters from email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo("$email is a valid email address");
    } else {
        echo("$email is not a valid email address");
    }
    ?>

    <!--Desinfectar y validar una URL-->
    <?php
    $url = "https://www.w3schools.com";

    // Remove all illegal characters from a url
    $url = filter_var($url, FILTER_SANITIZE_URL);

    // Validate url
    if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
        echo("$url is a valid URL");
    } else {
        echo("$url is not a valid URL");
    }
    ?>

    <!--Subamos el nivel con algo más avanzado!-->
    <!--Validate an Integer Within a Range-->
    <!--En el ejemplo siguiente se utiliza la función filter_var() para comprobar si una variable es de tipo INT y está entre 1 y 200-->
    <?php
    $int = 122;
    $min = 1;
    $max = 200;

    if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
        echo("Variable value is not within the legal range");
    } else {
        echo("Variable value is within the legal range");
    }
    ?>

    <!--Validar dirección IPv6-->
    <?php
    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

    if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
        echo("$ip is a valid IPv6 address");
    } else {
        echo("$ip is not a valid IPv6 address");
    }
    ?>

    <!--Validar URL: debe contener QueryString
    Las Query String o cadenas de consultas es un término que se utiliza para hacer referencia a una interacción con una base de datos
    Es algo así: https://www.fotocasa.es/es/?q=pisos+en+barcelona&ciudad=Barcelona
    -->
    <?php
    $url = "https://www.w3schools.com";

    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
        echo("$url is a valid URL with a query string");
    } else {
        echo("$url is not a valid URL with a query string");
    }
    ?>

    <!--Quitar caracteres con valor ASCII > 127-->
    <?php
    $str = "<h1>Hello WorldÆØÅ!</h1>";

    $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo $newstr;
    ?>


</body>
</html>
