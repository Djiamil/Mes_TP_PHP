<?php
session_start();
$tabErreur=$_SESSION['erreur'];
$tabPost = $_SESSION['post'];
var_dump($tabPost);
echo "<br>" ;
var_dump($tabErreur);

?>
<form action="controler.php" method="post">
    <p>Vielle saisir a b c pour le calcule</p>
    <p><label for="a">La valeur de A</label>
        <input type="text" name="a" id="a" value='<?php if(!empty($_SESSION['erreur']['a']) && 
        (empty($tabPost['post']['a']))) echo $tabPost['post']['a'];else'';
        
        ?>' />
        <span style="color:red">
              <?php
                 if(!empty($tabErreur['a'])) echo $tabErreur['a'];else echo '';
              ?>
        </span>
    </p>
    <p><label for="b"> la valeur de B</label>
        <input type="text" name="b" id="b"/>
        <span style="color:red">
              <?php
                 if(!empty($tabErreur['b'])) echo $tabErreur['b'];else echo '';
              ?>
        </span>
    </p>
    <p><label for="c" >La valeur de C</label>
        <input type="text" name="c" id="c"/>
        <span style="color:red">
              <?php
                 if(!empty($tabErreur['c'])) echo $tabErreur['c'];else echo '';
              ?>
        </span>
    </p>
    <P>
        <input type="submit" name="envoie"/>
    </p>
</form>
<?php
if(!empty($_SESSION['erreur']['a'].['b'].['c'])){
    unset($_SESSION['erreur']['a']);
    unset($_SESSION['erreur']['b']);
    unset($_SESSION['erreur']['c']);
    exit();
}
?>