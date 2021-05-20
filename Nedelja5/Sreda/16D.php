<?php

$a=$_GET['broj1'];
$b=$_GET['broj2'];
$c=$_GET['broj3'];
$d=$_GET['broj4'];

    if($b>$a && $d>$c){
        $zbir=0;
        for($i=$a;$i<=$b;$i++){
            if($i % 4 ==0){
               $zbir+=$i;
            } 
        }echo "<p>Prvi zbir je:$zbir</p>";

            $zbir2=0;
        for($j=$c;$j<=$d;$j++){
            if($j % 3==0){
             $zbir2+=$j;            
            }
        }  echo "<p>Drugi zbir je:$zbir2</p>";
    }else{
        die ("Nije ispunjen uslov");
    }

 if($zbir > $zbir2){
     echo "<p>Veci je $zibr,zbir deljivih sa 4</p>";
 }else{
    echo "<p>Veci je $zbir2, zbir deljivih sa 3</p>";

 }


?>