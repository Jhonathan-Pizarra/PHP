<!--Form-->
<!--Supongamos que tenemos el siguiente formulario en una página llamada "test_form.php":-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
    <!--Campos de texto-->
    Name: <input type="text" name="name">
    E-mail: <input type="text" name="email">
    Website: <input type="text" name="website">
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>

    <!--Botones de opcion-->
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <input type="submit">
</form>

