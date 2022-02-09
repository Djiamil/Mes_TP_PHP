<?php 
    $a=rand(1,20);
    $b=rand(1,20);
    echo "Le nombre a et b avant permutatio"."<br/>".$a."<br/>".$b."<br/>";
    function permutation(){
        global $a;
        global $b;
        $temp=$a;
        $a=$b;
        $b=$temp;
        return $a ."et" . $b;
    }


?>