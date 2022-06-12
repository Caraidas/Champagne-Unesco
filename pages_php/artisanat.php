<?php include 'fonctionnels/langVerif.php';?>
<?php include 'contenus/contenuArtisana.php';?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style-type.css">
    <meta name="viewport" content="width=devic-width, initial-scale=1,0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <title>Artisanat</title>
    <style>
        #fond{
            background-attachment: fixed;
            background-position:center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(../image/Photo\ by\ Martin\ Fennema\ on\ Unsplash.jpg);
            position: fixed;
            width: 100vw;
            height: 100vh;
            filter:blur(2px);
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
                <img src="../image/martin-fennema-NEkq08ziTNE-unsplash.jpg"><br>
                    
                <?= $para2[$langue] ?>
                <img src = "../image/jametlene-reskp-AaB7EZCLWKo-unsplash.jpg"><br>
                
                <?= $para3[$langue] ?>
                <img src = "../image/carter-yocham-e9-K6VO5h8M-unsplash.jpg">
            </div>
       
            </div>
            
        <?php include 'footer.php';?>
</body>