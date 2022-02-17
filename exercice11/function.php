<?php
function estVide($n):bool{
    return  empty($n);
  }
  function estNum($n):bool{
      return is_numeric($n);
  }
function esValid($n,string $key,array &$err):void{
        if (estVide($n))
    {
      $err[$key]="veiller saisire un nombre";
    }else{
        if(!estNum($n)){
       $err[$key]="Veiller saisir du numeric";
        }
    } 
}
function nobrePrem($number):bool{
    $cpt=1;
    for ($i = 2; $i <= $number; $i++){
        if ($number%$i==0){
            $cpt=$cpt+1;
        }
        }
        if ($cpt==2){
            return true;
        }
        return false;

}

function tableauPrem($nombre) {
    $associatif=array(
    'tabclePrem'=>[],
    'tabcleinf'=>[],
    'clesup'=>[]
    );
    $som=0;
    $n=0;
    for ($i=1; $i <= $nombre; $i++){ 
        if(nobrePrem($i)){
            $associatif['tabclePrem'][$n]=$i;
            $som=$som+$i;
            $n++;
        }
      }
     // taille tableau nombre premier
    $tail=count($associatif['tabclePrem']);
    $moy=$som/$tail;
    $j=0;
    $k=0;
    for ($i=0; $i <=$tail ; $i++) { 
        if($moy>$associatif['tabclePrem'][$i]){
            $associatif['tabcleinf'][$j]=$associatif['tabclePrem'][$i];
            $j++;
        }else
        $associatif['clesup'][$k]=$associatif['tabclePrem'][$i];
        $k++;
    } 
foreach ($associatif['tabclePrem'] as $key => $value){
 echo " Les premiere est .$value.</br>";
}
foreach ($associatif['tabcleinf'] as $key => $value) {
  echo " Le inferieur est .$value.</br>";
 }
 foreach ($associatif['clesup'] as $key => $value) {
  echo $value." Le supperieur est";
 }
  }
?>