<?php
/*
TIPOS DE DATOS, en php tenemos datos como:
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource*

Usaremos var_dump(); para ver el tipo de dato y el valor de la variable!

*/
//Cadenas, pueden ser entre "" o ''
$x = "Hello world!";
$y = 'Hello world!';
var_dump($x);
echo "<br>";

//Integer, es un número sin decimales
//varia entre -2,147,483,648 y 2,147,483,647.
//Un entero debe tener al menos un dígito
//Un entero no debe tener un punto decimal
//Un número entero puede ser positivo o negativo.
//Los enteros se pueden especificar en: notación decimal (base 10), hexadecimal (base 16), octal (base 8) o binaria (base 2)
$z = 5985;
var_dump($z);
echo "<br>";

//PHP Float
//Un flotante (número de coma flotante) es un número con un punto decimal o un número en forma exponencial.
$p = 12.534;
var_dump($p);
echo "<br>";


//PHP booleano
//Un booleano representa dos estados posibles: VERDADERO o FALSO.
$v = true;
$f = false;
//Los booleanos se usan a menudo en pruebas condicionales.
var_dump($v);
echo "<br>";

//Array PHP
//Un array o vector, o arreglo  almacena múltiples valores en una sola variable.
//En el siguiente ejemplo, $ cars es un vector. La función PHP var_dump () devuelve el tipo de datos y el valor:
$cars = array("Volvo","BMW","Toyota"); //Un arreglo de Strings!
var_dump($cars);
echo "<br>";

//Objects PHP
// Un objeto es un tipo de datos que almacena datos e información sobre cómo procesar esos datos.
// En PHP, un objeto debe declararse explícitamente:
// Primero debemos declarar una clase de objeto. Para esto, usamos la palabra clave class.
// Una clase es una estructura que puede contener propiedades y métodos:
class Car {
    //Metodo
    function Car(){
        //Propiedades
        $this -> modelo = "Toyota";
    }
}
//Segundo, crear el objeto:
$autobus = new Car();
//Acceder a sus propiedades:
echo $autobus -> modelo;
echo "<br>";

//Valor NULL PHP
//Null es un tipo de datos especial que solo puede tener un valor: NULL.
//Una variable de tipo de datos NULL es una variable que no tiene ningún valor asignado.
//Consejo: Si se crea una variable sin un valor, se le asigna automáticamente un valor NULL.
#$variable;
#var_dump($variable);
echo "<br>";

//Las variables también se pueden vaciar estableciendo el valor en NULL:
$multiValor = 3;
$multiValor = 4;
$multiValor = NULL; //De ese modo vaciamos los valores para poderle realisnar otro
$multiValor = 1;
var_dump($multiValor);
echo "<br>";

//MATRICES
define("cars", ["Alfa Romeo", "BMW", "Toyota"]);
echo cars[0];


//Recurso PHP
//El tipo de recurso especial no es un tipo de datos real. Es el almacenamiento de una referencia a funciones y recursos externos a PHP.
//Un ejemplo común del uso del tipo de datos del recurso es una llamada a la base de datos.
//No hablaremos sobre el tipo de recurso aquí, ya que es un tema avanzado.

?>
