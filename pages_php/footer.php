<style>

body{
    margin:0;
    padding:0;
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
</style>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


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
        <li><a href='#'>Home</a></li>
        <li><a href='#'>About</a></li>
        <li><a href='../pages_html/equipe.html'>Team</a></li>
        <li><a href='#'>Contact</a></li>
    </ul>
    <p>Partenaires</p>
    <div class="partenaires">
        <img class="mcn" src="../image/logoMCN.png">
        <img class="iut" src="../image/logouge.png">
    </div>

</footer>