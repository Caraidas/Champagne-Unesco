<?php
    if(session_id()==""){ //normalement on démarre toujours la session avec l'include de 'langVerif' mais on sait jamais
        session_start();
    }

    if(isset($_SESSION["lang"]) && $_SESSION["lang"]==1){
        $option="FR";
        $cave = "Cellar";
        $Coteaux = "Hillsides";
        $Patrimoine = "Legacy";
        $maison = "Houses";
    }else{
        $option="EN";
        $cave = "Caves";
        $Coteaux = "Coteaux";
        $Patrimoine = "Patrimoine";
        $maison = "Maisons";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            margin:0;
        }

        .headerPC{
            top: 0;
            display: flex;
            flex-direction: row;
            background-color: #333333ce;
            min-height: 11vh;
            width: 100%;
            position: absolute;
            z-index: 2;
        }

        .titre{
            width: 25vw;
            font-size: 50px;
            font-family: Cicle_Gordita;
            color:white;
            margin: auto;
            padding-left: 10px;
        }

        .trait{
            width: 3px;
            background-color:#fbd393 ;
        }

        .barreDeliens{
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            min-height: 11vh;
            width: 75vw;
            position: relative;
            z-index: 2;
        }

        .clicable{
            width: 18vw;
            text-align:center;
            text-decoration: None;
            font-family: Dyno-bold;
            color: white;
            padding-top: 4vh;
            padding-bottom: 0;
            transition: all linear .3s;
        }

        .clicable:hover{
            background-color: black;
        }

        a{
            text-decoration: none;
        }

        .btnLangue{
            width: 7vw;
            text-align: center;
            text-decoration: None;
            background-color: #51555b;
            font-family: Dyno-bold;
            color: white;
            padding-top: 3.5vh;
            padding-bottom: 0;
            transition: all linear .3s;
        }

        .btnLangue:hover{
            background-color: black;
        }

        @font-face{ 
        font-family: "Dyno";
        src: url(../police/Dyno-Regular.ttf)
        }

        @font-face{ 
        font-family: "Dyno-bold";
        src: url(../police/Dyno-Bold.ttf)
        }

        @font-face{ 
        font-family: "Cicle";
        src: url(../police/Cicle\ Semi.ttf)
        }

        @font-face{ 
        font-family: "Cicle_Gordita";
        src: url(../police/Cicle\ Gordita.ttf)
        }

        .headerTel{
            top: 0;
            display: none;
            flex-direction: column;
            background-color: #333333;
            min-height: 10vh;
            width: 100vw;
            position: absolute;
            z-index: 2;
        }

        .partieHaute{
            display: flex;
            flex-direction: row;
            width: 100vw;
        }

        .titreTel{
            width: 75vw;
            font-size: 50px;
            font-family: Cicle_Gordita;
            color:white;
            margin: auto;
            text-align: center;
        }

        .btnLangueTel{
            width: 10vw;
            text-align: center;
            text-decoration: None;
            background-color: #51555b;
            font-family: Dyno-bold;
            color: white;
            padding-top:2vh;
            transition: all linear .3s;
        }

        .btnLangueTel:hover{
            background-color: black;
        }

        .traitTel{
            width: 100vw;
            height: 3px;
            background-color: #fbd393;
        }

        .partieBasse{
            display: flex;
            flex-direction: row;
            width: 100vw;
            height: 5vh;
            justify-content: space-evenly;
        }

        .clicableTel{
            width: 20vw;
            text-align:center;
            text-decoration: None;
            font-family: Dyno-bold;
            color: white;
            padding-top: 1vh;
            padding-bottom: 0;
            font-size: 10px;
            transition: all linear .3s;
        }

        .clicableTel:hover{
            background-color: black;
        }

        @media (max-width:900px){
            .headerPC{
                display: none;
            }

            .headerTel{
                display: flex;
            }
        }
    </style>

</head>
<body>

    <header class="headerTel">
        <div class="partieHaute">
            <a href="index.php" class="titreTel">Champagne</a>
            <a href='fonctionnels/langSwitch.php' class="btnLangueTel" ><?=$option?></div></a>
        </div>
        <div class="traitTel"></div>
        <div class="partieBasse">
            <a class='clicableTel' href="Caves.php"><?= $cave ?></a>
            <a class='clicableTel' href="Coteaux.php"><?= $Coteaux ?></a>
            <a class='clicableTel' href="Maisons.php"><?= $maison ?></a>
            <a class='clicableTel' href="Patrimoine.php"><?= $Patrimoine ?></a>
        </div>
    </header>

    <header class="headerPC">

        <a href="index.php" class="titre">Champagne</a>
        <div class="barreDeliens">
            <div class="trait"></div>
            <a class='clicable' href="Caves.php"><?= $cave ?></a>
            <a class='clicable' href="Coteaux.php"><?= $Coteaux ?></a>
            <a class='clicable' href="Maisons.php"><?= $maison ?></a>
            <a class='clicable' href="Patrimoine.php"><?= $Patrimoine ?></a>
            <a class="btnLangue" href="fonctionnels/langSwitch.php" ><?=$option?></div></a>
        </div>
        
    </header>
</body>
</html>