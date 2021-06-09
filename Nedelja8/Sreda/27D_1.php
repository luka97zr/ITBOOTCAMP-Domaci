<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napraviti klasu Krevet, koja ima clanice: duzina, sirina, materijal i cena. Cena je private. 
Napisati konstruktor koji dobija i  postavlja sve clanice.
Napisati metodu za citanje cene.
Napisati metodu __toString koja prikazuje: "Krevet je duzine... i sirine.... napravljen od.... po ceni ...." -->
<?php

    class Krevet{
        public $duzina,$sirina,$materijal;
        private $cena;
        

        function __construct($duzina,$sirina,$materijal,$cena){
            $this->duzina=$duzina;
            $this->sirina=$sirina;
            $this->materijal=$materijal;
            $this->cena=$cena;
        }

       public function citanje_cene(){
           return $this->cena;
        }
         function __toString(){
           return  "<p>Krevet je duzine ".$this->duzina." i sirine ".$this->sirina." napravljen od-".$this->materijal."- po ceni od ".$this->cena." din<p>";
         } 
         function popust($a){
           return  $this->cena *= (1-$a/100);
             
         }
    }

    $bracni=new Krevet(1.5,1.7,'drvo',27000);
    echo $bracni->citanje_cene();
    echo $bracni;

    // Napraviti dva objekta klase Krevet, sa podacima po zelji. Prikazati samo Krevet sa vecom cenom
    $krevet_sprat= new Krevet(1.2,1.5,'drvo-metal',17000);
    $kauc= new Krevet(2,1.4,'koza',35000);

    if($krevet_sprat->citanje_cene()>$kauc->citanje_cene()){
        echo "<p>Duzi krevet je krevet na sprat sa cenom od ".$krevet_sprat->citanje_cene()."</p>";
        
    }
    else{
    echo "<p>Duzi krevet je kauc sa cenom od ".$kauc->citanje_cene()."</p>";  
    }

    $dusek = new Krevet(1.2,1.3,'guma',5000);
    echo $dusek;
    $dusek -> popust(10);
    echo $dusek;

  ?>
</body>
</html>