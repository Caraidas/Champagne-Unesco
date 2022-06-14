<?php include 'fonctionnels/langVerif.php';?>
<?php include 'contenus/contenuEquipe.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devic-width, initial-scale=1,0">
    <link rel="stylesheet" href="../css/style-equipe.css">
    

<body>
<?php 
include 'header.php';

?>
</head>
  
    <div class="container">
        <div class="row">
          
            <div class="our-team">
              <div class="pic">
                <img src="../image/paul.png" alt="">
              </div>
              <div class="team-content">
                <?= $para1[$langue] ?>
              </div>
              <ul class="social">
                <li>
                  <a href="https://www.instagram.com/paul_stll/"><img src="../image/instagram.png"></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/paul-lcs/"><img src="../image/linkedin.png"></a>
                </li>
                <li>
                  <a href="https://github.com/Caraidas" ><img src="../image/github.png"></a>
                </li>
              </ul>
            
          </div>
          
          <div class="col-md-3 col-sm-6">
            <div class="our-team">
              <div class="pic">
                <img src="../image/joshua.jpg" alt="">
              </div>
              <div class="team-content">
              <?= $para2[$langue] ?>
              </div>
              <ul class="social">
                <li>
                  <a href="https://www.linkedin.com/in/joshua-lemoine/"><img src="../image/linkedin.png"></a>
                </li>
                <li>
                  <a href="https://github.com/LemoineJoshua" ><img src="../image/github.png"></a>
                </li>
              </ul>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6">
            <div class="our-team">
              <div class="pic">
                <img src="../image/laura.jpg" alt="">
              </div>
              <div class="team-content">
                <?= $para3[$langue] ?>
              </div>
              <ul class="social">
                <li>
                  <a href="https://instagram.com/laurachouww?utm_medium=copy_link"><img src="../image/instagram.png"></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/laura-leroy-a066b522a/"><img src="../image/linkedin.png"></a>
                </li>
                <li>
                  <a href="https://github.com/Harulla" ><img src="../image/github.png"></a>
                </li>
              </ul>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6">
            <div class="our-team">
              <div class="pic">
                <img src="../image/elody.jpg" alt="elody">
              </div>
              <div class="team-content">
              <?= $para4[$langue] ?>
              </div>
              <ul class="social">
                <li>
                  <a href=""><img src="../image/instagram.png"></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/elody-octavie-9290861bb/"><img src="../image/linkedin.png"></a>
                </li>
                <li>
                  <a href="https://github.com/azahar03" ><img src="../image/github.png"></a>
                </li>
              </ul>
              
            </div>
            <?php include 'footer.php'; ?>
          </div>
          
        </div>
      </div>
    
</body>
</html>
