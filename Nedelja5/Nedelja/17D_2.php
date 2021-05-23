<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Napraviti dva slucajna broja $n i $x u opsegu od 1-10. Prikazati ih.
Napisati funkciju koja pravi i prikazuje "n" span elemenata. Svaki span ima text Ovo je span 1, Ovo je span 2… 
Napraviti "x" divova, pri cemu svaki div dobija "n" spnova pozivajuci prethodnu funkciju. -->
<?php
    $n=mt_rand(1,10);
    $x=mt_rand(1,10);
        echo "<p>Brojevi su $n i $x</p>";

    function span_element(){
        global $n,$x;
        for($i=1;$i<=$n;$i++){
            echo "<span>Ovo je span $i </span>";
        }
    }

    for($i=1;$i<=$x;$i++){
    echo "<div style='color:red'>";
    span_element();
    echo "</div>";
    }
?>


</body>
</html>


