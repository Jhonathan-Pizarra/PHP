<!DOCTYPE html>
<html>
<body>

<!--
PHP - Hrencia

Herencia en POO = Cuando una clase deriva de otra clase.
La clase secundaria heredará todas las propiedades y métodos públicos y protegidos de la clase principal. Además, puede tener sus propias propiedades y métodos.

Una clase heredada se define mediante la palabra clave.extends
-->

<?php
/*
La clase Strawberry se hereda de la clase Fruit.
Esto significa que la clase Strawberry puede usar las propiedades públicas $name y $color, así como los métodos públicos __construct() e intro() de la clase Fruit debido a la herencia.
*/
class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

// Strawberry is inherited from Fruit
//La clase Strawberry también tiene su propio método: message().
class Strawberry extends Fruit {
    public function message() {
        echo "Am I a fruit or a berry? ";
    }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>


<!--
PHP - Herencia y el modificador de acceso protegido
En el capítulo anterior aprendimos que se puede acceder a las propiedades o métodos dentro de la clase y por clases derivadas de esa clase. ¿Qué significa eso?: protected
-->
<?php
/*
En este  ejemplo anterior vemos que si intentamos llamar a un método (intro()) desde fuera de la clase, recibiremos un error. ¡los métodos protected y public funcionarán bien!
*/
class Fruit2 {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Strawberry2 extends Fruit2 {
    public function message() {
        echo "Am I a fruit or a berry? ";
    }
}

// Try to call all three methods from outside class
$strawberry = new Strawberry2("Strawberry", "red");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public
//$strawberry->intro(); // ERROR. intro() is protected
?>


<!--
Anular métodos heredados
Los métodos heredados se pueden reemplazar redefiniendo los métodos (use el mismo nombre) en la clase secundaria.
-->

<?php
# Los métodos __construct() e intro() de la clase secundaria (Strawberry3) anularán los métodos __construct() e intro() de la clase principal (Fruit3)

class Fruit3 {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Strawberry3 extends Fruit3 {
    public $weight;
    public function __construct($name, $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function intro() {
        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    }
}

$strawberry = new Strawberry3("Strawberry", "red", 50);
$strawberry->intro();
?>


<!--PHP - La palabra clave final
La palabra clave final se puede usar para evitar la herencia de clases o para evitar la anulación de métodos.
-->
<?php
final class Fruit4 {
}

#PHP Fatal error: Class Strawberry may not inherit from final class (Fruit) in /home/o6MTL0/prog.php on line
/*class Strawberry4 extends Fruit4 {
}*/
?>

<?php
#En el ejemplo siguiente se muestra cómo evitar que se anule el método
class Fruit5 {
    final public function intro() {
        // some code
    }
}

class Strawberry5 extends Fruit5 {
    // will result in error
    //PHP Fatal error: Cannot override final method Fruit::intro() in /home/sdpysj/prog.php
    /*public function intro() {
        // some code
    }*/
}
?>


</body>
</html>

