<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice8</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<div class="conteneur">
        <header>
                <form action="controler.php" method="post">
                    <label for="nombre">Donner un nombre</label>
                    <input type="text" name="nombre" id="nombre" value=""/>
                    <input type="submit" name="Confirmer"/>
                </form>
                </header>
        <div class="lesbouton">
                <div class="precedent">
                    <form action="../exercice7/index.php">
                    <input type="submit" name="precedent" value="precedent">
                     </form>
                </div>
                <div class="suivent">
                <form action="../exercice9/index.php">
                    <input type="submit" name="Suivent" value="Suivent">
                     </form>
                </div>
        </div>
    </div>
</body>
</html>