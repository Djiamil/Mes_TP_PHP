<?php
session_start();
include_once('function.php');
if(isset($_POST['validiter'])){
    $a=$_POST['valide'];
     if(preg_match('/^[7][7][0-9]{7}/',$a)){
        $_SESSION['message']=$a;
        header('location:index.php');
        }
    else{ 
    $_SESSION['area']=$a;
    header('location:index.php');
    }
}
?>