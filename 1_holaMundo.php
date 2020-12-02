<?php
/*
PHP es un lenguaje de script de servidor y una poderosa herramienta para crear páginas web dinámicas e interactivas.
PHP es una alternativa ampliamente utilizada, gratuita y eficiente a competidores como el ASP de Microsoft.
PHP 7 es la última versión estable.


Lo que ya deberías saber
Antes de continuar, debe tener una comprensión básica de lo siguiente:

-HTML
-CSS
-JavaScript

¿Qué es PHP?
PHP es un acrónimo de "PHP: preprocesador de hipertexto"
PHP es un lenguaje de script de código abierto ampliamente utilizado
Los scripts PHP se ejecutan en el servidor
PHP es gratis para descargar y usar
¡PHP es un lenguaje increíble y popular!
¡Es lo suficientemente potente como para ser el núcleo del sistema de blogs más grande de la web (WordPress)!
¡Es lo suficientemente profundo como para ejecutar la red social más grande (Facebook)!
¡También es bastante fácil ser el primer lenguaje del lado del servidor para principiantes!

¿Qué es un archivo PHP?
Los archivos PHP pueden contener texto, HTML, CSS, JavaScript y código PHP
El código PHP se ejecuta en el servidor y el resultado se devuelve al navegador como HTML sin formato
Los archivos PHP tienen la extensión " .php"

¿Qué puede hacer PHP?
PHP puede generar contenido de página dinámico
PHP puede crear, abrir, leer, escribir, eliminar y cerrar archivos en el servidor
PHP puede recopilar datos de formulario
PHP puede enviar y recibir cookies
PHP puede agregar, eliminar, modificar datos en su base de datos
PHP puede usarse para controlar el acceso de los usuarios
PHP puede encriptar datos
Con PHP no está limitado a la salida HTML. Puede generar imágenes, archivos PDF e incluso películas Flash. También puede generar cualquier texto, como XHTML y XML.

¿Por qué PHP?
PHP se ejecuta en varias plataformas (Windows, Linux, Unix, Mac OS X, etc.)
PHP es compatible con casi todos los servidores utilizados hoy (Apache, IIS, etc.)
PHP admite una amplia gama de bases de datos
PHP es gratis. Descárguelo del recurso oficial de PHP: www.php.net
PHP es fácil de aprender y se ejecuta eficientemente en el lado del servidor


¿Qué hay de nuevo en PHP 7?
PHP 7 es mucho más rápido que la versión estable popular anterior (PHP 5.6)
PHP 7 ha mejorado el manejo de errores
PHP 7 admite declaraciones de tipo más estrictas para argumentos de función
PHP 7 soporta nuevos operadores (como el operador de la nave espacial: <=>)

Sintaxis PHP
Se ejecuta un script PHP en el servidor, y el resultado HTML simple se envía de vuelta al navegador.

Sintaxis básica de PHP
Un script PHP se puede colocar en cualquier parte del documento.

Un script PHP comienza con <?php y termina con ?>:

<?php
echo "Hola Mundo!";
?>

Un archivo PHP normalmente contiene etiquetas HTML y algunos códigos de script PHP, tal y como teníamos para JS!:
<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>

//Esas 3 últimas lineas son PHP!
NOTA: las instrucciones PHP terminan con un punto y coma ( ;). OJO
</body>
</html>



¿PHP, KeySesitive?
En PHP, hay palabras clave (por ejemplo if, else, while, echo, etc.) clases, funciones, y funciones definidos por el usuario no son KeSensitive es decir:
echo "Hola Mundo!";
ECHO "Hola Mundo!";
Echo "Hola Mundo!";
eChO "Hola Mundo!";

Son perfectamente válidos! no producen error :D
Sin embargo; ¡todos los nombres de variables SI distinguen entre mayúsculas y minúsculas!
carro != Carro != carRo, ahí si produce error


COMENTARIOS
Se puede comentar, dentro del código PHP así: //, /* (*)/, o así: #. Ojo, le puse (*) porque de no hacerlo hay conflicto con el otro cierre de este texto

*/
eChO "Mi primer script en PHP!";

?>



