<?php include 'fonctionnels/langVerif.php';?>
<?php include 'contenus/contenuFort.php';?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style-type.css">
    <meta name="viewport" content="width=devic-width, initial-scale=1,0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    
    <title>Fort Chabrol</title>
    <style>
        #fond{
            background-attachment: fixed;
            background-position:center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(../image/fortChabrol.jpg);
            position: fixed;
            width: 100vw;
            height: 100vh;
            filter:blur(2px);
            
        }
        @media (max-width:650px){
            #fond{
                display:none
            }
        }
    </style>
</head>
<body >
    <?php include 'header.php';?>
    <div id="fond"></div>
    
        <div class="containercorp">
            <div class="text centre">
            <?= $titre[$langue] ?>

            <?= $para1[$langue] ?>
            <img src="../image/fortChabrol.jpg">

            <?= $para2[$langue] ?>
            <img src = "../image/phylloxera.jpg">
                
            <?= $para3[$langue] ?>
            <img src = "../image/RaoulChandon.jpg">
            
            <?= $para5[$langue] ?>
                </div>
            </div>
            </body>
            <?php include 'footer.php';?>
</html>
    