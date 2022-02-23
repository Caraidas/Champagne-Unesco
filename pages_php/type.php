<php? require(coteaux.php); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devic-width, initial-scale=1,0">
    <link rel="stylesheet" href="../css/style-type.css">
    

    <title>Type</title>
</head>
<body>

    <div class="fond">

    <div class="containertitre versionPC">
        <a class='clicable' href="">Hébergement</a> 
        <div class="trait_gris"></div>
        <a class='clicable' href="">Découvrir</a>  
        <div class="trait_gris"></div>
        <a class='clicable' href="">Restaurant</a> 
        <div class="trait_gris"></div>
        <a class='clicable' href="">Agenda</a>
    </div>

    <div class="containertitre versionTel">
        <a class='clicable' href="">Champagne</a>
    </div>


    <div class="containercorp">

        <div class="text centre">
            
            <?= $article[0] ?>
            
        </div>
        
    </div>

    <div class="containerfin"></div>
</div>
</body>
</html>