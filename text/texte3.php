<?php
if(isset($_GET['val2'])){
    $nath=$_GET['val2'];
    temperature($nath);    
         
 }
 function temperature($newValu){
     $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
     $sql="UPDATE far SET valeur = :valeur";
     $st=$pdo->prepare($sql);
     $st->bindParam(':valeur',$newValu,PDO::PARAM_STR);
     $st->execute();
   }
 