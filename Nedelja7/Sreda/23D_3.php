<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- a) Napisati funkciju koja ucitava niz iz forme iz inputa. Sve brojeve u inputu razdvojiti razmakom. Fja vraca ucitani niz -->
<!-- b) Napisati funkciju koja ispituje i vraca da li neki dati niz X ima bar 3 parna broja. -->
<!-- c) Napisati funkciju koja ispituje i vraca da li neki dati niz ima sve brojeve manje od 1000. -->
<!-- d)Pomocu gornjih funkcija za niz dobijen iz inputa ispitati i prikazati da li taj niz ima sve brojeve manje od 1000 i bar 3 parna.  -->


    <?php
    function niz(){
     $a=trim($_GET['brojevi']);
     $y=explode(" ",$a);
     return $y;
    }
    $x=niz();
    var_dump($x);
    echo "<br>";

    function bar_3_parna($a){
        $br=0;
        foreach($a as $broj){
            if($broj % 2 ==0){
                $br++;
            }
        }
            if($br>=3){
                return true;
            }else
               return false;
    }

    
    if(bar_3_parna($x)){
      echo "Ima bar 3 parna<br>";
     }else{
      echo "Nema bar 3 parna<br>";
     }
     
     function brojevi_manji_1000($a){
         $provera=true;
         foreach($a as $broj){
             if($broj>=1000)
               $provera = false;
         }
         return $provera;
     }
        if(brojevi_manji_1000($x))
            echo "Svi su manji od 1000<br>";
        else
            echo "Nisu svi manji od 1000<br>";


        if(bar_3_parna($x) && brojevi_manji_1000($x))
            echo "Uslov je ispunjen";
        else
        echo "Uslov nije ispunjen";
           

            ?>
</body>
</html>