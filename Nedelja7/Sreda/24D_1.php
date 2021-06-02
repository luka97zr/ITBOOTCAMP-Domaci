<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisati fju koja vraca true ako neki dati niz ne sadrzi nule, a u suprotnom vraca false. -->

    <?php
        for($i=0;$i<=8;$i++){
            $x[$i]=mt_rand(0,10);
        }
        echo "Niz: ".join(",",$x)."<br>"; 

            function provera($a){
                $s=true;
                foreach($a as $broj){
                    if($broj == 0)
                     $s=false;
                }
                return $s;
            }
                if(provera($x))
                   echo "Ne sadrzi 0<br>";
                else 
                    echo "Sadrzi 0<br>";

                




    ?>

</body>
</html>