<?php

//dans chaque première cases du tableau on va voir un morceau d'html qui représente un article en francais
//puis dans la seconde case la même chose mais en anglais

$article = array(

"
<h2>Coteaux de Champagne</h2>
<p>
        Depuis 2015, la région Champagne est inscrite au patrimoine mondial de l’UNESCO. Est inscrit à ce patrimoine ses caves, ses maisons et ses coteaux. En effet c’est bien grâce à sa géographie exceptionnelle que la Champagne a mérité sa place auprès d’autres lieux d'exceptions.
    <br>    Pour tous ceux qui souhaitent voir les merveilles que propose cette région française, cet article est fait pour vous.
    <br>    Parmi tous les coteaux qui parcourent la vallée de la marne, trois ont été choisis pour représenter la région auprès du monde: les coteaux historiques de Hautvillers, Aÿ et Mareuil-sur-Aÿ. 
</p>
<h3>La vallée de la marne</h3>
<p>
    Cette vallée qui s’étend de Tours-sur-Marne à Dormans traverse le cœur historique du vignoble champenois et possède en son sein une partie des coteaux les plus connus de la Champagne. On y trouve la culture de la vigne de manière omniprésente même si l’on peut observer que la rive droite est légèrement plus cultivée de part son exposition au soleil sud/sud-est.
    <br>    Ses sols riches en craie typique de la région convienne à merveille à la vigne et surtout au cépage du pinot noir.
    <br>    Enfin il est important de noter que c’est dans cette vallée que l’on trouve Le Mémorial commémoratif des deux batailles de la Marne, importants épisodes de la première guerre mondiale.
</p>
",
"
<h2>OUI OUI L'ANGLAIS</h2>
<p>
    Since 2015, the Champagne region has been listed as a UNESCO World Heritage Site. Its cellars, houses and hillsides are part of this heritage. Indeed, it is thanks to its exceptional geography that the Champagne region has earned its place alongside other exceptional places.
    <br>    For all those who wish to see the wonders wich this French region offers, this article is made for you.

</p>
<h3>The Marne Valley</h3>
<p>
    This valley, which stretches from Tours-sur-Marne to Dormans, runs through the historic heart of the Champagne vineyards and has some of the best-known hillsides of the Champagne region within it. Vines grow everywhere, although the right bank is slightly more cultivated due to its exposure to the south/south-east sun.
    <br>    Its chalky soil, typical of the region, is perfectly suited to the vine and especially to the Pinot Noir grape variety.
    <br>        Finally it is important to note that it is in this valley that we find the Memorial of the two battles of the Marne, important episodes of the First World War.

</p>
");

$langue = 3 ;
if(isset($_GET["langue"])) {        //je vérifie qu'il y à bien un paramètre langue dans l'URL
    $langue = htmlspecialchars($_GET["langue"]);//htmlspecialchars transforme les caractères spéciaux en code compréhensible (" = &quot) je crois que ça sécurise
}


switch($langue){ //on passe dans un switch pour être sur que y'a oas de problème (genr un petit con a entré 3)
    case 1:
        $langue = 1;
        break;
    case 0:
        $langue = 0;
        break;
    default:
        $langue = 0;
        break;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devic-width, initial-scale=1,0">
    <link rel="stylesheet" href="style-type.css">

    <title>Type</title>
</head>
<body>
    

    <div class="fond">

    <div class="containertitre versionPC">
        <?= "<a class='clicable' href='index.php?langue=$langue'>Hébergement</a>" ?> <?= //changer de page en maintenant la langue ?>
        <div class="trait_gris"></div>
        <a class='clicable' href="index.php?langue=0">Découvrir</a>  <?=  //passer en francais ?>
        <div class="trait_gris"></div>
        <a class='clicable' href="index.php?langue=1">Restaurant</a> <?=  //passer en anglais ?>
        <div class="trait_gris"></div>
        <a class='clicable' href="">Agenda</a>
    </div>

    <div class="containertitre versionTel">
        <a class='clicable' href="">Champagne</a>
    </div>


    <div class="containercorp">

        <div class="text centre">
       
        <?= $langue // juste une verification de la langue?>
        <?= $article[$langue] // on affiche l'article dans le bon language ?> 
            
        </div>

        <div class="containerfin"></div>
    </div>

    
</div>
</body>
</html>