<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "27D_1.php";

    class Baldahin extends Krevet{

        public $visina,$cenaBaldahina;

        function __construct($duzina,$sirina,$materijal,$cena,$visina=0,$cenaBaldahina=0){
            parent::__construct($duzina,$sirina,$materijal,$cena);
            $this->visina=$visina;
            $this->cenaBaldahina=$cenaBaldahina;
        }
        function __toString(){
            if($this->cenaBaldahina == 0)
                return "<p>Cena kreveta bez baldahina je ".$this->citanje_cene();

             else
                return "<p>Cena kreveta sa baldahinom je ".($this-> citanje_cene()+$this->cenaBaldahina);

        } 
    }

    $krevet_sa_baldahinom = new Baldahin(1.5,1.7,'drvo',27000,1.4,7000);
    echo $krevet_sa_baldahinom;
    













?>
</body>
</html>