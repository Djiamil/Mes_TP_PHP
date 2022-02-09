<?php
session_start();
$tabErjour=$_SESSION['err'];
$val=$_SESSION['val'];
var_dump($tabErjour);
echo "<br>" ;
var_dump($val);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controler.php" method="post">
        <h1>Veiller la date du jour</h1>
        <p>
            <label for="jour">Donner le jour</label>
            <input type="text" name="jour" id="jour" 
           value=' <?php if(!empty($val)) echo $_SESSION['val']['jour'];else echo ''; ?>'
            />
            <span style="color:red">
                <?php if(!empty($_SESSION['err']['a'])) echo $_SESSION['err']['a'];else echo ''; ?>
            </span>
        </p>
        <p>
            <label for="moi">Donner le moi</label>
            <input type="text" name="moi" id="moi"/>
            <span style="color:red">
                <?php if(!empty($_SESSION['err']['b'])) echo $_SESSION['err']['b'];else echo ''; ?>
            </span>
        </p>
        <p>
            <label for="anne">Donner l'anne</label>
            <input type="text" name="anne" id="anne"/>
            <span style="color:red">
                <?php if(!empty($_SESSION['err']['c'])) echo $_SESSION['err']['c'];else echo ''; ?>
            </span>
        </p>
            <input type="submit" name="Valider"/>
</body>
</html>
<?php
    if(empty($a) || !is_numeric($a)){
        unset($_SESSION['err']);
        session_destroy();
    exit();
    }
?>