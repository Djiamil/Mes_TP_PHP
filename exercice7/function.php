<?php 
    function estVide($n):bool{
      return  empty($n);
    }
    function estNum($n):bool{
        return is_numeric($n);
    }

    function estValide($n,string $key,array &$err):void{
        if(estVide($n)){
            $err[$key]="il faut saisir une valeur";
            
        }else{
            if(!estNum($n)){
                $err[$key]="la valeur n'est pas numerique";
            }

        }
    }
    function bisextil($anne){
        if (($anne%4==0 && $anne%100!=0) || $anne%400==0 ) {
            return true;
        }else{
            return false;
        }
    }
    function nombreJour($moi,$anne){
        if($moi==2){
            if(bisextil($anne)){
                $jour=29;
            }else
             $jour=28;
        }elseif($moi==1||$moi==3||$moi==5||$moi==7||$moi==8||$moi==10){
            $jour=31;
        
        }elseif($moi==4||$moi==6||$moi==9 || $moi==11 || $moi==12){
            $jour=31;
        }
        return $jour;
    }

    function dateValide($jour,$moi,$anne):bool{
        if(($jour>=1 && $jour<=nombreJour($moi,$anne))&&($moi>=1 && $moi<=12)){
            return true;
        }else
        return false;
    }
    function datSuivant($jour,$moi,$anne){
        if(dateValide($jour,$moi,$anne)==true){
            if ($jour<nombreJour($moi,$anne)){
                return ($jour+1)."/".$moi."/".$anne;
            }if($moi<12){
                 return "1/".($mois+1)."/".$anne;
            }else{
                 return 1.1.($anne+1);
            }
        }    
        
    }




    function datPrecedent($jour,$moi,$anne){
        if(dateValide($jour,$moi,$anne)==true){
            if ($jour>1){
                return ($jour-1)."/".$moi."/".$anne;
            }if(($jour==1) &&($moi>1)){
                 return "1/".($moi-1)."/".$anne;
            }else{
                 return nombreJour($moi,$anne)."12/".($anne-1);
            }
        }    
        
    }
?>