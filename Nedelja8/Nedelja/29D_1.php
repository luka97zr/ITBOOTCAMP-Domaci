<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napraviti klasu SastojakHrane koja ce imati clanice: naziv, mera, kalorije. I metode: konstruktor, "promeniMeru" koja menja meru i "prikazi" koja samo prikazuje sve podatke zajedno u jednom paragrafu. -->
<?php
    class SastojakHrane{
        public $naziv,$mera,$kalorije;

        function __construct($naziv,$mera,$kalorije){
            $this->naziv=$naziv;
            $this->mera=$mera;
            $this->kalorije=$kalorije;
        }
        function promeniMeru($nova_mera){
            $this->mera=$nova_mera;

        }
        function prikazi(){
            echo "<p>Naziv: $this->naziv, mera: $this->mera g, ukupne kalorije: ".$this->kalorije*($this->mera/100)."kcal</p>";  
        
        }

    }
    $p=new SastojakHrane('pirinac',100,330);
    $p->prikazi();
    $p->promeniMeru(230);
    $p->prikazi();

    // Napraviti klasu Jelo koja ima naslov, opis i niz sastojaka hrane. U konstruktoru se dobija naslov, opis i niz $podaci. Naslov i niz samo upisati u this, a preko niza $podaci napraviti niz objekata koji su tip SastojakHrane. 
    // Napraviti metode "prikazi" i metodu za "promeniMeru" za promenu mere jednog sastojka.  
    $podaci = [
        ["naziv"=>"jaja", "mera"=>"2", "kalorije"=>300],
        ["naziv"=>"brasno", "mera"=>"200g", "kalorije"=>600],
        ["naziv"=>"secer", "mera"=>"20g", "kalorije"=>100],
        ["naziv"=>"so", "mera"=>"5g", "kalorije"=>40]
    ];
    
    class Jelo{
        public $naslov,$opis,$niz_sastojaka=[];

        function __construct($naslov,$opis,$podaci){
            $this->naslov=$naslov;
            $this->opis=$opis;
                for($i=0;$i<count($podaci);$i++){
                    $p = new SastojakHrane($podaci[$i]['naziv'], $podaci[$i]['mera'], $podaci[$i]['kalorije']);
                    array_push($this->niz_sastojaka, $p);
                }
        }
        function kalorije($podaci){
            $uk=0;
            foreach($this->niz_sastojaka as $sastojak)
            $uk += $sastojak->kalorije;
            return $uk;
        }
        function prikazi(){
            print_r($this->niz_sastojaka);
           echo "<p>Naziv jela: $this->naslov, opis: $this->opis, kalorije:</p>";
        }


        function promeniMeru($taj_sastojak,$nova_mera){
            for($i=0;$i<count($this->niz_sastojaka);$i++){
                if($this->niz_sastojaka[$i]->naziv == $taj_sastojak){
                    $this->niz_sastojaka[$i]->mera=$nova_mera;

                }
            }

        }
    }

    $jelo  = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
    $jelo->prikazi();
    $jelo->promeniMeru('jaja',1);
    $jelo->prikazi();

    //Ne znam da izracunam kalorije posle promene mere






?>

</body>
</html>