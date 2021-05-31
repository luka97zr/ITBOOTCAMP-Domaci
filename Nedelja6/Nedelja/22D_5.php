<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Data su dva niza jedan koji sadrži boje i drugi koji sadrži reči. Prikazati svaku reč preko spana u odgovarajućoj boji. Primer: $boje = ['green', 'blue', 'yellow'];       $reci = ['sto', 'stolica', 'mobilni']; 
Rec "sto" se prikazuje u zelenoj boji, stolica u plavoj, mobilni u zutoj -->

<?php

    $boje=['red','blue','orange'];
    $reci=['sto','stolica','mobilni'];
    foreach($boje as $ind=>$element){
        foreach($reci as $ind2=>$element2){
           if($ind == $ind2){
               echo "<span style='color:$element'>$element2,</span>";
           }
         }

    }

?>
</body>
</html>