<?php
    $large=rand(1,10);
    $longeur=rand(11,50);
    Function perimetre(){
        global $longeur;
        global $large;
        $perimetre=($large+$longeur)*2;
        return $perimetre;
    }
    Function surface(){
        global $longeur;
        Global $large;
        $surface=$large*$longeur;
        return $surface;
    }
    Function diagonal(){
        global $longeur;
        global $large;
        $diagonal=sqrt(($longeur*$longeur)+($large*$large));
        return $diagonal;
    }


?>