<?php include 'fonctionnels/langVerif.php';?>
<?php include 'contenus/contenuHistoireCreationChampagne.php';?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style-type.css">
    <meta name="viewport" content="width=devic-width, initial-scale=1,0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <title>Histoire</title>
    <style>
        #fond{
            background-attachment: fixed;
            background-position:center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(../image/robert-linder-ti9_YXaKFcI-unsplash.jpg);
            position: fixed;
            width: 100vw;
            height: 100vh;
            filter:blur(2px);
        }
        </style>
</head>
<body>
    <?php include 'header.php';?>
        <div id="fond"></div>
    
        <div class="containercorp">
            <div class="text centre">
               
                <?= $titre[$langue] ?>

                <?= $para1[$langue] ?>
                <img src="../image/dompérignon.jpg">
                    
                <?= $para2[$langue] ?>
                <img src="../image/vignerandom.jpg">
                   
                <?= $para3[$langue] ?>
                <img src="../image/types_vin.jpg">
                    
                <?= $para4[$langue] ?>
        </div>
    </div>
    
    <div class= "sideicons "> 
        <div class="iconimg"><a href="hotel.php"><img src="../image/bed.png"></a></div>
        <div class="iconimg"><a href="restaurant.php"><img  src="../image/restaurant.png"></a></div>
        <div class="iconimg"><a href=";"><img  src="../image/event.png"></a></div>
    </div>

        <div class="container-gotop">
            <a href="#" class="gotop"><img class = "imggotop" src="../image/to_top.png"></a>
        </div>
    <?php include 'footer.php';?>
</body>

</html>