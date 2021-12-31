<!DOCTYPE html>
<html>
<body>

<?php
/*
 Archivo PHP Open - fopen()
 Un mejor método para abrir archivos es con la función fopen(). Esta función le da más opciones que la función readfile()

 Archivo de lectura PHP - fread()
 La función fread() lee desde un archivo abierto.

 Archivo PHP Close - fclose()
 La función se utiliza para cerrar un archivo abierto
 Es una buena práctica de programación cerrar todos los archivos después de haber terminado con ellos.
¡Nadie desea que un archivo abierto se ejecute en su servidor ocupando recursos!
*/

#El primer parámetro de contiene el nombre del archivo que se va a abrir y el segundo parámetro especifica en qué modo se debe abrir el archiv
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
#El primer parámetro de contiene el nombre del archivo desde el que se va a leer y el segundo parámetro especifica el número máximo de bytes que se van a leer
echo fread($myfile,filesize("webdictionary.txt"));
# Es una buena práctica de programación cerrar todos los archivos después de haber terminado con ellos.
fclose($myfile);

/*
PHP Read Single Line - fgets()
La función se utiliza para leer una sola línea de un archivo
*/
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);

/*
Comprobación php fin de archivo - feof()

La función comprueba si se ha alcanzado el "final del archivo" (EOF)
La función es útil para recorrer en bucle datos de longitud desconocida
*/

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
fclose($myfile);


/*
PHP Leer un solo carácter - fgetc()
La función se utiliza para leer un solo carácter de un archivo.
*/

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
    echo fgetc($myfile);
}
fclose($myfile);

?>

</body>
</html>