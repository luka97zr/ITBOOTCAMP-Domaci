<?php

use Turisticka_Agencija as GlobalTuristicka_Agencija;

class Turisticka_Agencija{
    public $conn;

    function __construct($baza){
        $this->conn= new mysqli('localhost','root','',$baza);
        if($this->conn->connect_error)
            die("Greska:".$this->conn->connect_error);
        else
            echo "Konektovan";
    }
    function izvrsi_select($upit){
        $podaci = $this->conn->query($upit);
        if($podaci===false)
            return['uspesno'=>false,'poruka'=>$this->conn->error];
        else{
            $niz = $podaci ->fetch_all(MYSQLI_ASSOC);
            return['uspesno'=>true,'niz'=>$niz];
        }
    }
    function izvrsi_upit($upit){
        $odg = $this->conn->query($upit);
        if($odg === false)
            die("Nije izrsen upit:".$this->conn->error);
        else
            echo "Upit izvrsen";
    }
    function id_destinacije($drzava,$grad){
        $id = $this->izvrsi_select("SELECT id FROM destinacije WHERE drzava='$drzava' AND grad='$grad'");
        if($id['uspesno']==true)
            return $id['niz'];
        else
            die("Neuspesan upit:".$id['poruka']);
    }
    function destinacije_sa_id($id){
        $dest = $this->izvrsi_select("SELECT * FROM putovanja where id=$id");
        if($dest['uspesno']==true)
            return $dest['niz'];
        else
            die("Neuspesan upit".$id['poruka']);
    }
    function obrisi_putovanje($id){
        $r = $this->izvrsi_upit("DELETE FROM spisak_putnika WHERE id_putovanja=$id");
    }
}

$b = new Turisticka_Agencija('domaci2');
$id = $b ->id_destinacije('Indija','Delhi');
$dest = $b->destinacije_sa_id(4);
$b->obrisi_putovanje(2);

echo "<table>";
foreach($id as $red){
    echo "<tr>";
foreach($red as $val)
    echo "<td>id:$val</td>";
}
    echo "</tr>";
echo "</table>";

echo "<table border=1>";
foreach($dest as $red){
    echo "<tr>";
foreach($red as $val)
    echo "<td>id:$val</td>";
}
    echo "</tr>";
echo "</table>";











?>