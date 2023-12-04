<?php
if(isset($_GET['val1'])){
    $nath=$_GET['val1'];
    temperatureC($nath);    
         
 }
 function temperatureC($newValu){
     $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
     $sql="UPDATE cel SET valeur = :valeur";
     $st=$pdo->prepare($sql);
     $st->bindParam(':valeur',$newValu,PDO::PARAM_STR);
     $st->execute();
   }
 