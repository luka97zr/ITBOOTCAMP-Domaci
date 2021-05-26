<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Написати функцију која враћа N div елемената који имају M span елемената,
који имају текст од 1 до M -->
    
        <?php
            function div_return($n, $m){
                $c="";
                for($i=1;$i<=$n;$i++){
                    $c .="<div>";
                        for($j=1;$j<=$m;$j++){
                            $c .= "<span>$j</span>";
                        }
                     $c .= "</div>";
                }
         
                return $c;
            }

            echo div_return(3,5)

        ?>
</body>
</html>