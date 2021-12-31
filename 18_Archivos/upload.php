<?php
/*
Crear el script PHP de archivo de carga

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

Script PHP explicado:

* $target_dir = "uploads/": especifica el directorio donde se va a colocar el archivo
* $target_file especifica la ruta de acceso del archivo que se va a cargar
* $uploadOk=1 aún no se usa (se usará más adelante)
* $imageFileType contiene la extensión de archivo del archivo (en minúsculas)

A continuación, compruebaremos si el archivo de imagen es una imagen real o una imagen falsa
Nota: Deberá crear un nuevo directorio llamado "uploads" en el directorio donde reside el archivo "upload.php". Los archivos cargados se guardarán allí.
*/

/*
Compruebe si el archivo ya existe
Ahora podemos añadir algunas restricciones.

Primero, verificaremos si el archivo ya existe en la carpeta "uploads".
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
Si lo ya existe, se muestra un mensaje de error y $uploadOk se establece en 0:

*/

/*
Limitar el tamaño del archivo
El campo de entrada de archivos en nuestro formulario HTML anterior se llama "fileToUpload".

Ahora, queremos comprobar el tamaño del archivo. Si el archivo es mayor de 500 KB, se muestra un mensaje de error y $uploadOk se establece en 0:
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
*/

/*
Limitar tipo de archivo
El siguiente código solo permite a los usuarios cargar archivos JPG, JPEG, PNG y GIF. Todos los demás tipos de archivo muestran un mensaje de error antes de establecer $uploadOk en 0:
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
*/

//Entonces:

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


?>