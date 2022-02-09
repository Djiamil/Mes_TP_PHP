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
       while($a>0 && $a<12){
           echo 'la solution est';
       }
       
    }else{
       $_SESSION['err']= $err ;
       header('location:index.php');
    }

}
?>