<?php include 'fonctionnels/langVerif.php';?>
<?php include 'contenus/contenuCoteaux.php';?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devic-width, initial-scale=1,0">
    <link rel="stylesheet" href="../css/style-type.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <title>Coteaux</title>
    <style>
        #fond{
            background-attachment: fixed;
            background-position:center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(../image/Photo\ by\ Claudio\ Schwarz\ on\ Unsplash\(2\).jpg);
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

                <?= $text1[$langue] ?>
                <img src="../image/Vallé de la Marne.jpg">
                
                <?= $text2[$langue] ?>
                <img src = "../image/HautVillers.jpg">

                <?= $text3[$langue] ?>
                <img src = "../image/coteauAy.jpg">

                <?= $text4[$langue] ?>
                <img src = "../image/coteauMaureuil.jpg">

                </div>
            </div>
        
            </footer>
        </body>
        <?php include 'footer.php';?>
        </html>