<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice4</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    
</body>
</html>

<div class="conteneur">
        <header>
        <?php include "function.php";
            echo "Les nombre apres permutation ".permutation();

        ?>
    </header>
    <div class="lesbouton">
        <div class="precedent">
            <form action="../exercice3/index.php">
                <input type="submit" name="precedent" value="precedent">
            </form>
        </div>
        <div class="suivent">
             <form action="../exercice5/index.php">
                <input type="submit" name="Suivent" value="Suivent">
            </form>
        </div>
</div>
</body>
</html>