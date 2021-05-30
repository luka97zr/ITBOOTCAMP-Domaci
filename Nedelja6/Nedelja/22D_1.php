<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisati fju koja za dati niz brojeva izracunava i prikazuje da li ima vise trocifrenih ili dvocifrenih brojeva. (koristiti for) -->
    <?php
        function niz(){
            $x=[];
            for($i=0;$i<15;$i++){
                $x[$i] = mt_rand(20,220);
            }
            return $x;
        }
       
        
        function uporedjivanje($a){
        $t=0;
        $d=0;
        for($i=0;$i<count($a);$i++){
         if($a[$i] >= 100){
            $t++;
        }else{
            $d++;

        }
    }
        if($t>=$d){
            echo "Vise trocifrenih";
        }else{
             echo "Vise dvocifrenih";
        }
    }
    $z=niz();
    print_r($z);
    uporedjivanje($z);
    ?>

</body>
</html>