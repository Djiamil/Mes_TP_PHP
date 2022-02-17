<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice5</title>
    <link rel="stylesheet" href="CSS/style.css">
    
</head>
<body>
    <div class="conteneur">
        <header>
            <?php include "function.php";
                echo "La distance qui separe les deux point  ".dist();
            ?>
        </header>
            <div class="lesbouton">
                    <div class="precedent">
                        <form action="../exercice4/index.php">
                        <input type="submit" name="precedent" value="precedent">
                         </form>
                     </div>
                    <div class="suivent">
                        <form action="../exercice6/index.php">
                        <input type="submit" name="Suivent" value="Suivent">
                        </form>
                    </div>
            </div>
    </div>
</body>
</html>