<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 2. Написати функцију која враћа div унутар којег се налази N span елемената који за текст имају
редом бројеве од 1 до N -->
    <?php
    function div_return($n){
        $c= "<div>";
        for($i=1;$i<=$n;$i++){
            $c .= "<span>$i</span>";
        }
      
        $c .="</div>";   
         return  $c;
    }

    echo div_return(7);

    ?>
</body>
</html>