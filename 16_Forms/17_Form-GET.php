<html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

</body>
</html>

<!--
¿Cuándo usar GET?

La información enviada desde un formulario con el método GET es visible para todos (todos los nombres y valores de las variables se muestran en la dirección URL). GET también tiene límites en la cantidad de información a enviar. La limitación es de unos 2000 caracteres. Sin embargo, debido a que las variables se muestran en la URL, es posible marcar la página. Esto puede ser útil en algunos casos.
GET se puede utilizar para enviar datos no confidenciales.
Nota: ¡GET NUNCA debe usarse para enviar contraseñas u otra información confidencial!
-->