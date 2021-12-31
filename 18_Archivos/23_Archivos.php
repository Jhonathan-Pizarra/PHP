<!--
PHP incluye y requiere declaraciones
Es posible insertar el contenido de un archivo PHP en otro archivo PHP (antes de que el servidor lo ejecute), con la instrucción include o require.

Las declaraciones include y require son idénticas, excepto en caso de fallo:
- require producirá un error grave (E_COMPILE_ERROR) y detendrá la secuencia de comandos
- include sólo producirá una advertencia (E_WARNING) y la secuencia de comandos continuará

Por lo tanto, si desea que la ejecución continúe y muestre a los usuarios la salida, incluso si falta el archivo de inclusión, use la declaración de inclusión. De lo contrario, en el caso de FrameWork, CMS o una codificación de aplicación PHP compleja, utilice siempre la instrucción require para incluir un archivo de clave para el flujo de ejecución.
Esto ayudará a evitar comprometer la seguridad e integridad de su aplicación, en caso de que falte accidentalmente un archivo de clave.

Incluir archivos ahorra mucho trabajo. Esto significa que puede crear un encabezado, pie de página o archivo de menú estándar para todas sus páginas web. Luego, cuando sea necesario actualizar el encabezado, solo puede actualizar el archivo de inclusión del encabezado.

-->


<!--PHP incluye footer-->
<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>
<?php include 'footer.php';?>

<!--PHP incluye menu-->
<div class="menu">
    <?php include 'menu.php';?>
</div>

<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>

<!--PHP incluye vars-->
<h1>Welcome to my home page!</h1>
<?php include 'vars.php';
echo "I have a $color $car.";?>


<!--PHP incluye vs requiere

La instrucción "requiere" también se utiliza para incluir un archivo en el código PHP.
Sin embargo, hay una gran diferencia entre incluir y requerir; cuando se incluye un archivo con la instrucción "include" y PHP no puede encontrarlo, el script continuará ejecutándose
-->
<h1>Welcome to my home page!</h1>
<?php include 'noFileExists.php';
echo "I have a $color $car.";
?>

<!--Si hacemos el mismo ejemplo usando la instrucción, la instrucción echo no se ejecutará porque la ejecución del script muere después de que la instrucción devolviera un error fata-->
<h1>Welcome to my home page!</h1>
<?php require 'noFileExists.php';
echo "I have a $color $car.";
?>

