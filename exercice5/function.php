<?php 
    $x1=rand(1,10);
    $x2=rand(1,20);
    $y2=rand(1,20);
    $y1=rand(1,10);
    function dist(){
        global $x1;
         global $x2;
         global $y1;
         global $y2;
         $dist=sqrt(($x2-$x1)*($x2-$x1)+($y2-$y1)*($y2-$y1));
         return $dist;
    }
?>