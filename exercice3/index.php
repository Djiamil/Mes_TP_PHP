
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="conteneur">
        <header>
            <?php include "function.php";
                echo "La somme des deux nombre est ". somme()."<br/>";
                echo "Les exponetielle des deux nombre sont ".expo(). "<br/>";
                echo "la difference des deux nombre sont ".diff()."<br/>";
                echo "Le produit des deux nombre sont".produit()."<br/>";
                echo "Le modulo des deux nombre ".modulo() ."<br/>";
                echo "La division des deux nombre".division()."<br/>";
                echo "Le carre du nombre numero 1 est ".carre1()."<br/>";
                echo "Le caree du nombre 2 es de ".carre2();
            ?>
        </header>
        <div class="lesbouton">
                <div class="precedent">
                    <form action="../exercice2/index.php">
                    <input type="submit" name="precedent" value="precedent">
                     </form>
                </div>
                <div class="suivent">
                <form action="../exercice4/index.php">
                    <input type="submit" name="Suivent" value="Suivent">
                     </form>
                </div>
        </div>
    </div>
</body>
</html>