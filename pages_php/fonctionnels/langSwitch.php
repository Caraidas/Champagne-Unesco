<?php
/*
    francais = 0
    anglais = 1

    Par defaut on remet toujours en francais
*/

session_start();

if(isset($_SESSION["lang"])){

    if($_SESSION["lang"]=0){
        $_SESSION["lang"]=1;
    }else{
        $_SESSION["lang"]=0; 
    }

}else{
    $_SESSION["lang"]=0;
}


header("location:".  $_SERVER['HTTP_REFERER']);// ai pas testé mais askip ca permet un retour en arrière

