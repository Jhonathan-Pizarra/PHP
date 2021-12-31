<!DOCTYPE html>
<html>
<body>

<!--
Las propiedades estáticas se pueden llamar directamente, sin crear una instancia de una clase.
Las propiedades estáticas se declaran con la palabra clave:static

Para tener acceso a una propiedad estática, utilice el nombre de clase, dos puntos (::) y el nombre de propiedad
-->

<?php
/*
Aquí, declaramos una propiedad estática: $value. A continuación, nos hacemos eco del valor de la propiedad estática utilizando el nombre de clase, dos puntos (::) y el nombre de propiedad (sin crear primero una clase).
*/

class pi {
    public static $value = 3.14159;
}

// Get static property
echo pi::$value;
?>


<?php
/*
 Una clase puede tener propiedades estáticas y no estáticas. Se puede tener acceso a una propiedad estática desde un método de la misma clase mediante la palabra clave "self" y los dos puntos dobles (::)
 */
class pi2 {
    public static $value=3.14159;
    public function staticValue() {
        return self::$value;
    }
}

$pi = new pi2();
echo $pi->staticValue();
?>


<?php
/*
 Para llamar a una propiedad estática desde una clase secundaria, use la palabra clave dentro de la clase secundaria
 */
class pi3 {
    public static $value=3.14159;
}

class x extends pi3 {
    public function xStatic() {
        return parent::$value;
    }
}

// Get value of static property directly via child class
echo x::$value;

// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
?>

</body>
</html>


