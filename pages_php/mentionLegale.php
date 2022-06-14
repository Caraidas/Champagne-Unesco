<?php include 'connexion.inc.php' ?>
<?php include 'fonctionnels/langVerif.php';?>
<?php if ($langue == 0){
        $title='Mentions Légales'; 
    }else{
        $title='Legacy';
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style-legacy.css">
    <meta name="viewport" content="width=devic-width, initial-scale=1,0">
    <link rel="icon" type="image/png" sizes="16x16" href="../image/logoOnglet.png">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title><?=$title?></title>

</head>
<body >
<?php include 'header.php';?>
    <article>
        <h1>Propriétaire du site :</h1>
    </article>
    <p>Prénom/nom : Paul LUCAS</p>
    <p>5 rue creuse la Celle sur Morin</p>
    <p>Téléphone : 06 87 44 21 29</p>
    <p>Adresse électronique : paul.stephane_lucas@yahoo.com</p>
    <article>
        <h1>Participants à la création du site :</h1>
    </article>
    <p>Paul LUCAS</p>
    <p>Joshua LEMOINE</p>
    <p>Laura LEROY</p>
    <p>Elody OCTAVIE</p>
    <article>
        <h1>Hébergeur :</h1>
    </article>
    <p>Dénomination : Université Gustave Eiffel</p>
    <p>Adresse: 16 Boulevard Newton, 77420 Champs-sur-Marne</p>
    <p>Numéro de téléphone : 01 60 95 75 00</p>
    <article>
        <h1>Conditions générales d’utipsation :</h1>
    </article>
    <p>L’existence de ce site à pour but de promouvoir un patrimoine culturel de l’UNESCO qu’est la Champagne.</p>
    <p>Ce site propose des images cliquables redirigeant vers des sites annexes. Nous ne sommes pas en mesure de contrôler ces différents sites. Les autres liens redirigent vers les différentes pages du site.</p>
    <p>L’accès au site est libre à toute personne voulant recevoir des informations sur la Champagne de manière générale.</p>

    <article>
        <h1>droit d'utilisation des images :</h1>
    </article>
    
    <p>Photo by Anna Kaminova on Unsplash</p>
    <p>Photo by Árpád Czapp on Unsplash</p>
    <p>Photo by Martin Fennema on Unsplash</p>
    <p>amirap mirhashemian on Unsplash</p>
    <p>Anshu A on Unsplash</p>
    <p>Árpád Czapp on Unsplash</p>
    <p>Fernand Champagne on Unsplash</p>
    <p>Carter Yocham on Unsplash</p>
    <p>Claudio Schwarz on Unsplash</p>
    <p>Edgar Castrejon on Unsplash</p>
    <p>Jametlene Reskli on Unsplash</p>
    <p>Jonathan Borba on Unsplash</p>
    <p>Karly Jones on Unsplash</p>
    <p>Lomig on Unsplash</p>
    <p>Margaret Jaszowska on Unsplash</p>
    <p>Martin Fennema on Unsplash</p>
    <p>Redcharpe on Unsplash</p>
    <p>robert-linder-ti9_YXaKFcI-unsplash</p>
    <p>Dan Dickison flickr</p>



        <?php include 'footer.php';?>
</body>