<?php include 'fonctionnels/langVerif.php';?>
<?php include 'contenus/contenuGastronomie.php';?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devic-width, initial-scale=1,0">
    <link rel="stylesheet" href="../css/style-type.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../image/logoOnglet.png">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <title><?= $titre[$langue] ?></title>
    <style>
        #fond{
            background-attachment: fixed;
            background-position:center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(../image/Photo\ by\ Anshu\ A\ on\ Unsplash.jpg);
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
<body>
    <?php include 'header.php';?>
    <div id="fond"></div>
        
        <div class="containercorp">
            <div class="text centre">
               
                <?= $texte1[$langue]?>
                <img src = "../image/Photo by amirali mirhashemian on Unsplash(1).jpg">

                <?= $texte2[$langue]?>
                <img src = "../image/Photo by Margaret Jaszowska on Unsplash(1).jpg">
                
                <?= $texte3[$langue]?>
                <img src = "../image/Croquignoles(1).jpg">
                </div>
            </div>

        <?php include 'footer.php';?>
    </body>
        
</html>