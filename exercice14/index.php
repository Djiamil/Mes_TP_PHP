<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice14</title>
</head>
<body>
    <form action="controler.php" method="post">
        <label for="numerovalide">Saisissez les numero</br></label></br>
        <textarea name="valide" id="valide" rows="20" cols="20"><?php echo $_SESSION['message'] ?></textarea>
        <label for="numerIvalide">Les numero qui ne sont pas bon</br></label>
        <textarea name="invalide" rows="20" cols="20"readonly><?php echo $_SESSION['area']?></textarea>
        <input type="submit" name="validiter" id="validiter" value="validiter"/>
</body>
</html>
<?php
if(!empty($_SESSION['message'])){
    unset($_SESSION['message']);
    session_destroy();
    exit;
}


?>