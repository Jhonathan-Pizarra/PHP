<!DOCTYPE html>
<html>
<body>

<!--
PHP - ¿Qué es un Iterable?

Un iterable es cualquier valor que se puede recorrer en bucle con un bucle.foreach()
El pseudotipo se introdujo en PHP 7.1, y se puede utilizar como un tipo de datos para argumentos de función y valores de retorno de función.

PHP - Uso de iterables

-->

<?php
#La palabra clave iterable se puede utilizar como un tipo de datos de un argumento de función o como el tipo de retorno de una función
#1) Como un argumento de función iterable:
function printIterable(iterable $myIterable) {
    foreach($myIterable as $item) {
        echo $item;
    }
}

$arr = ["a", "b", "c"];
printIterable($arr);
?>

<?php
#2) Como un tipo de retorono iterable
function getIterable():iterable {
    return ["a", "b", "c"];
}

$myIterable = getIterable();
foreach($myIterable as $item) {
    echo $item;
}
?>

<!--
PHP - Creación de iterables
Matrices
Todas las matrices son iterables, por lo que cualquier matriz se puede utilizar como argumento de una función que requiere un iterable.

Iteradores
Cualquier objeto que implemente la interfaz se puede utilizar como argumento de una función que requiere un iterable.
Un iterador contiene una lista de elementos y proporciona métodos para recorrerlos en bucle. Mantiene un puntero a uno de los elementos de la lista.
Cada elemento de la lista debe tener una clave que se pueda utilizar para encontrar el elemento.


Un iterador debe tener estos métodos:

current() - Devuelve el elemento al que apunta actualmente el puntero. Puede ser cualquier tipo de datos
key() Devuelve la clave asociada al elemento actual de la lista. Solo puede ser un entero, float, booleano o string
next() Mueve el puntero al siguiente elemento de la lista
rewind() Mueve el puntero al primer elemento de la lista
valid() Si el puntero interno no apunta a ningún elemento (por ejemplo, si se llamó a next() al final de la lista), esto debería devolver false. Devuelve true en cualquier otro caso
-->
<?php
// Create an Iterator
class MyIterator implements Iterator {
    private $items = [];
    private $pointer = 0;

    public function __construct($items) {
        // array_values() makes sure that the keys are numbers
        $this->items = array_values($items);
    }

    public function current() {
        return $this->items[$this->pointer];
    }

    public function key() {
        return $this->pointer;
    }

    public function next() {
        $this->pointer++;
    }

    public function rewind() {
        $this->pointer = 0;
    }

    public function valid() {
        // count() indicates how many items are in the list
        return $this->pointer < count($this->items);
    }
}

// A function that uses iterables
function printIterable2(iterable $myIterable) {
    foreach($myIterable as $item) {
        echo $item;
    }
}

// Use the iterator as an iterable
$iterator = new MyIterator(["a", "b", "c"]);
printIterable2($iterator);
?>

</body>
</html>
