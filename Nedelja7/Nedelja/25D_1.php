<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Dodati u gornji niz jos 4 osobe po zelji.
Napisati fju koja prikazuje imena svih programera.
Napisati fju koja prikazuje sve podatke neke date osobe. Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s. -->
<?php

$x = [ 
    ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
    ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
    ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
    ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
   ];
   
   array_push($x,['ime'=>"Milica", "godine"=>17, "grad"=>"Zr", "pozicija"=>"konobar"]);
   array_push($x,['ime'=>"Milan", "godine"=>28, "grad"=>"Vrsac", "pozicija"=>"menadzer"]);
   array_push($x,['ime'=>"Boris", "godine"=>24, "grad"=>"Ns", "pozicija"=>"programer"]);
   array_push($x,['ime'=>"Nenad", "godine"=>33, "grad"=>"Kikinda", "pozicija"=>"dizajner"]);

   function programeri($a){
       foreach($a as $ind=>$vr){
               if($vr['pozicija']=='programer'){
                   echo $vr['ime'].",";
               }
        }
   }
   echo "Programeri:<br>";
    programeri($x);

    function neka_osoba($a,$b){
        $imena=[];
            foreach($a as $ind=>$vr){
                if($vr['ime']==$b){
                    echo "<p>".join(",",$vr)."</p>";
                 }
                 if(strtolower(strpos($vr['ime'],"s"))){
                  array_push($imena,$vr['ime']);
                }
            }
            echo "<p>Niz imena sa slovom S:".join(",",$imena)."</p>";
    }
           
    neka_osoba($x,"Nenad");

    //Pri ispisu imena sa slovom S mi ne ispisuje ime Stojan!
?>

</body>
</html>