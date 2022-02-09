<?php 
if(isset($_POST['Confirmer'])){
    $n=$_POST['nombre'];
    
    for ($i=1;$i<=$n;$i++){
        '<ul>';
        echo "<li>".$i."</li>";
        '</ul>';
    }
    
}



?>