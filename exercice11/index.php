<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice11</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="conteneur">
    <header>
                    <?php
                    session_start();
                    include_once "function.php";
                    $tabErjour=$_SESSION['err'];
                    $val=$_SESSION['val'];
                    var_dump($_SESSION['err']);
                    ?>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Exercice11</title>
                    </head>
                    <body>
                        <Form action="controle.php" method="post">
                            <h1>Veiller entrer un nombre supperieure a 10000</h1>
                    <p>
                            <label for="nombre">Entrez le nombre</label>
                            <input type="text" name="nombre" id="nombre" />
                            <span style="color:red">
                                    <?php if(!empty($_SESSION['err']['a'])) echo $_SESSION['err']['a'];else echo ''; ?>
                                </span>
                    </p>
                            <input type="submit" name="confirmer" id="confirmer" value="confirmer"/>
                        </form>
                        <?php 
                        if(empty($_SESSION['err']['a'])){
                            $_SESSION['corect']=tableauPrem($val);
                        }
                        ?>
         </header>
        <div class="lesbouton">
                <div class="precedent">
                    <form action="../exercice10/index.php">
                    <input type="submit" name="precedent" value="precedent">
                     </form>
                </div>
                <div class="suivent">
                <form action="../exercice12/index.php">
                    <input type="submit" name="Suivent" value="Suivent">
                     </form>
                </div>
        </div>
    </div>
</body>
</html>
                    <?php if(empty($_SESSION['err']['a']))
                    session_unset($_SESSION['err']['a']);
                    session_destroy();
                    exit();
                    ?>
                    <?php
                    if(!empty($_SESSION['corect']['val'])){
                        session_unset($_SESSION['corect']['val']);
                        session_destroy();
                    exit();
                    }
                    ?> 