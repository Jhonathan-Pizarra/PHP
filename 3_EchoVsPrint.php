<?php

/*
Con PHP, hay dos formas básicas de obtener salida: echoy print.

Diferencias:
echoy printson más o menos lo mismo. Ambos se utilizan para enviar datos a la pantalla.

Las diferencias son pequeñas: echo no tiene valor de retorno, mientras que print tiene un valor de retorno de 1, por lo que puede usarse en expresiones.
echo puede tomar múltiples parámetros (aunque dicho uso es raro) mientras que print puede tomar solo un argumento.
echo es marginalmente más rápido que print.

Semejanzas:
La echo declaración se puede usar con o sin paréntesis: echoo echo().
La printdeclaración se puede usar con o sin paréntesis: printo print().


*/

//ECHO
echo ("Hola Mundo!");
echo ("<p>Hola Mundo!</p>");
echo "I'm aprendiendo PHP!<br>";
echo "Esta ", "cadena ", "fue ", "hecha ", "con multiples parámetos.";

echo ("<br>");

//PRINT
print ("Hola Mundo!");
print "<p>Hola Mundo</p>";

//Y como vimos en variables:
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
//print "Puedo", "Tomar" , "Mas argumetnos?" //No


?>
