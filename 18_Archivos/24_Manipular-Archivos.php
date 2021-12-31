<!--
PHP Manipulando Archivos
PHP tiene varias funciones para crear, leer, cargar y editar archivos.

Cuando estás manipulando archivos debes tener mucho cuidado.
Puedes hacer mucho daño si haces algo mal. Los errores comunes son: editar el archivo incorrecto, llenar un disco duro con datos basura y eliminar el contenido de un archivo por accidente.
-->

<!--
PHP readfile()
La función readfile()  lee un archivo y lo escribe en el búfer de salida.
Supongamos que tenemos un archivo de texto llamado "webdictionary.txt", almacenado en el servidor
-->

<!DOCTYPE html>
<html>
<body>

<?php
#La función es útil si todo lo que desea hacer es abrir un archivo y leer su contenido.
echo readfile("webdictionary.txt");
?>

</body>
</html>