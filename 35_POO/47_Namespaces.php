<?php
namespace Html;
class Table {
    public $title = "";
    public $numRows = 0;
    public function message() {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<!DOCTYPE html>
<html>
<body>
<!--
Espacios de nombres PHP

Los espacios de nombres son calificadores que resuelven dos problemas diferentes:

Permiten una mejor organización al agrupar las clases que trabajan juntas para realizar una tarea.
Permiten utilizar el mismo nombre para más de una clase
Por ejemplo, puede tener un conjunto de clases que describen una tabla HTML, como Tabla, Fila y Celda, mientras que también tiene otro conjunto de clases para describir muebles, como Mesa, Silla y Cama. Los espacios de nombres se pueden usar para organizar las clases en dos grupos diferentes y al mismo tiempo evitar que las dos clases Table y Table se mezclen.
Nota: Una declaración debe ser lo primero en el archivo PHP.
es posible tener espacios de nombres anidados: namespace Code\Html;
-->
<?php
$table->message();
?>

<!--
Puedes ver más información en:
https://www.w3schools.com/php/php_namespaces.asp
-->

</body>
</html>


