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

    $i = $_GET['ime'];
    $i_i = substr($i,0,1);
    $pozicija = strpos($i," ",0);
    $i_p = trim(substr($i,$pozicija,2)); // Nisam siguran zasto mi je pozicija 2, kada treba 1. pozicija posle razmaka
    echo "$i_i.$i_p.";


    ?>
</body>
</html>