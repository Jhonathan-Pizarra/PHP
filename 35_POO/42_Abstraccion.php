<!DOCTYPE html>
<html>
<body>

<!--
PHP - ¿Qué son las clases y métodos abstractos?

Las clases y métodos abstractos son cuando la clase principal tiene un método con nombre, pero necesita su(s) clase(s) secundaria(s) para completar las tareas.
Una clase abstracta es una clase que contiene al menos un método abstracto. Un método abstracto es un método que se declara, pero no se implementa en el código.

Cuadno una clase secundaria se hereda de una clase abstracta, tenemos las siguientes reglas:

El método de clase secundaria debe definirse con el mismo nombre y vuelve a declarar el método abstracto primario
El método de clase secundaria debe definirse con el mismo modificador de acceso restringido o con un modificador de acceso menos restringido
El número de argumentos requeridos debe ser el mismo. Sin embargo, la clase secundaria puede tener argumentos opcionales además
-->

<?php
#Explicacion a continucacion:
/*
Las clases Audi, Volvo y Citroën se heredan de la clase Car. Esto significa que las clases Audi, Volvo y Citroën pueden usar la propiedad pública $name, así como el método público __construct() de la clase Car debido a la herencia.
Pero, intro() es un método abstracto que debe definirse en todas las clases secundarias y deben devolver una cadena.
*/
// Parent class
abstract class Car {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function intro() : string;
}

// Child classes
class Audi extends Car {
    public function intro() : string {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends Car {
    public function intro() : string {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

class Citroen extends Car {
    public function intro() : string {
        return "French extravagance! I'm a $this->name!";
    }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
?>


<?php
#Este ejemplo vemos que un método abstracto tiene un argumento
abstract class ParentClass {
    // Abstract method with an argument
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
    public function prefixName($name) {
        if ($name == "John Doe") {
            $prefix = "Mr.";
        } elseif ($name == "Jane Doe") {
            $prefix = "Mrs.";
        } else {
            $prefix = "";
        }
        return "{$prefix} {$name}";
    }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
?>


<?php
#En este ejemplo vemos que un  método abstracto tiene un argumento y la clase secundaria tiene dos argumentos opcionales que no están definidos en el método abstracto del padre
abstract class ParentClass2 {
    // Abstract method with an argument
    abstract protected function prefixName($name);
}

class ChildClass2 extends ParentClass2 {
    // The child class may define optional arguments that are not in the parent's abstract method
    public function prefixName($name, $separator = ".", $greet = "Dear") {
        if ($name == "John Doe") {
            $prefix = "Mr";
        } elseif ($name == "Jane Doe") {
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }
        return "{$greet} {$prefix}{$separator} {$name}";
    }
}

$class = new ChildClass2;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
?>

</body>
</html>


