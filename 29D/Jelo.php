<!-- Napraviti klasu Jelo koja ima naslov, opis i niz sastojaka hrane. 
U konstruktoru se dobija naslov, opis i niz $podaci.
Naslov i niz samo upisati u this, a preko niza $podaci napraviti niz objekata koji su tip SastojakHrane. 
Napraviti metode "prikazi" i metodu za "promeniMeru" za promenu mere jednog sastojka.  
 -->
<?php
include "./SastojakHrane.php";

class Jelo {
    public  $naslov,$opis,$sastojci;

    function __construct($naslov,$opis,$podaci){
        $this->naslov = $naslov;
        $this->opis = $opis;
        $this->sastojci = array_map(function($podatak){
            return new SastojakHrane($podatak["naziv"],$podatak["mera"],$podatak["kalorije"]);
        },$podaci);
    }

    function promeniMeru($naziv_sastojka,$mera){
        foreach($this->sastojci as $sastojak)
            if($sastojak->naziv == $naziv_sastojka)
                $sastojak->promeniMeru($mera); 
    }

    function prikazi(){
        echo "<div>";
        echo "<h3>$this->naslov</h3>";
        echo "<p>$this->opis</p>";
        foreach($this->sastojci as $sastojak)
            $sastojak->prikazi();
        echo "</div>";
    }
}
?>