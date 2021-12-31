<!--
Con PHP, es fácil cargar archivos en el servidor.
Sin embargo, con facilidad viene el peligro, ¡así que siempre tenga cuidado al permitir la carga de archivos!


Configurar el archivo "php.ini"

Primero, asegúrese de que PHP esté configurado para permitir la carga de archivos.
En el archivo "php.ini", busque la directiva "file_uploads" y configúrela a "On"
file_uploads = On



Crear el formulario HTML
A continuación, cree un formulario HTML que permita a los usuarios elegir el archivo de imagen que desean cargar:

Algunas reglas a seguir para el formulario HTML :
 - Asegúrese de que el formulario utiliza method="post"
 - El formulario también necesita el siguiente atributo: enctype="multipart/form-data". Especifica qué tipo de contenido usar al enviar el formulario

Sin los requisitos anteriores, la carga del archivo no funcionará.

-->

<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<!-- El formulario  envía datos a un archivo llamado "upload.php", que crearemos a continuación.-->


</body>
</html>

