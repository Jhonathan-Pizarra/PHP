<!--
Esto es un form HTML:
<html>
<body>

<form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

</body>
</html>
Cuando el usuario completa el formulario anterior y hace clic en el botón enviar, los datos del formulario se envían para su procesamiento a un archivo PHP llamado "welcome.php". Los datos del formulario se envían con el método HTTP POST.
El "welcome.php" se ve así:
-->


Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<!--
¿Cuándo usar POST?

La información enviada desde un formulario con el método POST es invisible para otros (todos los nombres/valores están incrustados en el cuerpo de la solicitud HTTP) y no tiene límites en la cantidad de información a enviar.
Además, POST admite funcionalidad avanzada, como el soporte para la entrada binaria de varias partes al cargar archivos en el servidor.
Sin embargo, debido a que las variables no se muestran en la URL, no es posible marcar la página.
Los desarrolladores prefieren POST para enviar datos de formularios.
-->