
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
    $a="Marko";
    $b="Luka";
    $a_d=strlen($a);
    $b_d=strlen($b);

function duze_ime(){
    global $a,$b,$a_d,$b_d,$cl;
    if($a_d>$b_d){
        return $a;
    }else{
}       return $b;
}
$c=duze_ime();
echo "<p style=color:red>Duze ime je $c</p>";

//3. zadatak
function krace_ime(){
    global $a,$b,$a_d,$b_d,$cl;
    if($a_d<$b_d){
        return $a;
        $cl = 'red';

    }else{
        return $b;
        $cl="green";
    }
}
    $f=krace_ime();
    
    echo "<p style=color:green>Krace ime je $f</p>";
    

?>
</body>
</html>

