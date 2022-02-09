<?php
    $cote=rand(1,15);
    echo "Le coté est de ".$cote ."<br/>";
    function perimetre(){
        global $cote;
        $perimetre=$cote*4;
        return $perimetre;

    }

    function surface(){
        global $cote;
        $surface=$cote*$cote;
        return $surface;
    }
    function diagonal(){
        global $cote;
        $diagonal=srt(($cote*$cote)+($cote*$cote));
        return $diagonal;
    }
?>