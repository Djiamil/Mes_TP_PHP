<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css" class="">
</head>
<body>
<div class="conteneur">
<header>
                <form action="controler.php" method="POST">
                <select name="langue">
                    <option value="1">Français</option>
                    <option value="0" >Anglais</option>
                    <input type="submit" name="valider" id="valider" value="valider"/>
                </select>
                </form>
                </header>
        <div class="lesbouton">
                <div class="precedent">
                    <form action="../exercice11/index.php">
                    <input type="submit" name="precedent" value="precedent">
                     </form>
                </div>
                <div class="suivent">
                <form action="../exercice13/index.php">
                    <input type="submit" name="Suivent" value="Suivent">
                     </form>
                </div>
        </div>
    </div>
</body>
</html>
                <?php
                if(isset($_SESSION['a']) && $_SESSION['a']!=''){

                    for ($i=0; $i < count($_SESSION['a']); $i++) 
                    { 
                        $_SESSION['a'][$i];
                    }
                }
                ?>
                    <table>
                        <tr>
                            <?php
                            
                            for ($i=0; $i < count($_SESSION['a']); $i++){
                                if ($i%4==0) {
                                    echo '</tr>\n';
                                }
                            
                            ?>
                            <td style="border:solid 2px"> <?php echo $_SESSION['a'][$i]; ?></td>
                            
                            <?php }?>
                        </tr>
                    </table
                <?php
                if(isset($_SESSION['a']) && $_SESSION['a']!=''){
                    for ($i=0; $i < count($_SESSION['a']); $i++) 
                    { 
                        echo $_SESSION['a'][$i];
                    }
                }
                ?>


                