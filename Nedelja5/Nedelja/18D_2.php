<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Množiti sve brojeve od 30 ka 1, sve dok proizvod ne predje 100.000. Prikazati konacan rezultat crvenom bojom a poslednje pomnozeni broj - zelenom. -->
    <?php

    $a=30;
    $p=1;
    do{
        $a--;
        $p *= $a;
        echo "<p style>Proizvod $p</p>";
    }
    while($a>1 &&  $p < 100000);
    echo " <p style='color:green'>Poslednje pomnozeni broj : $a</p>";
        echo "<p style='color:red'>Proizvod $p</p>";

    
        
    




    ?>
</body>
</html>