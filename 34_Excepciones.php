<!DOCTYPE html>
<html>

<body>

<!--
¿Qué es una excepción?
Una excepción es un objeto que describe un error o comportamiento inesperado de un script PHP.
Las excepciones son lanzadas por muchas funciones y clases de PHP.
Las funciones y clases definidas por el usuario también pueden generar excepciones.
Las excepciones son una buena manera de detener una función cuando se encuentra con datos que no puede usar.
-->

<!--
Lanzar una excepción
La instrucción permite que una función o método definido por el usuario genere una excepción. Cuando se produce una excepción, el código siguiente no se ejecutará

Si no se detecta una excepción, se producirá un error grave con un mensaje de "Excepción no detectada".

    <?php
//    function divide($dividend, $divisor) {
//        if($divisor == 0) {
//            throw new Exception("Division by zero");
//        }
//        return $dividend / $divisor;
//    }
//
//    echo divide(5, 0);
    ?>
    Lo comentaré para que no me genere el error
-->
<!--Try y Catch
Para evitar el error del ejemplo anterior, podemos usar la instrucción try...catch para detectar excepciones y continuar el proceso.
-->
    <?php
    /*
     El bloque catch indica qué tipo de excepción se debe capturar y el nombre de la variable que se puede utilizar para acceder a la excepció
    */
    function divide2($dividend, $divisor) {
        if($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    try {
        echo divide2(5, 0);
    } catch(Exception $e) {
        echo "Unable to divide.";
    }
    ?>

-->
<!--Claúsula finally
El código en el bloque siempre se ejecutará independientemente de si se detectó una excepción
esta clausula es opcional
-->
    <?php
    function divide($dividend, $divisor) {
        if($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    try {
        echo divide(5, 0);
    } catch(Exception $e) {
        echo "Unable to divide. ";
    } finally {
        echo "Process complete.";
    }
    ?>

<!--Try sin catch -->
    <?php
    function divide3($dividend, $divisor) {
        if($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
    }

    try {
        echo divide3(5, 0);
    } finally {
        echo "Process complete.";
    }
    ?>

<!--Objeto Exception
ontiene información sobre el error o el comportamiento inesperado que encontró la función.
-->
    <?php
    function divide4($dividend, $divisor) {
        if($divisor == 0) {
            throw new Exception("Division by zero", 1);
        }
        return $dividend / $divisor;
    }

    try {
        echo divide4(5, 0);
    } catch(Exception $ex) {
        $code = $ex->getCode();
        $message = $ex->getMessage();
        $file = $ex->getFile();
        $line = $ex->getLine();
        echo "Exception thrown in $file on line $line: [Code $code]
      $message";
    }
    ?>

<!--Revisa la documentacion completa
https://www.w3schools.com/php/php_ref_exception.asp
-->

</body>
</html>
