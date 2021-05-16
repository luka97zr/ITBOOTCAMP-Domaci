<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     .red{
         color:red;
     }
     .green{
         color:green;
     }
    </style>
</head>
<body>
    <?php
    $a= mt_rand(1,20);
    $b=mt_rand(1,20);
    
    echo "Broj a je $a<br>";
    echo "Broj b je $b<br>";

    //a)
    if($a>$b){
        echo "<p style='color:green'>Veci broj je:$a</p>";
        echo "<p style='color:red'>Manji broj je:$b</p>";
    }else{
        echo "<p style='color:green'>Veci broj je:$b</p>";
        echo "<p style='color:red'>Manji broj je:$a</p>";
    }

    //b}
    if($a>$b){
        echo "<p class='green'>Veci broj je:$a</p>";
        echo "<p class='red'>Manji broj je:$b</p>";
    }else{
        echo "<p class='green'>Veci broj je:$b</p>";
        echo "<p class='red'>Manji broj je:$a</p>";
    }

    ?>
</body>
</html>