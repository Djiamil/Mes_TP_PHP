<?php
    session_start();
    include_once "function.php";
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice9</title>
</head>
<body>
<form action="controler.php" method="post">
        <label for="nombre">Table de Multiplication</label>
        <input type="text" name="nombre" id="nombre"/>
        <input type="submit" name="valider"/>
    </form>
    <?php
    if(isset($_SESSION['a']) && $_SESSION['a'] !='')
    {
        tableMultiplication($_SESSION['a']);

    }
    
    ?>
</body>
</html>
<?php

if(isset($_SESSION['a']) &&$_SESSION['a']!='')
{
    unset($_SESSION['a']);
    session_destroy();
    exit();
}
?>