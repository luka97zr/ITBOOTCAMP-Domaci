<?php
class Turisticka_Agencija{
    public $conn;

    function __construct($baza){
        $this -> conn = new mysqli('localhost','root','',$baza);
        if($this->conn->connect_error)
            die("Greska:".$this->conn->connect_error);
        else
            echo "Konektovan";
        
    }
    //select vraca neki niz
    function izvrsi_select($upit){
        $podaci = $this->conn->query($upit);
        if($podaci===false){
            return['uspesno'=>false,'poruka'=>$this->conn->error];
        }else
            $niz=$podaci->fetch_all(MYSQLI_ASSOC);
            return['uspesno'=>true,'niz'=>$niz];
    }
    //delete,update i insert vracaju samo false ako nije uradjen
    function izvrsi_upit($upit){
        $odg=$this->conn->query($upit);
        if($odg===false)
           die("Nije izvrsen upit:".$this->conn->error);
        else
            echo "Uspesno izvrsen upit";
    }
    function prikazi_destinacije(){
        $destinacije = $this->izvrsi_select("SELECT drzava,grad,datum_polaska,datum_povratka from putovanja JOIN destinacije ON destinacije.id= putovanja.id");
        if($destinacije['uspesno']==true)
            return $destinacije['niz'];
        else
            die("Neuspesan upit".$destinacije['poruka']);
    }
    function prikazi_putnike(){
        $putnici = $this->izvrsi_select("SELECT ime_prezime,drzava,grad,datum_povratka,datum_polaska FROM (`spisak_putnika` JOIN putnici on spisak_putnika.broj_pasosa=putnici.broj_pasosa join putovanja on spisak_putnika.id_putovanja = putovanja.id)join destinacije on spisak_putnika.id_putovanja=destinacije.id");
        if($putnici['uspesno']==true)
            return $putnici['niz'];
        else
            die("Neuspesan upit:".$putnici['poruka']);
    }
    function otkazi_rezervaciju($br_pasosa){
        $rez = $this->izvrsi_upit("DELETE from spisak_putnika WHERE broj_pasosa=$br_pasosa");
    }

}
$b = new Turisticka_Agencija('domaci2');
$destinacije = $b-> prikazi_destinacije();
$putnici = $b -> prikazi_putnike();
$b->otkazi_rezervaciju(23);




echo "<table border=1>";
foreach($destinacije as $red){
    echo "<tr>";
    foreach($red as $val){
        echo "<td>$val</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<table border=1>";
foreach($putnici as $red){
    echo "<tr>";
foreach($red as $val)
    echo "<td>$val</td>";
}
echo "</tr>";
echo "</table>";
?>