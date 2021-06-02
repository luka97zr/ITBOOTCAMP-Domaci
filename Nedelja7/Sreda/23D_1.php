<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .zeleni{
            color:green;
        }
        .crveni{
            color:red;
        }
    </style>
</head>
<body>
<!-- Od niza zadatih reči, napraviti niz čiji će svaki element predstavljati span. Svaki span će imati klasu "crveni", "zeleni" u zavisnosti od toga da li je reč kraća ili duža od 5 slova. Prikazati dobijeni niz. -->
    <?php
        $x=['pero','krastavac','majmun','kornjaca','kit','slon'];
        $y=[];
            foreach($x as $rec){
                array_push($y,$rec);
                if(strlen($rec)>5){    
                    echo "<span class='zeleni'>$rec,</span>";
                }else{
                    echo "<span class='crveni'>$rec,</span>";
                }
            }
            echo "<br>";
            print_r($y);

    ?>
</body>
</html>