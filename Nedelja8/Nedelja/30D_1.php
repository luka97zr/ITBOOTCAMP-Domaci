<?php 
    include "podaci.php";
    
    class Proizvod{
        public $id, $ime,$slika,$opis,$naslov, $cena,$grupa;

        function __construct($niz){
            //['id'=>100, 'ime'=>'Cokolada100g', 'naslov'=>"Cokolada 100 grama ima sa lesnicima", 'cena'=>100, 'slika'=>'coko.jpg', 'opis'=>'1  Ovo je neki bas duzi opis .']
            $this->id = $niz['id'];
            $this->ime = $niz['ime'];
            $this->slika = $niz['slika'];
            $this->opis = $niz['opis'];
            $this->naslov = $niz['naslov'];
            $this->cena = $niz['cena'];
            $this->grupa = $niz['grupa'];
        }
        function prikazi_proizvod(){
            echo "<div style='border:2px solid  black; width:400px; display:inline-block'>";
            echo "<h1 class='naslov_proizvoda'>$this->naslov</h1>,grupa:$this->grupa";
            echo "<img style='width:200px' src='".$this->slika."' alt='slika'/>";
            echo "<a href='detaljnije.php?id=$this->id'>Detaljnije</a>";
            echo "</div>";
        }
        function prikazi_proizvod_detaljnije() {
            echo "<h1>$this->naslov</h1>";
            echo "<img style='width:400px'  src='$this->slika' alt='slika'>";
            echo "<p>$this->opis</p>";
            echo "<p>$this->cena</p>";
        }
    }

    class ListaProizvoda{
        public $p;
        


        function __construct(){
            $this->p = [];
        }
        function dodaj_proizvode($podaci){
            for($i=0; $i<count($podaci); $i++){
                $pr = new Proizvod($podaci[$i]);
                array_push($this->p, $pr);
            }

        }
        function dodaj_4_proizvoda($proizvod0, $proizvod1, $proizvod2, $proizvod3){
            $this->p[0] = new Proizvod($proizvod0);
            $this->p[1] = new Proizvod($proizvod1);
            $this->p[2] = new Proizvod($proizvod2);
            $this->p[3] = new Proizvod($proizvod3);
        }
        function prikazi_sve_proizvode($grupa=''){
            // 1.nacin
        // $pom->p[0]->prikazi_proizvod();
        // $pom->p[1]->prikazi_proizvod();
        // $pom->p[2]->prikazi_proizvod();
        // $pom->p[3]->prikazi_proizvod();

        // 2.nacin
            // for($i=0; $i<count($this->p); $i++)
            //     $this->p[$i]->prikazi_proizvod();

        // 3.nacin
             if($grupa !== "") { 
            foreach($this->p as $jedan_proizvod){ 
                if($jedan_proizvod->grupa==$grupa)
                $jedan_proizvod->prikazi_proizvod();
            
            }
        }
        }       

        function prikazi_jedan_proizvod_detaljnije($id){
            for($i=0; $i<count($this->p); $i++){
                if($this->p[$i]->id == $id)
                    $this->p[$i]->prikazi_proizvod_detaljnije();
            }
        }
    }

        class WebSite{
            function header(){
                echo "<h1>Dobrodosli u web-shop </h1>";
                echo "<a href='index1.php'>Home</a><br>";
            }

            function footer(){
                echo "<h4>Bolje vas nasli</h4>";

            }
            function menu(){
                echo "<a href='index1.php?grupa=crna'>Crna</a><br>";
                echo "<a href='index1.php?grupa=bela'>Bela</a>";
            }
        }
    $lp = new ListaProizvoda();
    $ws= new WebSite();
    $lp->dodaj_proizvode($podaci);
    
    
?>