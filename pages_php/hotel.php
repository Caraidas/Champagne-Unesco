<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style-type.css">
    <meta name="viewport" content="width=devic-width, initial-scale=1,0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    
    <title>Hotel</title>
    <style>
        #fond{
            background-attachment: fixed;
            background-position:center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url(../image/lune.png);
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

            <?php 
                $result = $conn->query("SELECT * FROM hotel");
                while( $ligne = $membres->fetch(PDO::FETCH_OBJ) ){
                    echo '<img src="'.$ligne->image.'"> <p>'.$ligne->nom.' Prix : '.$ligne->prix.'</p> ';
                }
            ?>

            </div>
       
            </div>
            <div class= "sideicons "> 
                <div class="iconimg"><a href=";"><img src="../image/bed.png"></a></div>
                <div class="iconimg"><a href=";"><img  src="../image/restaurant.png"></a></div>
                <div class="iconimg"><a href=";"><img  src="../image/event.png"></a></div>
            </div>

        <div class="container-gotop">
            <a href="#" class="gotop"><img class = "imggotop" src="../image/to_top.png"></a>
        </div>
        <?php include 'footer.php';?>
</body>

</html>
    </body>
    </html>