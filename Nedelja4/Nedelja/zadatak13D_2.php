<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
     $a = mt_rand(1,20);
     $b = mt_rand(1,20);
     $c = mt_rand(1,20);

     echo "Brojevi:$a,$b,$c<br>";
     
    //Trebalo bi da radi sve dok ne dodje do preklapanja istih brojeva sto ne znam kako da resim
    if($a<$b && $a<$c){
        if($b<$c ){
            echo "$a,$b,$c";
        }if($c<$b ){
            echo "$a,$c,$b";
        }
    }
    if($b<$a && $b<$c){
        if($a<$c){
            echo "$b,$a,$c";
        }if($c<$a){
            echo "$b,$c,$a";
        }
    }
    if($c<$a && $c<$b){
        if($a<$b){
            echo "$c,$a,$b";
        }if($b<$a){
            echo "$c,$b,$a";
        }
    }
    
    ?>
</body>
</html>