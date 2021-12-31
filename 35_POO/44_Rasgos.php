<!DOCTYPE html>
<html>
<body>

<!--
PHP - ¿Qué son los rasgos?

PHP solo admite una sola herencia: una clase secundaria solo puede heredar de un solo padre.
Entonces, ¿qué pasa si una clase necesita heredar múltiples comportamientos? Los rasgos de POO resuelven este problema.
Los rasgos se utilizan para declarar métodos que se pueden usar en varias clases. Los rasgos pueden tener métodos y métodos abstractos que se pueden usar en varias clases, y los métodos pueden tener cualquier modificador de acceso (público, privado o protegido).
-->

<?php
/*
Aquí, declaramos un rasgo: mensaje1.
Luego, creamos una clase: Bienvenido.
La clase utiliza el rasgo, y todos los métodos del rasgo estarán disponibles en la clase.
La clase utiliza el rasgo, y todos los métodos del rasgo estarán disponibles en la clase.
*/
trait message1 {
    public function msg1() {
        echo "OOP is fun! ";
    }
}

class Welcome {
    use message1;
}

$obj = new Welcome();
$obj->msg1();
?>


<!--
PHP - Múltiples Rasgos
-->
<?php
/*
Aquí, declaramos dos rasgos: message1 y message2
 A continuación, creamos dos clases: Welcome y Welcome2
 A continuación, creamos dos clases: Welcome y Welcome2
 */
trait messageA {
    public function msg1() {
        echo "OOP is fun! ";
    }
}

trait messageB {
    public function msg2() {
        echo "OOP reduces code duplication!";
    }
}

class Welcome2 {
    use messageA;
}

class Welcome3 {
    use messageA, messageB;
}

$obj = new Welcome2();
$obj->msg1();
echo "<br>";


$obj2 = new Welcome3();
$obj2->msg1();
$obj2->msg2();
?>


</body>
</html>

