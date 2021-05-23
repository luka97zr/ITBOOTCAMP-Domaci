<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisati funkciju koja prikazuje paragraf sa 2 spana unutra. Prvi span ima vase ime, drugi span vase prezime. Izracunati koliko ima slova u vasem imenu i prezimenu i zatim pozvati funkciju toliko puta. (primer: Ana Slovic - paragraf se prikazuje ukupno 9 puta) -->
<?php


function paragraf(){
    $a="Luka";
    $b="Trkulja";
    echo "<p><span>$a </span><span>$b</span></p>";

    $c="$a$b";
    return $c;
}

$p= paragraf();
$p_d = strlen("$p");


for($i=1;$i<$p_d;$i++){ 
    paragraf();

 }


?>
</body>
</html>