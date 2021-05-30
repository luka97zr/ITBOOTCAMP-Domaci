<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisati fju koja za dati niz stringova pomocu fje "palindrom" (radjeno na casu) ispituje i prikazuje samo palindrome tog niza.  Npr za niz ["potop", "buducnost", "lul", "nije"]  prikazuje reci "potop" i "lul".
 -->
    <?php
        function palindrom($str){
            $p="";
            $a=false;
            foreach($str as $index=>$element){
                if($element===strrev($element)){
                $a = true;
                $p .= $element.",";
                }
            }
           if($a == true){
               echo "Palindromi :$p";
           }else{
               echo "Nema palindorma";
           }
        }
        palindrom(["ana","Marko","lul","mesec"]);
    ?>

</body>
</html>