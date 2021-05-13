<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td{
            border:1px solid black;
            border-collapse:collapse;
            
        }
        table{
            width:350px;
            height:200px;
            text-align:center;

        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td><?=$a=mt_rand(1,10)?></td>
            <td><?=pow($a,2)?></td>
        </tr>
        <tr>
            <td><?=$b=mt_rand(1,10)?></td>
            <td><?=pow($b,2)?></td>
        </tr>
        <tr>
            <td><?=$c=mt_rand(1,10)?></td>
            <td><?=pow($c,2)?></td>
        </tr>
    </table>
</body>
</html>