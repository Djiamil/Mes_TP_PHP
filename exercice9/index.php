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
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="conteneur">
    <header>
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
    </header>
        <div class="lesbouton">
                <div class="precedent">
                    <form action="../exercice8/index.php">
                    <input type="submit" name="precedent" value="precedent">
                     </form>
                </div>
                <div class="suivent">
                <form action="../exercice10/index.php">
                    <input type="submit" name="Suivent" value="Suivent">
                     </form>
                </div>
        </div>
    </div>
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