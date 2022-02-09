<?php 
    $nomb1=rand(1,20);
    $nomb2=rand(1,20);
    function somme(){
        global $nomb1;
        global $nomb2;
        $somme=($nomb1+$nomb2);
        return $somme;
    }
    function expo(){
        global $nomb1;
        global $nomb2;
        $expo=pow($nomb1,$nomb2);
        return $expo;
    }
    function diff(){
        global $nomb1;
        global $nomb2;
        $diff=($nomb1-$nomb2);
        return $diff;
    }
    function produit(){
        global $nomb1;
        global $nomb2;
        $produit=($nomb1*$nomb2);
        return $produit;
    }
    function modulo(){
        global $nomb1;
        global $nomb2;
        $modulo=($nomb1%$nomb2);
        return $modulo;
    }
    function division(){
        global $nomb1;
        global $nomb2;
        $division=($nomb1/$nomb2);
        return $division;
    }
    function carre1(){
        global $nomb1;
        global $nomb2;
        $carr1=($nomb1*$nomb1);
        return $carr1;
    }
    function carre2(){
        global $nomb1;
        global $nomb2;
        $carr2=($nomb1*$nomb1);
        return $carre2;
    }





?>