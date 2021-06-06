<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Preko map fje dodati svakom clanu "godine_staza" (jedan slucajan broj od 1 do 3, nije niz)
Preko usort fje sortirati niz po godinama_staza (*dodatak - neobavezno, ako su godine iste pri uporedjivanju, neka prva bude starija osoba)
Preko filter fje napraviti niz od osoba cija je godina_staza najveca. (uputstvo, prvo izracunati max, pa onda filter) -->
<?php
$x = [ 
    ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
    ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
    ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
    ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
   ];
   //1
$gs=array_map(function($osoba){
    $osoba['godine_staza']=[];
        $osoba['godine_staza']=mt_rand(1,3);  
        return $osoba;
},$x);

function prikaz($a){
    foreach($a as $element){
        if(gettype($element)=='array')
            echo "<p>".join(",",$element);
        else
          echo "<p>$element</p>";
    }
}
//2
usort($gs, function($a,$b){  return $a['godine_staza'] - $b['godine_staza'];});
  
prikaz($gs);

//3
foreach($gs as $osoba){
    $max=$osoba['godine_staza'];
}
  $god_staza=array_filter($gs,function($osoba){
      global $max;
    return $osoba['godine_staza']==$max;
  });
  echo "<p style='font-weight:bold'>Osobe sa najvecom godinom staza: <p>";
  prikaz($god_staza);
?>
</body>
</html>