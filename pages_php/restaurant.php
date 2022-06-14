<?php include 'connexion.inc.php' ?>
<?php include 'fonctionnels/langVerif.php';?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style-service.css">
    <meta name="viewport" content="width=devic-width, initial-scale=1,0">
    <link rel="icon" type="image/png" sizes="16x16" href="../image/logoOnglet.png">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Restaurants</title>
</head>
<body>
<?php include 'header.php'?>
        
    <h1>Restaurants</h1>
    <div id = "articles" class="card-container">
        <ul class="cards">
        <?php 
            $result = $conn->query("SELECT * FROM restaurants;");
            while($ligne = $result->fetch(PDO::FETCH_OBJ) ){

                if ($langue == 0){
                    $type=$ligne->type;
                } else{
                    $type=$ligne->typeEngl;
                }

                echo
                "<li class='cards_item'>
                    <div class='card'>
                        <div class='card_image'><img src='$ligne->image'></div>
                            <div class='card_content'>
                                <h2 class='card_title'>$ligne->nom</h2>
                                <a href='$ligne->lien'><button class='btn'>$type</button></a>
                            </div>
                        </div>
                    </li>";
            }
        ?>
        </ul>
    </div>
    <?php include 'footer.php';?>
</body>
