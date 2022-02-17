<?php
session_start();
include_once "function.php";
if (isset($_POST['Valider'])){
    $a=$_POST['jour'];
    $b=$_POST['moi'];
    $c=$_POST['anne'];
    $err=[];
    $_SESSION['val']=$_POST;
    estValide($a,"a",$err);
    estValide($b,"b",$err);
    estValide($c,"c",$err);
    if(sizeof($err)==0){
      echo datSuivant($a,$b,$c);
       
    }else{
       $_SESSION['err']= $err ;
       header('location:index.php');
    }

}
if (isset($_POST['precedent'])){
    $a=$_POST['jour'];
    $b=$_POST['moi'];
    $c=$_POST['anne'];
    $err=[];
    $_SESSION['val']=$_POST;
    estValide($a,"a",$err);
    estValide($b,"b",$err);
    estValide($c,"c",$err);
    if(sizeof($err)==0){
      echo datPrecedent($a,$b,$c);
       
    }else{
       $_SESSION['err']= $err ;
       header('location:index.php');
    }

}
?>