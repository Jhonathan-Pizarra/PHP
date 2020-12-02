<?php
/*
PHP Numbers: En este capítulo analizaremos en profundidad los números enteros, flotantes y cadenas de números.

Una cosa a tener en cuenta sobre PHP es que proporciona conversión automática de tipo de datos.
Entonces, si asigna un valor entero a una variable, el tipo de esa variable será automáticamente un entero.
Luego, si asigna una cadena a la misma variable, el tipo cambiará a una cadena.
Esta conversión automática a veces puede romper tu código, y tus sueños, así como ella :(

PHP enteros
Un número entero es un número sin ninguna parte decimal.
2, 256, -256, 10358, -179567 son todos enteros. Mientras que 7.56, 10.0, 150.67 son flotadores.
Entonces, un tipo de datos entero es un número no decimal entre -2147483648 y 2147483647.
Un valor mayor (o menor) que este, se almacenará como flotante, porque excede el límite de un entero.

Otra cosa importante que debe saber es que incluso si 4 * 2.5 es 10, el resultado se almacena como flotante, porque uno de los operandos
es flotante (2.5)

Aquí hay algunas reglas para enteros:
Un entero debe tener al menos un dígito
Un entero no debe tener un punto decimal
Un número entero puede ser positivo o negativo.
Los enteros se pueden especificar en tres formatos: decimal (basado en 10), hexadecimal (basado en 16 - prefijado con 0x) u octal (basado en 8 - prefijado con 0)


FUNCIONES
PHP tiene las siguientes funciones para verificar si el tipo de una variable es entero:
is_int ()
is_integer () - alias de is_int ()
is_long () - alias de is_int ()

*/

$x = 19;
$y = 19.34;
var_dump(is_integer($x)); //true
echo "<br>";
var_dump(is_int($y)); //false
echo "<br>";

/*
Flotadores PHP
Un flotador es un número con un punto decimal o un número en forma exponencial.
2.0, 256.4, 10.358, 7.64E + 5, 5.56E-5 son todos flotantes.
El tipo de datos flotantes comúnmente puede almacenar un valor de hasta 1.7976931348623E + 308 (depende de la plataforma) y tiene una precisión máxima de 14 dígitos.

FUNCIONES
PHP tiene las siguientes funciones para verificar si el tipo de una variable es flotante:
is_float ()
is_double () - alias de is_float ()
*/

$a = 19.2;
$b = 3.123E-5; //0.00003123
var_dump(is_double($a));
echo "<br>";
var_dump(is_float($b));
echo "<br>";

/*
PHP Infinity
Un valor numérico que es mayor que PHP_FLOAT_MAX se considera infinito.

FUNCIONES
PHP tiene las siguientes funciones para verificar si un valor numérico es finito o infinito:
is_finite ()
es infinito()

Sin embargo, la función PHP var_dump () devuelve el tipo de datos y el valor:
*/
$z = 1.9e411; //1.9 ^411 = (1.9) * (1.9) * (1.9).... 411 veces
var_dump(is_infinite($z)); //Es infinito? True, es infinito
echo "<br>";
var_dump($z);
echo "<br>";

/*
 PHP NaN
NaN significa No es un número.
NaN se usa para operaciones matemáticas imposibles.
PHP tiene las siguientes funciones para verificar si un valor no es un número:
is_nan ()

Sin embargo, la función PHP var_dump () devuelve el tipo de datos y el valor:
*/

$t = acos(8);
var_dump(is_nan($t)); //No es un numero?: true, no lo es
echo "<br>";
var_dump($t);


/*
PHP cadenas numéricas
La función PHP is_numeric () se puede usar para encontrar si una variable es numérica.
La función devuelve verdadero si la variable es un número o una cadena numérica, de lo contrario, falso.
*/

$g = 5985;
var_dump(is_numeric($g)); //True

$g = "5985";
var_dump(is_numeric($g)); //True

$g = "59.85" + 100;
var_dump(is_numeric($g)); //True

$g = "Hello";
var_dump(is_numeric($g)); //False

echo "<br>";
//Desde PHP 7.0: la función is_numeric () devolverá FALSE para cadenas numéricas en forma hexadecimal (por ejemplo, 0xf4c3b00c),
// ya que ya no se consideran cadenas numéricas.

/*
 CASTINGS
PHP Convertir cadenas y flotantes a enteros
A veces necesita convertir un valor numérico en otro tipo de datos.
Las funciones (int), (integer) o intval () se usan a menudo para convertir un valor en un entero.
*/

// Cast float to int
$m = 23465.768; //float
$int_cast = (int)$m; //convertido de float a int
echo $int_cast; // 23465

echo "<br>";

// Cast string to int
$x = "23465.768"; //string
$int_cast = (int)$x; //convertir de string a int
echo $int_cast; // 23465
echo "</br>";

//Rands
$carso = array("Volvo", "BMW", "Toyota");
$randCars = array_rand($carso, 1);
echo ($carso[$randCars]);

echo "</br>";
$sex = array('M', 'F');
$randSex = array_rand($sex,1);
$sexGroup = ($sex[$randSex]);
echo $sexGroup;
echo "</br>";

echo var_dump($sexGroup);




?>