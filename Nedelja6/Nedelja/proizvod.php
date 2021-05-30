<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function proizvod($ime, $sl, $cena,$popust=0){
            echo "<div class='proizvod'>";
            echo "<img src='$sl' alt='slika'>";
            $nova=$cena*(1-($popust/100));
            echo "<span>$ime</span><br>";
                if($popust>0){
                 echo "<span class='stara_cena'>$cena</span><br>";
                 echo "<span class='nova_cena'>$nova</span>";
                }elseif($popust == 0){
                  echo "<span class='prava_cena'>$cena</span>";
                  }
            echo "</div>";
    
        }

        




    ?>
</body>
</html>