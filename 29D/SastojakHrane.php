<!-- Napraviti klasu SastojakHrane koja ce imati clanice:
 naziv, mera, kalorije. 
 I metode: konstruktor, "promeniMeru" koja menja meru i "prikazi" koja samo prikazuje sve podatke zajedno u jednom paragrafu. -->

 <?php
    class SastojakHrane{
        public $naziv,$mera,$kalorije;

        function __construct($naziv,$mera,$kalorije){
            $this->naziv = $naziv;
            $this->mera = $mera;
            $this->kalorije = $kalorije;
        }

        function promeniMeru($mera){
            $this->mera = $mera;
        }

        function prikazi(){
            echo "<p>";
            echo "Naziv:<b> $this->naziv </b>, mera: $this->mera , kalorije: $this->kalorije";
            echo "</p>";
        }
    }
 ?>