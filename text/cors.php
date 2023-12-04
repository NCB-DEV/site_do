<?php
//données à envoyer
if(isset($_GET['envoi'])){
    if($_GET['envoi']=="alumeSalon"){
        $text="allumeSalon";
        $url="http://192.168.180.10";
        $result=file_get_contents("$url/$text");
        echo "envoyé";
    }
    if($_GET['envoi']=="eteindresalon"){
        $text="eteintSalon";
        $url="http://192.168.180.10";
        $result=file_get_contents("$url/$text");
        echo "envoyé";
    }
    if($_GET["envoi"]=="eteindrechambre1"){
        $text="eteintChambre1";
        $url="http://192.168.180.10";
        $result=file_get_contents("$url/$text");
        echo "envoyé";
    }
    if($_GET["envoi"]=="alumechambre1"){
        $text="allumeChambre1";
        $url="http://192.168.180.10";
        $result=file_get_contents("$url/$text");
        echo "envoyé"; 
    }
    if($_GET["envoi"]=="eteindrechambre2"){
        $text="eteintChambre2";
        $url="http://192.168.180.10";
        $result=file_get_contents("$url/$text");
        echo "envoyé";
    }
    if($_GET["envoi"]=="allumechambre2"){
        $text="allumeChambre2";
        $url="http://192.168.180.10";
        $result=file_get_contents("$url/$text");
        echo "envoyé";
    }
    if($_GET["envoi"]=="eteindrechambre3"){
        $text="eteintChambre3";
        $url="http://192.168.180.10";
        $result=file_get_contents("$url/$text");
        echo "envoyé";
    }
    if($_GET["envoi"]=="allumechambre3"){
        $text="allumeChambre3";
        $url="http://192.168.180.10";
        $result=file_get_contents("$url/$text");
        echo "envoyé";
    }
    if($_GET["envoi"]=="eteindrechambre4"){
        $text="eteintChambre4";
        $url="http://192.168.180.10";
        $result=file_get_contents("$url/$text");
        echo "envoyé";
    }
    if($_GET["envoi"]=="allumechambre4"){
        $text="allumeChambre4";
        $url="http://192.168.180.10";
        $result=file_get_contents("$url/$text");
        echo "envoyé";
    }
    if($_GET["envoi"]=="eteindrecouloir"){
        $text="eteintCouloir";
        $url="http://192.168.180.10";
        $result=file_get_contents("$url/$text");
        echo "envoyé";
    }
    if($_GET["envoi"]=="allumeCouloir"){
        $text="allumeCouloir";
        $url="http://192.168.180.10";
        $result=file_get_contents("$url/$text");
        echo "envoyé";
    }
    if($_GET["envoi"]=="eteindredehor"){
        $text="eteintdehors";
        $url="http://192.168.180.10";
        $result=file_get_contents("$url/$text");
        echo "envoyé"; 
    }
    if($_GET["envoi"]=="allumedehor"){
        $text="allumedehors";
        $url="http://192.168.180.10";
        $result=file_get_contents("$url/$text");
        echo "envoyé"; 
    }
    if($_GET["envoi"]=="allumetout"){
        $text="allumeTout";
        $url="http://192.168.180.10";
        $result=file_get_contents("$url/$text");
        echo "envoyé";
    }
    if($_GET["envoi"]=="eteindretout"){
        $text="eteindreTout";
        $url="http://192.168.180.10";
        $result=file_get_contents("$url/$text");
        echo "envoyé";
    }
}
