<!DOCTYPE html>
<html>
<body>

<!--
PHP - ¿Qué son las interfaces?
Las interfaces permiten especificar qué métodos debe implementar una clase.

Las interfaces facilitan el uso de una variedad de clases diferentes de la misma manera.
Cuando una o más clases utilizan la misma interfaz, se denomina "polimorfismo".


PHP - Interfaces vs. Clases Abstractas
La interfaz es similar a las clases abstractas. La diferencia entre interfaces y clases abstractas son:

Las interfaces no pueden tener propiedades, mientras que las clases abstractas sí pueden
Todos los métodos de interfaz deben ser públicos, mientras que los métodos de clase abstracta son públicos o protegidos
Todos los métodos en una interfaz son abstractos, por lo que no se pueden implementar en código y la palabra clave abstracta no es necesaria
Las clases pueden implementar una interfaz mientras heredan de otra clase al mismo tiempo


PHP - Uso de interfaces
Para implementar una interfaz, una clase debe usar la palabra clave. implements
Una clase que implementa una interfaz debe implementar todos los métodos de la interfaz.
-->
<?php
interface Animal {
    public function makeSound();
}

class Cat implements Animal {
    public function makeSound() {
        echo "Meow";
    }
}

$animal = new Cat();
$animal->makeSound();
?>

<!--
Del ejemplo anterior, digamos que nos gustaría escribir un software que administre un grupo de animales. Hay acciones que todos los animales pueden hacer, pero cada animal lo hace a su manera.
Usando interfaces, podemos escribir algún código que pueda funcionar para todos los animales, incluso si cada animal se comporta de manera diferente:
Gato, Perro y Ratón son todas las clases que implementan la interfaz Animal, lo que significa que todos ellos son capaces de hacer un sonido utilizando el método. Debido a esto, podemos recorrer todos los animales y decirles que hagan un sonido, incluso si no sabemos qué tipo de animal es cada uno.
Dado que la interfaz no le dice a las clases cómo implementar el método, cada animal puede hacer un sonido a su manera.
-->
<?php
// Interface definition
interface Animal2 {
    public function makeSound();
}

// Class definitions
class Cat2 implements Animal2 {
    public function makeSound() {
        echo " Meow ";
    }
}

class Dog implements Animal2 {
    public function makeSound() {
        echo " Bark ";
    }
}

class Mouse implements Animal2 {
    public function makeSound() {
        echo " Squeak ";
    }
}

// Create a list of animals
$cat = new Cat2();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
    $animal->makeSound();
}
?>



</body>
</html>

