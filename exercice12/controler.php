<?php
session_start();
$tabFrancais = array('Janvier','fevrier', 'Mars', 'Avril','Mai', 'Juin','juillet','Aout','Septembre','Octobre','Novembre','Decembre');
$tabAnglais = array('January','february', 'March', 'April','May', 'June');
$_SESSION['a']='';
if(isset($_POST['valider'])){
    if (isset($_POST['langue']) &&$_POST['langue']== "1") {
            $_SESSION['a']=$tabFrancais;
            header('location:index.php');
        }
    }if (isset($_POST['langue']) && $_POST['langue'] == "0"){
            $_SESSION['a']=$tabAnglais;
            header('location:index.php');
        }

?>