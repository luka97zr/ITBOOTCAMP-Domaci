<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
 .p1{
     text-align:center;
     border:1px solid black;
     width:10vw;

 }
 .p1 img{
     width:90%;
 }
</style>
</head>
<body>
<?php
include "index1.php";
$id=(isset($_GET['id']))? $_GET['id'] : "";
$lp->prikazi_jedan_proizvod_detaljnije($id); 




?>
</body>
</html>
