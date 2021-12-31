<?php
/*
¿Qué es JSON?
JSON significa JavaScript Object Notation, y es una sintaxis para almacenar e intercambiar datos.
Dado que el formato JSON es un formato basado en texto, puede enviarse fácilmente hacia y desde un servidor,
y ser utilizado como formato de datos por cualquier lenguaje de programación.


PHP tiene algunas funciones incorporadas para manejar JSON.
En primer lugar, veremos las siguientes dos funciones:
- json_encode()
- json_decode()
*/
?>
<!DOCTYPE html>
<html>

<body>


    <!--
    PHP - json_encode()
    La función json_encode() se utiliza para codificar un valor en formato JSON.
    -->
    <?php
    # codificar una matriz asociativa en un objeto JSON:
    $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

    echo json_encode($age);
    ?>

    <?php
    # codificar una matriz indizada en una matriz JSON:
    $cars = array("Volvo", "BMW", "Toyota");

    echo json_encode($cars);
    ?>

    <!--
    PHP - json_decode()
    La función json_decode() se utiliza para decodificar un objeto JSON en un objeto PHP o una matriz asociativa.
    -->
    <?php
    # se decodifican datos JSON en un objeto PHP:
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    var_dump(json_decode($jsonobj));
    ?>

    <?php
    /*
     La función json_decode() devuelve un objeto de forma predeterminada. La función json_decode() tiene un segundo parámetro, y cuando se establece en true, los objetos JSON se decodifican en matrices asociativas
    */
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    var_dump(json_decode($jsonobj, true));
    ?>

    <!--PHP - Acceso a los valores decodificados-->
    <?php
    # cómo obtener acceso a los valores desde un objeto PHP:
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $obj = json_decode($jsonobj);

    echo $obj->Peter;
    echo $obj->Ben;
    echo $obj->Joe;
    ?>

    <?php
    # cómo acceder a los valores de una matriz asociativa PHP:
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $arr = json_decode($jsonobj, true);

    echo $arr["Peter"];
    echo $arr["Ben"];
    echo $arr["Joe"];
    ?>

    <!--PHP - Bucle a través de los valores-->
    <?php
    #recorrer en bucle los valores de un objeto PHP:
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $obj = json_decode($jsonobj);

    foreach($obj as $key => $value) {
        echo $key . " => " . $value . "<br>";
    }
    ?>

    <?php
    #recorrer en bucle los valores de una matriz asociativa PHP:
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $arr = json_decode($jsonobj, true);

    foreach($arr as $key => $value) {
        echo $key . " => " . $value . "<br>";
    }
    ?>

</body>
</html>
