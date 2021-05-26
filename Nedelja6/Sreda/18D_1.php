<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 1. Написати функцију која враћа већи од 3 броја (3 броја су прослеђени функцији кроз параметре) -->
    <?php
    function gratherThen($a,$b,$c){
        if($a>=$b && $a>=$c){
            return $a;
        }elseif($b>=$a && $b>=$c){
            return $b;
        }else{
            return $c;
        }
 
    }

    echo "Najveci broj je:";
    echo gratherThen(5,1,3);
    ?>
</body>
</html>