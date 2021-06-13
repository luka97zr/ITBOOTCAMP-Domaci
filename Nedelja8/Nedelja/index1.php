<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .footer{
        position: fixed;
        bottom: 0;
        width: 100%;
        text-align: center;
    }
    
    </style>
</head>
<body style="font-size:1.5em">
    <?php
        include "30D_1.php";
        echo  "<div class=header>";
        $ws->header();
        echo" </div>";
        $ws->menu();
        $grupa=(isset($_GET['grupa']))? $_GET['grupa'] : "";
        $lp->prikazi_sve_proizvode($grupa); 
        echo "<div class='footer'>";
        $ws->footer();
        echo "</div>";



    ?>
</body>
</html>