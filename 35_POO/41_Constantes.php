<!DOCTYPE html>
<html>
<body>

<!--
PHP - Constantes de clase

Las constantes no se pueden cambiar una vez que se declara.
Las constantes de clase pueden ser útiles si necesita definir algunos datos constantes dentro de una clase.
Una constante de clase se declara dentro de una clase con la palabra clave.const

Las constantes de clase distinguen entre mayúsculas y minúsculas. Sin embargo, se recomienda nombrar las constantes en mayúsculas.
-->

<?php
#Podemos acceder a una constante desde fuera de la clase
class Goodbye {
    const LEAVING_MESSAGE = "Bien hecho, has llegado hasta aqui!";
}

echo Goodbye::LEAVING_MESSAGE;
?>

<?php
#O bien, podemos acceder a una constante desde dentro de la clase
class Goodbye2 {
    const LEAVING_MESSAGE = "Estoy viendo VanHellsing!";
    public function byebye() {
        echo self::LEAVING_MESSAGE;
    }
}

$goodbye = new Goodbye2();
$goodbye->byebye();
?>


</body>
</html>

