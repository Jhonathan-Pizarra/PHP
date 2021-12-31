<!DOCTYPE html>
<html>
<body>

<!--
PHP - Métodos estáticos

Los métodos estáticos se pueden llamar directamente, sin crear primero una instancia de la clase.
Los métodos estáticos se declaran con la palabra clave:static

Para tener acceso a un método estático, utilice el nombre de clase, dos puntos dobles (::) y el nombre del método
-->

<?php
/*
Aquí, declaramos un método estático: welcome().
Luego, llamamos al método estático usando el nombre de clase, dos puntos dobles (::) y el nombre del método (sin crear primero una instancia de la clase).
*/
class greeting {
    public static function welcome() {
        echo "Hello World!";
    }
}

// Call static method
greeting::welcome();
?>

<?php
/*
Una clase puede tener métodos estáticos y no estáticos. Se puede acceder a un método estático desde un método de la misma clase utilizando la palabra clave self y los dos puntos (::)
*/

class greeting2 {
    public static function welcome() {
        echo "Hello World!";
    }

    public function __construct() {
        self::welcome();
    }
}

new greeting2();
?>


<?php
/*
Los métodos estáticos también se pueden llamar desde métodos de otras clases
*/
class greeting3 {
  public static function welcome() {
    echo "Hello World!";
  }
}

class SomeOtherClass {
  public function message() {
      greeting3::welcome();
  }
}
?>


<?php
/*
Para llamar a un método estático desde una clase secundaria, use la palabra "parent" clave dentro de la clase secundaria.
*/
class domain {
    protected static function getWebsiteName() {
        return "jhonathan-pizarra.com";
    }
}

class domainW3 extends domain {
    public $websiteName;
    public function __construct() {
        $this->websiteName = parent::getWebsiteName();
    }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>

</body>
</html>

