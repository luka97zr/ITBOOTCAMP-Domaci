<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napraviti niz od svih brojeva koji su veći od aritmetičke sredine niza (prosečne vrednosti).  -->
    <?php

    $x=[1,5,3,8,30,22,56,74,18,9];
    $y=[];
    $br=0;
    $zbir=0;
        for($i=0;$i<count($x);$i++){
            $br++;
            $zbir += $x[$i];             
        }
            $as=$zbir/$br;
            echo "Aritmeticka sredina:".$as."<br>";
        for($i=0;$i<count($x);$i++){
            if($x[$i]>$as){
                array_push($y,$x[$i]);
            }
            
        }
            print_r($y);
    ?>
</body>
</html>