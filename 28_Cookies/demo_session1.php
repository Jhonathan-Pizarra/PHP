<?php
// Inciiar la sesión PHP
// La función session_start(); debe ser lo primero en su documento. Antes de cualquier etiqueta HTML.
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";

// Modific session variable
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
echo "Session variables were modifi.";

//Destroy una sesión PHP
// 1) remove all session variables
session_unset();

// 2) destroy the session
session_destroy();
?>

</body>
</html>