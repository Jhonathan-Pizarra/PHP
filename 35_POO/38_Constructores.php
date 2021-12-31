<!DOCTYPE html>
<html>
<body>

<!--La función __construct
Un constructor permite inicializar las propiedades de un objeto tras la creación del objeto.
Si crea una función, PHP llamará automáticamente a esta función cuando cree un objeto a partir de una clase.__construct()
Observe que la función de construcción comienza con dos guiones bajos (__)!
-->

<!--La función __destruct
Se llama a un destructor cuando se destruye el objeto o se detiene o se sale el script.
Si crea una función __destruct(), PHP llamará automáticamente a esta función al final del script.
Observe que la función de destrucción comienza con dos guiones bajos (__)!
-->
<?php
#ejemplo, que el uso de un constructor nos ahorra llamar al método set_name() lo que reduce la cantidad de código:
class Fruit {
    public $name;
    public $color;

    function __construct($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}

$apple = new Fruit("Apple");
echo $apple->get_name();
?>

<?php
# ejemplo siguiente se muestra una función __construct() a la que se llama automáticamente cuando se crea un objeto a partir de una clase y una función __destruct() a la que se llama automáticamente al final del script:
class Fruit2 {
    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

$apple = new Fruit2("Apple", "red");
?>

</body>
</html>
