<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisati fju koja za dati niz koji predstavlja kolika je uspesnost uradjenih domacih po danima ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'>28, 'petak=>28] pronalazi:
Koji dan je najuspesniji
Kolika je prosecna uspesnost
Razliku izmedju najbolje i najgore uspesnosti -->
<?php
  
    $x=['ponedeljak'=>26,'utorak'=>35, 'cetvrtak'=>28,'petak'=>28];

        function najuspesniji_dan($a){
            $najveci=0;
            $ind="";
            foreach($a as $dan=>$rez){
                if($najveci < $rez){
                    $najveci = $rez;
                    $ind = $dan;
                }
            }
            echo "Najuspesniji dan je $ind sa rezultatom $najveci<br>";
        }
        najuspesniji_dan($x);

        function prosecna_uspesnost($a){
            $zbir=0;
            $br=0;
                foreach($a as $dan=>$rez){
                    $zbir += $rez;
                    $br++;
                }
                $prosek=$zbir/$br;
                return $prosek;
        }
        $prosek=prosecna_uspesnost($x);
        echo "Prosecan uspeh je:$prosek<br>";
        
        function razlika($a){
            $max=0;
            $min=0; 
            foreach($a as $dan=>$rez){
                $r=max($a)-min($a);
            }
            return $r;
        }
       $raz = razlika($x);
        echo "Razlika izmedju najbolje i najgore uspesnosti je:$raz";



?>

</body>
</html>