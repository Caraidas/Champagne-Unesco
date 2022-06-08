<?php include 'connexion.inc.php' ?>
<?php include 'fonctionnels/langVerif.php';?>
<?php if ($langue == 0){
        $title='Hotel'; 
    }else{
        $title='Hostel';
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style-service.css">
    <meta name="viewport" content="width=devic-width, initial-scale=1,0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title><?=$title?></title>
    <style>
        #fond{
            background-attachment: fixed;
            background-position:center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(../image/artisanatfleur.jpg);
            position: fixed;
            width: 100vw;
            height: 100vh;
            filter:blur(2px);
        }
    </style>
</head>
<body >
<?php 
include 'header.php';

?>
    <div id="fond"></div>
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
                                    <a href='$ligne->lien'><button class='btn'>$ligne->prix €</button></a>
                                </div>
                            </div>
                     </li>";
                }
            ?>
            </ul>    
        </div>
       
            </div>
            <div class= "sideicons "> 
                <div class="iconimg"><a href="#"><img src="../image/bed.png"></a></div>
                <div class="iconimg"><a href="restaurant.php"><img  src="../image/restaurant.png"></a></div>
                <div class="iconimg"><a href="evenement.php"><img  src="../image/event.png"></a></div>
            </div>

        <div class="container-gotop">
            <a href="#" class="gotop"><img class = "imggotop" src="../image/to_top.png"></a>
        </div>
        <?php include 'footer.php';?>
</body>

</html>
    </body>
    </html>