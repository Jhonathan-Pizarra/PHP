<?php

//¿Qué es una expresión regular?
//Una expresión regular es una secuencia de caracteres que forma un patrón de búsqueda.
//se pueden utilizar para realizar todo tipo de operaciones de búsqueda y reemplazo de texto.

//SINTAXIS
//En PHP, las expresiones regulares son cadenas compuestas por delimitadores, un patrón y modificadores opcionales.
$exp = "/w3schools/i";

//Dómde
# / es el delimitador: puede ser cualquier carácter que no sea una letra, número, barra invertida o espacio. Pueden ser: /, #, ~
# w3schools es el patrón que se está buscando
# i es un modificador que hace que la búsqueda no distinga entre mayúsculas y minúsculas.

//MODIFICADORES
// i Realiza una búsqueda que no distingue entre mayúsculas y minúsculas
// m Realiza una búsqueda de varias líneas (los patrones que buscan el principio o el final de una cadena coincidirán con el principio o el final de cada línea)
// u Permite la coincidencia correcta de patrones codificados en UTF-8

//PATRONES
//[abc]  Encuentra un carácter de las opciones entre corchetes
//[abc]  Encuentra cualquier carácter que NO esté entre corchetes
//[abc]  Encuentra un carácter del rango de 0 a 9


//FUNCIONES de Regular EX
//Las funciones
// preg_match() Devuelve 1 si el patrón se encontró en la cadena y 0 si no
// preg_match_all() Devuelve el número de veces que se encontró el patrón en la cadena, que también puede ser 0
// preg_replace() Devuelve una nueva cadena donde los patrones coincidentes se han reemplazado por otra cadena
//son algunas de las más utilizadas:

//preg_match ()
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); // Outputs 1


//preg_match_all ()
//Utilice "i" en una expresión regular para hacer un recuento que no distinga entre mayúsculas y minúsculas del número de apariciones de "ain"
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // Outputs 4


//preg_replace ()
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"


//METACARACTERES
// |  Encuentre una coincidencia para cualquiera de los patrones separados por | como en: gato | perro | pez
// .  Encuentra solo una isntancia de cualquier caractér
// ^  Encuentra una coincidencia como el comienzo de una cadena como en: ^ Hola
// $  Encuentra una coincidencia al final de la cadena como en: World $
// \d  Encuentra un dígito
// \s  Encuentra un carácter de espacio en blanco
// \b  busque una coincidencia al principio de una palabra como esta: \bWORD, o al final de una palabra como esta: WORD\b
// 	\uxxxx : Busque el carácter Unicode especificado por el número hexadecimal xxxx

//Cuantificadores
//n+ Coincide con cualquier cadena que contenga al menos una n
//n* Coincide con cualquier cadena que contenga cero o más ocurrencias de n
//n? Coincide con cualquier cadena que contenga cero o una apariciones de n
//n{x} Coincide con cualquier cadena que contenga una secuencia de X n's
//n{x,y} Coincide con cualquier cadena que contenga una secuencia de X a Y n¿s
//n {x,} Coincide con cualquier cadena que contenga una secuencia de al menos X n's

//Nota: Si su expresión necesita buscar uno de los caracteres especiales, puede usar una barra invertida (\) para escapar de ellos.
// Por ejemplo, para buscar uno o más signos de interrogación, puede utilizar la siguiente expresión: $ patrón = '/ \? + /';

//AGRUPAMIENTO
//Puede utilizar paréntesis ( )para aplicar cuantificadores a patrones
//También se pueden utilizar para seleccionar partes del patrón que se utilizarán como coincidencia.
//Por ejemplo:
//Utilice la agrupación para buscar la palabra "banana" buscando ba seguida de dos instancias de na
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str); // Outputs 1

?>