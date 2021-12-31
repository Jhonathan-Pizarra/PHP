<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
//Obtener valores de variables de sesión PHP
// Desde esta página, accederemos a la información de la sesión que establecimos en la primera página demo_sesion1

// Observe que las variables de sesión no se pasan individualmente a cada nueva página, sino que se recuperan de la sesión que abrimos (session_start() );
// Observe también que todos los valores de las variables de sesión se almacenan en la variable global $_SESSION
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

//Otra forma de mostrar todos los valores de las variables de sesión para una sesión de usuario es ejecutar el código siguiente:
print_r($_SESSION);
?>

</body>
</html>
