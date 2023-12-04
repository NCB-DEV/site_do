<?php
if(isset($_GET['page'])){
    $nathan=$_GET['page'];
    if($nathan=="allumeSalon"){
        UpdateSalon("1");
    }
    if($nathan=="eteintSalon"){
        UpdateSalon("0");
    }
    if($nathan=="eteindreTout"){
        UpdateSalon("0");
        UpdateCh1("0");
        UpdateCh2("0");
        UpdateCh3("0");
        UpdateCh4("0");
        Updatedehors("0");
        UpdateCoul("0");
    }
    if($nathan=="allumeTout"){
        UpdateSalon("1");
        UpdateCh1("1");
        UpdateCh2("1");
        UpdateCh3("1");
        UpdateCh4("1");
        Updatedehors("1");
        UpdateCoul("1");
    }
    if($nathan=="eteintChambre1"){
        UpdateCh1("0");
    }
    if($nathan=="allumeChambre1"){
        UpdateCh1("1");
    }
    if($nathan=="eteintChambre2"){
        UpdateCh2("0");
    }
    if($nathan=="allumeChambre2"){
        UpdateCh2("1");
    }
    if($nathan=="eteintChambre3"){
        UpdateCh3("0");
    }
    if($nathan=="allumeChambre3"){
        UpdateCh3("1");
    }
    if($nathan=="eteintChambre4"){
        UpdateCh4("0");
    }
    if($nathan=="allumeChambre4"){
        UpdateCh4("1");
    }
    if($nathan=="eteintdehors"){
        Updatedehors("0");
    }
    if($nathan=="allumedehors"){
        Updatedehors("1");
    }
    if($nathan=="allumeCouloir"){
        UpdateCoul("1");
    }
    if($nathan=="eteintCouloir"){
        UpdateCoul("0");
    }
}
function UpdateFene($newValu){
    $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
    $sql="UPDATE fenetre SET valeur = :valeur";
    $st=$pdo->prepare($sql);
    $st->bindParam(':valeur',$newValu,PDO::PARAM_STR);
    $st->execute();
  }
    function UpdateCoul($newValu){
    $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
    $sql="UPDATE couloir SET valeur = :valeur";
    $st=$pdo->prepare($sql);
    $st->bindParam(':valeur',$newValu,PDO::PARAM_STR);
    $st->execute();
  }
function Updatedehors($newValu){
    $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
    $sql="UPDATE dehors SET valeur = :valeur";
    $st=$pdo->prepare($sql);
    $st->bindParam(':valeur',$newValu,PDO::PARAM_STR);
    $st->execute();
  }
  function prese($newValu){
    $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
    $sql="UPDATE presence SET valeure = :valeure";
    $st=$pdo->prepare($sql);
    $st->bindParam(':valeure',$newValu,PDO::PARAM_STR);
    $st->execute();
  }
function UpdateCh4($newValu){
    $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
    $sql="UPDATE chambre4 SET valeur = :valeur";
    $st=$pdo->prepare($sql);
    $st->bindParam(':valeur',$newValu,PDO::PARAM_STR);
    $st->execute();
  }
function UpdateCh3($newValu){
    $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
    $sql="UPDATE chambre3 SET valeur = :valeur";
    $st=$pdo->prepare($sql);
    $st->bindParam(':valeur',$newValu,PDO::PARAM_STR);
    $st->execute();
  }
function UpdateCh2($newValu){
    $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
    $sql="UPDATE chambre2 SET valeur = :valeur";
    $st=$pdo->prepare($sql);
    $st->bindParam(':valeur',$newValu,PDO::PARAM_STR);
    $st->execute();
  }
function UpdateSalon($newValu){
    $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
    $sql="UPDATE salon SET valeur = :valeur";
    $st=$pdo->prepare($sql);
    $st->bindParam(':valeur',$newValu,PDO::PARAM_STR);
    $st->execute();
  }

  function UpdateCh1($newValu){
    $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
    $sql="UPDATE chambre1 SET valeur = :valeur";
    $st=$pdo->prepare($sql);
    $st->bindParam(':valeur',$newValu,PDO::PARAM_STR);
    $st->execute();
  } 
function UpdateCha1($newValu){
    $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
    $sql="UPDATE texte SET valeur = :valeur";
    $st=$pdo->prepare($sql);
    $st->bindParam(':valeur',$newValu,PDO::PARAM_STR);
    $st->execute();
  }

 
