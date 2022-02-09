<?php
session_start();
include_once 'function.php';
if(isset($_POST['envoie'])){
    $a1=$_POST['a'];
    $b1=$_POST['b'];
    $c1=$_POST['c'];
    $_SESSION['post']=$_POST ;
    $erre=[];
    estValide($a1,'a',$erre);
    estValide($b1,'b',$erre);
    estValide($a1,'a',$erre);
    if(count($erre)==0){
        echo "La solution de lequatio est".equation($a1,$b1,$c1);
    }else{
        $_SESSION['erreur']=$erre;
        header('location:index.php');
    }
   /*
    if (empty($a1) || !is_numeric($a1)) {
        header('location:index.php');
         echo "saisir numerique";
    }
    if (empty($b1) || !is_numeric($b1)){
        header ('location:index.php');
        }
    if (empty($c1) || !is_numeric($c1)) {
        header('location:index.php');
       
    }
    */
}
   
?>