<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border:1px solid black;
            border-collapse: collapse;
        }
        table td{
            width:50px;
            height:30px;
            border:1px solid black;
            text-align:center;
        }
    </style>
</head>
<body>
    <table>
    <?php
    for($i=2;$i<=6;$i+=2){
        echo "<tr>";
        for($j=3;$j<=12;$j+=3){
            echo "<td>$i-$j</td>";
        }
        echo "</tr>";
    }

    ?>
    </table>
</body>
</html>