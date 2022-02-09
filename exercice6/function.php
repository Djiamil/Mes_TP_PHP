
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formu</title>
</head>
<body>

        <?php

        /**
         * fonction 
         */
        function estNum($n){
            return is_numeric($n);
        }
        /**
         * function
         */
        function estVide($n){
            return empty($n);
        }
        /**
         * fontion
         */
        function estValide($n,string $k,array &$err):void{
            if(estVide($n)){
                $err[$k]="veuillez sasir une valeur";
            }else{
                if(!estNum($n)){
                    $err[$k]="veuillez saisir un nombre" ;
                }
            }
        }
        function equation($a1,$b1,$c1){
            
            $btn=$_POST['envoie'];
            $delta=((pow($b1,2))-(4*$a1*$c1));
            echo "delta est".$delta;
            if($delta>0){
                $x1=((-1*$b1)- sqrt($delta)/($a1*2));
                $x2=((-1*$b1)+sqrt($delta)/($a1*2));
                echo "La valeur de x1 est ".$x1 ."<br/>";
                echo "La valeur de x2 est ".$x2;
                }
                elseif($delta==0){
                    $x0=($b1/(2*$a1));
                    echo "On calcul X0 " . $x0 ."</br>";
                }
                elseif($delta<0){
                    echo "pas de solution";
                }
            }
        ?>
</body>
</html>