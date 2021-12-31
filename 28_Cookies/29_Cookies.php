<!DOCTYPE html>
<?php
/*
¿Qué es una cookie?
Una cookie se utiliza a menudo para identificar a un usuario.
Una cookie es un pequeño archivo que el servidor incrusta en el ordenador del usuario.
Cada vez que el mismo ordenador solicite una página con navegador, también enviará la cookie.

Con PHP, puede crear y recuperar valores de cookies.
*/

#Crear cookies con PHP
#Se debe crear la funcion setcookie antes de la etiqueta <html>
$cookie_name = "user";
$cookie_value = "Johnathan Pizarra";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

#Se crea una cookie denominada "user" con el valor "John Doe"
# La cookie caducará después de 30 días (86400 * 30).
# El "/" significa que la cookie está disponible en todo el sitio web (de lo contrario, seleccione el directorio que prefiera).

?>

<html>

<body>

<?php
/*
A continuación, recuperamos el valor de la cookie "usuario" (utilizando la variable global $_COOKIE).
También utilizamos la función "isset" para averiguar si la cookie está configurada
*/
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}

#También podemos usar la gunción setrawcookie() si queremos que el valor de la cookie se codifique y decoficique automáticamente al enviar o traer la URLencoded


/*
Modificar el valor de cookie

Para modificar una cookie, simplemente configure (de nuevo) la cookie utilizando la función:setcookie()
(en este caso modificaré  $cookie_value = "John Doe"; por $cookie_value = "Johnathan Pizarra";
Luego de debe recargar la página
*/

?>

<?php
/*Eliminar cookie
Para eliminar una cookie, utilice la función con una fecha de caducidad en el pasado:setcookie()
*/
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
echo "Cookie 'user' is deleted.";
?>


<?php
/*Compruebe si las cookies están habilitadas
Primero, intente crear una cookie de prueba con la función $_COOKIE
luego cuente la variable de matriz $_COOKIE
*/
setcookie("test_cookie", "test", time() + 3600, '/');
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}
?>

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>
<p>Más referencias en: <a href="https://www.w3schools.com/php/php_ref_network.asp">https://www.w3schools.com/php/php_ref_network.asp</a></p>
</body>
</html>
