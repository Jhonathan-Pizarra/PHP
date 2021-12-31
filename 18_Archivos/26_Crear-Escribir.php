<!DOCTYPE html>
<html>
<body>

<?php
/*
 Crear Archivo PHP  - fopen()
 La función fopen() también se utiliza para crear un archivo.
 Tal vez un poco confuso, pero en PHP, un archivo se crea utilizando la misma función utilizada para abrir archivos

 Si lo usa en un archivo que no existe, lo creará,

 PHP Write to File - fwrite()
 La función fwrite() se utiliza para escribir en un archivo

 Permisos de archivos PHP
 Si tiene errores al intentar que se ejecute este código, verifique que haya otorgado acceso a su archivo PHP para escribir información en el disco duro.

*/

#El primer parámetro de contiene el nombre del archivo que se va a abrir (o crear) y el segundo parámetro especifica en qué modo se debe abrir el archiv
$myfile = fopen("testfile.txt", "w") or die("Unable to open file!");
$txt = "Johnathan Pizarra\n";
#El primer parámetro de contiene el nombre del archivo en el que se va a escribir y el segundo parámetro es la cadena que se va a escribir
fwrite($myfile, $txt);

$txt = "Zulema Pizarra\n";
fwrite($myfile, $txt);

# Es una buena práctica de programación cerrar todos los archivos después de haber terminado con ellos.
fclose($myfile);

/*
Sobrescritura de PHP
Ahora que "testfile.txt" contiene algunos datos, lo que sucede es que cuando lo abrimos para escribir
se sobreesciben, es decir: que todos los datos existentes serán BORRADOS y comenzaremos con un archivo vacío.
*/
$myfile = fopen("testfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);

$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);

fclose($myfile);

/*
Si ahora abrimos el archivo "newfile.txt", tanto Jhoanthan como Zulema han desaparecido,
*/

/*Más info como siempre en:
https://www.w3schools.com/php/php_ref_filesystem.asp
*/


?>

</body>
</html>