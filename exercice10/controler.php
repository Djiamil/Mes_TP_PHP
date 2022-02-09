<?php
session_start();
$_SESSION['a']='';
if(isset($_POST['valider'])){
    $_SESSION['a']=$_POST['nombre'];
    header('location:index.php');
}
?>