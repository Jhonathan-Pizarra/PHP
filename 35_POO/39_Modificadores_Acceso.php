<!DOCTYPE html>
<html>
<body>

<!--
PHP - Modificadores de acceso
Las propiedades y los métodos pueden tener modificadores de acceso que controlan dónde se puede acceder a ellos.

Hay tres modificadores de acceso:

* public - se puede acceder a la propiedad o método desde cualquier lugar. Esto es predeterminado
* protected - se puede acceder a la propiedad o al método dentro de la clase y mediante clases derivadas de esa clase
* private - SÓLO se puede acceder a la propiedad o al método dentro de la clase

-->


<?php
#Ejemplo:
#Aquí, si intenta establecer la propiedad name, funcionará bien (porque la propiedad name es pública y se puede acceder a ella desde cualquier lugar). Sin embargo, si intenta establecer la propiedad color o weight, se producirá un error grave (porque la propiedad color y el peso están protegidas y son privadas):

class Fruit {
    public $name;
    protected $color;
    private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
//$mango->weight = '300'; // ERROR
?>

<?php
#En el siguiente ejemplo hemos añadido modificadores de acceso a dos funciones. Aquí, si intenta llamar a la función set_color() o set_weight(), se producirá un error grave (porque las dos funciones se consideran protegidas y privadas), incluso si todas las propiedades son públicas
class Fruit2 {
    public $name;
    public $color;
    public $weight;

    function set_name($n) {  // a public function (default)
        $this->name = $n;
    }
    protected function set_color($n) { // a protected function
        $this->color = $n;
    }
    private function set_weight($n) { // a private function
        $this->weight = $n;
    }
}

$mango = new Fruit2();
$mango->set_name('Mango'); // OK
//$mango->set_color('Yellow'); // ERROR
//$mango->set_weight('300'); // ERROR
?>

</body>
</html>
