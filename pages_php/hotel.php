<?php include 'connexion.inc.php' ?>
<?php include 'fonctionnels/langVerif.php';?>
<?php if ($langue == 0){
        $title='Hotels'; 
    }else{
        $title='Hostels';
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style-service.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../image/logoOnglet.png">
    <meta name="viewport" content="width=devic-width, initial-scale=1,0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title><?=$title?></title>

</head>
<body >
<?php include 'header.php';?>
        <h1><?= $title ?></h1>
        <div id = "articles" class="card-container">
            <ul class="cards"> <!--sous forme de liste de cartes-->
            <?php 
                $result = $conn->query("SELECT * FROM hotel;");
                while($ligne = $result->fetch(PDO::FETCH_OBJ) ){

                    echo
                    "<li class='cards_item'>
                        <div class='card'>
                            <div class='card_image'><img src='$ligne->image'></div>
                                <div class='card_content'>
                                    <h2 class='card_title'>$ligne->nom $para[$langue]</h2>
                                    <a href='$ligne->lien'><button class='btn'>$ligne->prix </button></a>
                                </div>
                            </div>
                     </li>";
                }
            ?>
            </ul>    
        </div>
       
            </div>
        <?php include 'footer.php';?>
</body>