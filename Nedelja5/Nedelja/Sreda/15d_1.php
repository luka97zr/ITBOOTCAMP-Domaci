

<?php
    $a="Marko";
    $b="Luka";
    $a_d=strlen($a);
    $b_d=strlen($b);

function duze_ime(){
    global $a,$b,$a_d,$b_d;
    if($a_d>$b_d){
        echo "Duze ime je $a";
    }else
        echo "Duze ime je $b";
}
duze_ime();

?>