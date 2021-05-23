<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Prikazati brojeve od 30 do 99, ali preskociti sve one cija je prva cifra deljiva sa 3, ili je druga cifra deljiva sa 4. -->

<?php

$a=30;
$prva =floor($a/10);
$druga= $a % 10; // Druga cifra se dobija kao ostatak pri deljenju sa 10!

while($a<99){
    $a++;
    if(floor($a/10)%3==0 || ($a%10) % 4 ==0){
        continue;
    }
    echo "<p>A je $a </p>";
}
  


?>
</body>
</html>