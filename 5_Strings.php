<?php

/*


String es una secuencia de caracteres
si queremos trabajar con Strings, algunos métodos que podemos usar son:
- strlen() devuelve la longitud de una cadena.
- str_word_count () - Cuenta palabras en una cadena
- strrev () - Invierte una cadena
- strpos () - Busca un texto dentro de una cadena
- str_replace () - Reemplazar texto dentro de una caden
 */

echo strlen("Jhonathna!");
echo ("<br>");
echo str_word_count("All my Love - Led Zeppelin"); //El - cuenta como palabra, pasa es que cuenta cuando encuentra espacios entre caractrs
echo ("<br>");
echo strrev ("Anita lava la tina");
echo ("<br>");
echo strpos("Adina lo que estoy pensando!", "estoy"); //devuelve la posición de donde comienza "estoy" , comienza en la 13
//Nota: La posición del primer carácter en una cadena es 0 (no 1).
echo ("<br>");
echo str_replace ("Hola", "Adiós", "Hola Mundo!"); //Reemplaza "Hola", con "Adiós"
echo ("<br>");

echo "Puedes ver millar de funciones más en: ", "https://www.w3schools.com/php/php_ref_string.asp";


?>