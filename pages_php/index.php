<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devic-width, initial-scale=1,0">
    
    <link rel="stylesheet" href="../css/style-index.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <title>Champagne</title>
</head>

<body>

    <?php include 'header.php';?>

    <div class="contenaircorp">

        <div class="background">
            <img src="../image/Photo by redcharlie on Unsplash.jpg" class="first">
            <div class="grand_titre">Coteaux Maisons  <br> Caves de Champagne</div>

            
            <a href="#theme02" class="scroll-down-link scroll-down-arrow" data-iconfont="ETmodules" data-icon></a>
            
        </div>

        <div id = "theme02" class="background">
          <div class="textAndMap">
            <div class="text special">
              <h2>Carte de Champagne</h2>
              <p>
                Voici une petite carte pour vous aider à vous reperer dans cette magnifique région! <br>
                Vous y trouverez plein d'information comme: <br>
                &nbsp &nbsp &nbsp -les villes, <br> 
                &nbsp &nbsp &nbsp -les caves,<br> 
                &nbsp &nbsp &nbsp -et tout les autres points d'interets !
              </p>
            </div>
            <iframe class="map" src="https://www.google.com/maps/d/embed?mid=1QM-A-cjzMFIajLKO4sJcDIdxzQ31kSY&ehbc=2E312F"></iframe>
          </div>
          <a href="#theme03" class="scroll-down-link scroll-down-arrow" data-iconfont="ETmodules" data-icon></a>
        </div> 

        <div id = "theme03" class="background">
            <img src="../image/coteauxImg.jpg" class="noFirst">
            <div class="text droite">
                <h2>Coteaux de Champagne</h2>
                <p>Découvrez à travers les splendides côteaux champenois la clé de la production de ce vin d'excellence</p>
                <a href="./Coteaux.php"><button class="btn enSavoirPlus">En savoir plus</button></a>
            </div>
            <a href="#theme04" class="scroll-down-link scroll-down-arrow" data-iconfont="ETmodules" data-icon></a>
            
        </div>

        <div id = "theme04" class="background">
            <img src="../image/robert-linder-ti9_YXaKFcI-unsplash.jpg" class="noFirst">
            <div class="text gauche">
                <h2>Caves de Champagne</h2>
                <p>Découvrez l'histoire de ces caves creusées dans la craie. Que se soit la cave de Mumm ou celle de Veuve Clicquot, chaque cave a ses secrets.  </p>
                <a href="./Caves.php"><button class="btn enSavoirPlus">En savoir plus</button></a>
            </div>
            <a href="#theme05" class="scroll-down-link scroll-down-arrow" data-iconfont="ETmodules" data-icon></a>
        </div>

        <div id = "theme05" class="background">
            <img src="../image/vrp.jpg" class="noFirst"> <!--https://www.flickr.com/photos/morio60/24220005104/in/photolist-CUeRGU-aqBT5N-Dqxx9s-CUeQa5-2hEDxbA-2jutPvD-2jupFS6-UxipWn-2jupFRu-DFNzA6-2cEJza5-8cqonh-2jYGwCf-TxgvaT-DWt9q8-pe6HB4-pmodAj-vp7Mku-qGUPMr-2jYCPxH-DFkeLS-DPqMW9-aqBUcE-bNSakv-bNSapK-bNSada-bNSavT-aH4D6v-bzXvYW-eKvnbw-psQimi-eKiKgH-pbhJ4v-25RGzM1-bS9DST-pcUway-bLvgKx-bxAzVj-bxAzGG-pcUwaJ-p8qL9C-9fvynT-p8qLf9-gB2pgw-2jupFwb-2jutNwp-pdKidf-pdmrgn-dfxcCM-bS9DNT-->
            <div class="text droite">
                <h2>Maisons de Champagne</h2>
                <p>Découvrez les grandes Maisons de Champagne à l’origine de la notoriété et du prestige des vins de Champagne dans le monde. </p>
                <a href="./Maisons.php"><button class="btn enSavoirPlus">En savoir plus</button></a>
            </div>
            <a href="#articles" class="scroll-down-link scroll-down-arrow" data-iconfont="ETmodules" data-icon></a>
        </div>



        
        

    </div>

    <div id = "articles" class="card-container">
        <h1>Autres articles</h1>
        <ul class="cards"> <!--sous forme de liste de cartes-->
          <li class="cards_item"><!--élément de la liste-->
            <div class="card">
              <div class="card_image"><img src="../image/artisanatfleur.jpg"></div>
              <div class="card_content">
                <h2 class="card_title">Artisanat</h2>
                <p class="card_text">La région de champagne regorge de savoir-faire. Découvrez les artisant locaux !</p>
                <a href="./artisanat.php"><button class="btn">En savoir plus</button></a>
              </div>
            </div>
          </li>
          <li class="cards_item"><!--élément de la liste-->
            <div class="card">
              <div class="card_image"><img src="../image/dégustation.jpg"></div>
              <div class="card_content">
                <h2 class="card_title">Comment déguster un vin?</h2>
                <p class="card_text">Bien savoir déguster son champagne est essentiel afin d'obtenir la meilleure expérience possible. </p>
                <a href="./Dégustation.php"><button class="btn">En savoir plus</button></a>
              </div>
            </div>
          </li>
          <li class="cards_item"><!--élément de la liste-->
            <div class="card">
              <div class="card_image"><img src="../image/dompérignon.jpg"></div> <!--https://www.flickr.com/photos/clubvino/3513713364/   droit d'auteur-->
              <div class="card_content">
                <h2 class="card_title">Histoire de la création du champagne</h2>
                <p class="card_text">De Dom Pérignon à aujourd'hui, apprenez toute l'histoire de la fabrication de ce breuvage exquis.</p>
                <a href="./HistoireCreationChampagne.php"><button class="btn">En savoir plus</button></a>
              </div>
            </div>
          </li>
          <li class="cards_item"><!--élément de la liste-->
            <div class="card">
              <div class="card_image"><img src="../image/reimsCathédrale.jpg"></div>
              <div class="card_content">
                <h2 class="card_title">Chatédrale de Reims</h2>
                <p class="card_text">Découvrez l'histoire d'un des monuments historiques de la ville de Reims!</p>
                <a href="./CathédraleReims.php"><button class="btn">En savoir plus</button></a>
              </div>
            </div>
          </li>
          <li class="cards_item"><!--élément de la liste-->
            <div class="card">
              <div class="card_image"><img src="../image/gastronomie.jpg"></div>
              <div class="card_content">
                <h2 class="card_title">Gastronomie en Champagne-Ardenne</h2>
                <p class="card_text">La Champagne-Ardennes possède une gastronomie locale riche et incroyable ! </p>
                <a href="./Gastronomie.php"><button class="btn">En savoir plus</button></a>
              </div>
            </div>
          </li>
          <li class="cards_item"><!--élément de la liste-->
            <div class="card">
              <div class="card_image"><img src="../image/fortChabrol.jpg"></div>
              <div class="card_content">
                <h2 class="card_title">Fort Chabrol</h2>
                <p class="card_text">Découvrez ce bâtiment remplit d'histoire inscrit dans la liste du patrimoine mondial de l'UNESCO !</p>
                <a href="./FortChabrol.php"><button class="btn">En savoir plus</button></a>
              </div>
            </div>
          </li>
        </ul>
      </div>
       
    

    <?php include 'footer.php';?>
</body>

</html>