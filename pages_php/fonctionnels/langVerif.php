<?php
/*
    Ce fichier est sensé être toujour inclu en premiere ligne pour démarer proprement la Session 
    et verifier la langue

    francais = 0
    anglais = 1
    par defaut on remet toujours en francais
*/
session_start();

if(isset($_SESSION["lang"])){
    $langue = $_SESSION["lang"];
    switch($langue){
        case 1:
            $langue = 1;
            break;
        case 0:
            $langue = 0;
            break;
        default:
            $langue = 0;
            break;
    }
    $_SESSION["lang"] = $langue;
}else{
    $langue=0;
    $_SESSION["lang"]=0;
}