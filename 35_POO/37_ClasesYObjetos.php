<!DOCTYPE html>
<html>
<body>

<!--
Clases y Objetos
Cuando se crean los objetos individuales (manzana, plátano, etc.), heredan todas las propiedades y comportamientos de la clase, pero cada objeto tendrá diferentes valores para las propiedades.
Nota: ¡En una clase, las variables se llaman propiedades y las funciones se llaman métodos!

¡Las clases no son nada sin objetos! Podemos crear múltiples objetos a partir de una clase. Cada objeto tiene todas las propiedades y métodos definidos en la clase, pero tendrán diferentes valores de propiedad.
-->

<!--Definir una clase -->
<?php
class Fruit {
    // code goes here...
}
?>

<!--Dwfinir propiedades y métodos -->
<?php
class Fruit2 {
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}
?>

<!--Definir objetos -->
<?php
class Fruit3 {
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }

}

$apple = new Fruit3();
$banana = new Fruit3();
$apple->set_name('Apple');
$banana->set_name('Banana');
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>

<!--Palabra clave $this -->
<!--
La palabra clave $this se refiere al objeto actual y solo está disponible dentro de los métodos.
En el sigueinte ejemplo podemos cambiar el valor de la propiedad $name de 2 formas:
-->
<?php
#1 ) Dentro de la clase (gregando un método set_name() y usando $this)
class Fruit4 {
    public $name;
    function set_name($name) {
        $this->name = $name;
    }
}
$apple = new Fruit4();
$apple->set_name("Apple");

echo $apple->name;
?>

<?php
#2 ) Fuera de la clase (gregando un método set_name() y usando $this)
class Fruit5 {
    public $name;
}
$apple = new Fruit5();
$apple->name = "Apple";

echo $apple->name;
?>

<!--PHP - instanceof-->
<?php
#Puede utilizar la palabra clave instanceof para comprobar si un objeto pertenece a una clase específica
$apple = new Fruit();
var_dump($apple instanceof Fruit);
?>

<?php
#Puede utilizar la palabra clave instanceof para comprobar si un objeto pertenece a una clase específica
class Fruit6 {
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}

$apple = new Fruit6();
var_dump($apple instanceof Fruit);
?>


</body>
</html>


