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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title><?=$title?></title>

</head>
<body >
<?php include 'header.php';?>
    <article>
        <h1>Propriétaire du site :</h1>
    </article>
    <li>Prénom/nom : Paul LUCAS</li>
    <li>5 rue creuse la Celle sur Morin</li>
    <li>Télephone : 06 87 44 21 29</li>
    <li>Adresse électronique : paul.stephane_lucas@yahoo.com</li>
    <article>
        <h1>Participants à la création du site :</h1>
    </article>
    <li>Paul LUCAS</li>
    <li>Joshua LEMOINE</li>
    <li>Laura LEROY</li>
    <li>Elody OCTAVIE</li>
    <article>
        <h1>Hébergeur :</h1>
    </article>
    <li>Dénomination : Université Gustave Eiffel</li>
    <li>Adresse: 16 Boulevard Newton, 77420 Champs-sur-Marne</li>
    <li>Numéro de téléphone : 01 60 95 75 00</li>
    <article>
        <h1>Conditions générales d’utilisation :</h1>
    </article>
    <li>a compléter</li>
    <article>
        <h1>droit d'utilisation des images :</h1>
    </article>
    <li>aaaaaaaaaaaaaaaaaaaaaaa</li>

        <?php include 'footer.php';?>
</body>