<?php include 'fonctionnels/langVerif.php';?>
<?php include 'contenus/contenuPatrimoine.php';?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devic-width, initial-scale=1,0">
    <link rel="stylesheet" href="../css/style-type.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <title>Caves</title>
    <style>
        #fond{
            background-attachment: fixed;
            background-position:center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(../image/unescoflags.png);
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
                <img src = "../image/cave.jpg">
                
                <?= $para2[$langue] ?>
                <img src="../image/cavejoseph.png">
                <?= $para3[$langue] ?>

                <img src = "../image/moetchandon2.jpg"> 
                <?= $para4[$langue] ?>
                <img src = "../image/moetchandon1.jpg">
                <?= $para5[$langue] ?>

                <?= $para6[$langue] ?>
                <img src = "../image/mumm.jpg">
                <?= $para7[$langue] ?>
                <img src = "../image/veuveclicquot.jpg">
                <br> 
                <img src = "../image/veuveclicquot2.jpg">
                <?= $para8[$langue] ?>
                
                </div>
            </div>
        
    </body>
    <?php include 'footer.php';?>
</html>