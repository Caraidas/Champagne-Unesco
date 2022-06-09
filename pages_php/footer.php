<?php include 'fonctionnels/langVerif.php';?>

<style>

body{
    margin:0;
    padding:0;
}

.iconimg{
    background: rgba(94, 88, 82, 0.72);
    width: 55px;
    padding-left: 5px;
    padding-top: 5px;
    margin-bottom: 5px;
    height: 55px;
    transition: transform .4s;
}


.iconimg img {
    opacity:1;
    width: 45px;
    height: 45px;
}
.iconimg:hover{
    background: rgba(126, 121, 117, 1);
    -ms-transform: scale(1.3); 
    -webkit-transform: scale(1.3); 
    transform: scale(1.3);
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

footer{
    position: relative;
    width: 100%;
    background: #505050;
    min-height:100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    top:400px;
    font-family: Dyno;
}

footer p {
    font-family: Dyno;
    font-size: 20px;
    display: flex;
    padding-left: 15px;
    color:white;
}

footer ul.social_icon{
    padding-left: 25px;
}



footer .social_icon, footer .menu, footer .partenaires{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10px 0;
    flex-wrap: wrap;
}

footer .social_icon li, footer .menu li{
    list-style: none;
}

footer .social_icon li a {
    font-size: 2em;
    color: white;
    margin: 0 10px;
    display: inline-block;
    transition: 0.5s;
}


footer .partenaires  img{
    font-size: 2em;
    color: white;
    margin: 0 10px;
    display: inline-block;
    width: 12%;
    height: auto;
    
}

div.partenaires{
    align-items: center;
    width:100%;
}

footer .partenaires .iut {
    width: 6%;
}

footer .menu li a {
    font-size: 1.2em;
    color: white;
    margin: 0 10px;
    display: inline-block;
    text-decoration: none;
    opacity: 0.75;
}
footer .menu li a:hover{
    opacity:1;
}

footer .wave {
    position:absolute;
    top: -100px;
    Left:0;
    width: 100%;
    height: 100px;
    background: url(../image/wave.png);
    background-size: 1000px 100px;
} 

footer .wave#wave1 {
    z-index: 0;
    opacity: 1;
    bottom: 0;
    animation: animateWave 7s linear infinite;
}

@keyframes animateWave{
    0%
    {
        background-position-x: 1000px;
    }
    100%
    {
        background-position-x:0px;
    }
}

.sideicons{
    
    width: 80px;
    height: 220px;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    position: fixed;
    top:32%;
    left: 0.5%;
    z-index: 1000;
}

    


.container-gotop {
    
    width: 100%;
    display: flex;
    flex-direction: row-reverse;
    
    }
    
.gotop {
    position: fixed;
    bottom: 20px;      
    margin-right:10px; 
    z-index: 1000;
}

.imggotop{
    padding-right: 20px;
    vertical-align: middle;
    width:120%;
    height: auto;
}

@media (max-width:650px){
    .gotop {
        display: none;
    }
}

</style>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<div class= "sideicons ">
    <div class="iconimg"><a href="hotel.php"><img src="../image/bed.png"></a></div>
    <div class="iconimg"><a href="restaurant.php"><img  src="../image/restaurant.png"></a></div>
</div>

<div class="container-gotop">
        <a href="#" class="gotop"><img class = "imggotop" src="../image/to_top.png"></a>
</div>

<footer id = "footer">
        
        
    <div class="wave" id="wave1"></div>

    <ul class="social_icon">
        <ul class="social_icon">
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="https://instagram.com/champunesco?utm_medium=copy_link"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
        </ul>
    </ul>
    <ul class="menu">
        <?php if ($langue == 0){
            echo '
            <li><a href=\'index.php\'>Accueil</a></li>
            <li><a href=\'mentionLegale.php\'>Mention Légale</a></li>
            <li><a href=\'equipe.php\'>Equipe</a></li>
            ';        
        }else{
            echo '
            <li><a href=\'index.php\'>Home</a></li>
            <li><a href=\'mentionLegale.php\'>Legacy</a></li>
            <li><a href=\'equipe.php\'>Team</a></li>
            ';
        }
        ?>
    </ul>
    <p>Partenaires</p>
    <div class="partenaires">
        <img class="mcn" src="../image/logoMCN.png">
        <img class="iut" src="../image/logouge.png">
    </div>

</footer>