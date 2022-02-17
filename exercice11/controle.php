<?php
session_start();
include_once "function.php";
if (isset($_POST['confirmer'])){
    $a=$_POST['nombre'];
    $err=[];
    $_SESSION['val']=$_POST['nombre'];
    esValid($a,"a",$err);
    if(sizeof($err)==0){
      header("location:index.php");
       }
    else{
      $_SESSION['err']=$err;
      header("location:index.php");
    }
}
?>