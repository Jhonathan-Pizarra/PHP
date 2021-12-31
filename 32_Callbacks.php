<?php
/*
Funciones de devolución de llamada o Callback

Una fucnión de callback  es una función que se pasa como un argumento a otra función.
 es una función que se pasa como un argumento a otra función.

*/
?>
<!DOCTYPE html>
<html>

<body>

    <!--Funcion de callback -->
    <?php
    function my_callback($item) {
        return strlen($item);
    }

    $strings = ["apple", "orange", "banana", "coconut"];
    $lengths = array_map("my_callback", $strings);
    print_r($lengths);
    ?>

    <!--A partir de la versión 7, PHP puede pasar funciones anónimas como funciones de devolución de llamada:-->
    <?php
    $strings = ["apple", "orange", "banana", "coconut"];
    $lengths = array_map( function($item) { return strlen($item); } , $strings);
    print_r($lengths);
    ?>

    <!--Devoluciones de llamada en funciones definidas por el usuario
    Las funciones y métodos definidos por el usuario también pueden tomar funciones de devolución de llamada como argumentos.
    Para usar funciones de devolución de llamada dentro de una función o método definido por el usuario, llámelo agregando paréntesis a la variable y pase argumentos como con las funciones normales:
    -->
    <?php
    function exclaim($str) {
        return $str . "! ";
    }

    function ask($str) {
        return $str . "? ";
    }

    function printFormatted($str, $format) {
        // Calling the $format callback function
        echo $format($str);
    }

    // Pass "exclaim" and "ask" as callback functions to printFormatted()
    printFormatted("Hello world", "exclaim");
    printFormatted("Hello world", "ask");
    ?>

</body>
</html>
