<?php

/*
Las declaraciones condicionales se utilizan para realizar diferentes acciones basadas en diferentes condiciones.

DECLARACIONES CONDICIONALES EN PHP
Muy a menudo, cuando escribe código, desea realizar diferentes acciones para diferentes condiciones.
Puede usar declaraciones condicionales en su código para hacer esto.

En PHP tenemos las siguientes declaraciones condicionales:

if : ejecuta algún código si una condición es verdadera
if...else instrucción: ejecuta un código si una condición es verdadera y otro código si esa condición es falsa
if...elseif...else instrucción: ejecuta diferentes códigos para más de dos condiciones
switch instrucción: selecciona uno de los muchos bloques de código que se ejecutarán

PHP - La declaración if
La "if" instrucción ejecuta algún código si una condición es verdadera.

Sintaxis
if (condition) {
    code to be executed if condition is true;
}

------------------------------------------------------------------------------------------------------------------
PHP - La declaración if ... else
La if...elseinstrucción ejecuta algún código si una condición es verdadera y otro código si esa condición es falsa.

Sintaxis
if (condition) {
  code to be executed if condition is true;
} else {
  code to be executed if condition is false;
}

-----------------------------------------------------------------------------------------------------------------
PHP - La declaración if ... elseif ... else
La if...elseif...elseinstrucción ejecuta códigos diferentes para más de dos condiciones.

Sintaxis
if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true;
} else {
  code to be executed if all conditions are false;
}

----------------------------------------------------------------------------------------------------------------
PHP Switch
Switch o interruptor, es una declaración de cambio de PHP
Use la switch instrucción para seleccionar uno de los muchos bloques de código que se ejecutarán .

Sintaxis
switch (n) {
  case label1:
    code to be executed if n=label1;
    break;
  case label2:
    code to be executed if n=label2;
    break;
  case label3:
    code to be executed if n=label3;
    break;
    ...
  default:
    code to be executed if n is different from all labels;
}
Así es como funciona:
Primero tenemos una sola expresión n (con mayor frecuencia una variable), que se evalúa una vez.
El valor de la expresión se compara con los valores para cada caso en la estructura.
Si hay una coincidencia, se ejecuta el bloque de código asociado con ese caso.
Utilíce break para evitar que el código se ejecute automáticamente en el siguiente caso.
La default declaración se usa si no se encuentra ninguna coincidencia.
*/

//If ----------------------------
$note = 10;

if ($note >= 8) {
    echo "Felicitaciones!";
}
echo "</br>";

//if...else ---------------------
$note2 = 6;

if($note2 >= 8){
    echo "Congratulations!";
}else{
    echo "Supletorio";
}

//if..elseif....----------------
$note3 = 4;
if($note3 >= 8){
    echo "U pass!";
}elseif ($note3 > 6 && $note3 <8){
    echo "Supletorio";
}else{
    echo "Reprobó";
}

//Switch-----------------------
$opcion = 3;

switch ($opcion){
    case 1:
        echo "hola!";
    break;

    case 2:
        echo "hello";
    break;

    case 3:
        echo "konnichi wa!";
    break;

    default:
        echo "Adiós";
    break;

}

?>