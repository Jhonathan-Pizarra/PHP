<!-- La función PHP formatea una marca de tiempo a una fecha y hora más legibles.date()
Una marca de tiempo es una secuencia de caracteres, que denota la fecha y/ o hora en la que ocurrió un determinado evento.

Obtener una cita
El parámetro de formato requerido de la función date() especifica cómo dar formato a la fecha (u hora).

Aquí hay algunos caracteres que se usan comúnmente para las fechas:

d - Representa el día del mes (01 a 31)
m - Representa un mes (01 a 12)
Y - Representa un año (en cuatro dígitos)
l (minúscula 'L') - Representa el día de la semana

Otros caracteres, como "/", "." o "-" también se pueden insertar entre los caracteres para agregar formato adicional.

-->

<!DOCTYPE html>
<html>
<body>

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br>";

?>

<!--
#Consejo PHP - Año de derechos de autor automático
//Utilice la función para actualizar automáticamente el año de derechos de autor en su sitio web:date()
-->
© 2010-<?php echo date("Y");?>


<!--
Obtén un tiempo
Aquí hay algunos caracteres que se usan comúnmente para los tiempos:

H - Formato de 24 horas de una hora (00 a 23)
h - formato de 12 horas de una hora con ceros iniciales (01 a 12)
i - Minutos con ceros iniciales (00 a 59)
s - Segundos con ceros iniciales (00 a 59)
a - Ante meridiem en minúsculas y Post meridiem (am o pm)
-->
<?php
echo "The time is " . date("h:i:sa"); # ¡Tenga en cuenta que la función PHP date() devolverá la fecha/hora actual del servidor!
?>


<!--
Obtenga su zona horaria
Si la hora en que regresó del código no es correcta, probablemente se deba a que su servidor está en otro país o configurado para una zona horaria diferente.

Por lo tanto, si necesita que la hora sea correcta de acuerdo con una ubicación específica, puede establecer la zona horaria que desea usar.
En el ejemplo siguiente se establece la zona horaria en "América/New_York",

-->
<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>

<!--
Crear una fecha con mktime()
El parámetro de marca de tiempo opcional de la función date() especifica una marca de tiempo. Si se omite, se utilizará la fecha y hora actuales (como en los ejemplos anteriores).

La función mktime() PHP devuelve la marca de tiempo unix para una fecha. La marca de tiempo de Unix contiene el número de segundos entre la época de Unix (1 de enero de 1970 00:00:00 GMT) y la hora especificada
-->
<?php
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

<!--
Crear una fecha a partir de una cadena con strtotime()
La función PHP se utiliza para convertir una cadena de fecha legible por humanos en una marca de tiempo Unix (el número de segundos desde el 1 de enero de 1970 a las 00:00:00 GMT)
-->
<?php
#PHP es bastante inteligente para convertir una cadena en una fecha;
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

?>


</body>
</html>
