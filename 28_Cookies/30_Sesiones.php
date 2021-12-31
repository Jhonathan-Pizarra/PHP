<!DOCTYPE html>
<html>

<body>

<?php
/*
Sesion PHP

Cuando trabaja con una aplicación, la abre, realiza algunos cambios y, a continuación, la cierra.
Esto es muy parecido a una sesión. La computadora sabe quién eres. Sabe cuándo inicia la aplicación y cuándo termina.
Pero en Internet hay un problema: el servidor web no sabe quién eres ni qué haces, porque la dirección HTTP no mantiene el estado.

Las variables de sesión resuelven este problema almacenando la información del usuario para usarla en varias páginas (por ejemplo, nombre de usuario, color favorito, etc.).
De forma predeterminada, las variables de sesión duran hasta que el usuario cierra el navegador.

Entonces; Las variables de sesión contienen información sobre un solo usuario y están disponibles para todas las páginas de una aplicación.
Nota: Si necesita un almacenamiento permanente, es posible que desee almacenar los datos en una base de datos. (MySQL is the most popular database system used with PHP.)
*/

/*
Iniciar una sesión PHP
Se inicia una sesión con la función.session_start()

Las variables de sesión se establecen con la variable global php: $_SESSION.
*/

/*
¿Cómo funciona? ¿Cómo sabe que soy yo?
La mayoría de las sesiones establecen una clave de usuario en el equipo del usuario que tiene un aspecto similar al siguiente: 765487cf34ert8dede5a562e4f3a7e12.
Luego, cuando se abre una sesión en otra página, escanea la computadora en busca de una clave de usuario. Si hay una coincidencia, accede a esa sesión, si no, inicia una nueva sesión.
*/



?>

</body>
</html>

