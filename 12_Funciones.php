<?php


/*
El verdadero poder de PHP proviene de sus funciones.
PHP tiene más de 1000 funciones integradas, y además puedes crear sus propias funciones personalizadas.
Además de las funciones integradas de PHP, es posible crear sus propias funciones.
Las funciones personalizadas también se las conoce como funciones definidas por el usuario PHP

¿Qué es una función PHP?
Una función es un bloque de declaraciones que se pueden usar repetidamente en un programa.
Una función no se ejecutará automáticamente cuando se carga una página.
Una función se ejecutará mediante una llamada a la función.

Crear una función personalizada:
Una declaración de función definida por el usuario comienza con la palabra function:

Sintaxis:
function functionName() {
  code to be executed;
}
Nota: El nombre de una función debe comenzar con una letra o un guión bajo.
Los nombres de funciones NO distinguen entre mayúsculas y minúsculas.

Consejo: ¡Asigna a la función un nombre que refleje lo que hace!


ARGUMENTOS DE UNA FUNCIÓN:
La información se puede pasar a las funciones a través de argumentos. Un argumento es como una variable.
Los argumentos se especifican después del nombre de la función, dentro de los paréntesis.
Puede agregar tantos argumentos como desee, simplemente sepárelos con una coma.



 */
//Funcion

function escribeMensaje() {
    echo "Hello world!";
}
escribeMensaje(); // llama la función
print ("</br>");

//Función con argumento:
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
print ("</br>");

//Función con dos o más argumentos
function familyNameYear($fname, $year)
{
    echo "$fname Refsnes. Born in $year <br>";
}
familyNameYear("Hege", "1975");
familyNameYear("Stale", "1978");
familyNameYear("Kai Jim", "1983");
print ("</br>");

//Argumentos predeterminados
function setHeight($minheight = 50) { //Le decimos que el valor por defecto del peso es 50, este se reemplaza si al invocar uso otro valor
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // usará el valor por defecto: 50
setHeight(135);
setHeight(80);
print ("</br>");


//Return de funciones
//A pesar de que no le especificamos el tipo de funcion, podemos obtener un retorno!
function sum( $x,  $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
print ("</br>");

//Argumentos por referencia
//Los argumentos generalmente se pasan por valor,
// lo que significa que se usa una copia del valor en la función y la variable que se pasó a la función no se puede cambiar.
//Cuando un argumento de función se pasa por referencia, los cambios en el argumento también cambian la variable que se pasó.
function add_five(&$value) {
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;


?>