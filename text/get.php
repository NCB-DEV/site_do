<?php
    if(isset($_GET['mode'])){
        if($_GET['mode']=="salon"){
            $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
            $sql="SELECT * FROM salon";
             $req=$pdo->query($sql);
            
            while($row = $req->fetch(PDO::FETCH_ASSOC)){
                $resu= $row["valeur"];
                echo $resu;
            }
        }
        if($_GET["mode"]=='tempC'){
            $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
            $sql="SELECT * FROM cel";
             $req=$pdo->query($sql);
        
           while($row = $req->fetch(PDO::FETCH_ASSOC)){
            
            echo $row["valeur"];
        }
        }
        if($_GET["mode"]=="tempT"){
            $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
            $sql="SELECT * FROM far";
            $req=$pdo->query($sql);
            while($row = $req->fetch(PDO::FETCH_ASSOC)){
            echo $row["valeur"];
         }
        }
        if($_GET["mode"]=="couloir"){
            $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
            $sql="SELECT * FROM couloir";
         $req=$pdo->query($sql);
        
        while($row = $req->fetch(PDO::FETCH_ASSOC)){
            
            $resu= $row["valeur"];
            echo $resu;
        }
        }
        if($_GET["mode"]=="chambre1"){
            $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
            $sql="SELECT * FROM chambre1";
         $req=$pdo->query($sql);
        while($row = $req->fetch(PDO::FETCH_ASSOC)){
            $resu= $row["valeur"];
            echo $resu;
        }
        }
        
        if($_GET["mode"]=="chambre2"){
            $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
            $sql="SELECT * FROM chambre2";
            $req=$pdo->query($sql);
        
        while($row = $req->fetch(PDO::FETCH_ASSOC)){
            
            $resu= $row["valeur"];
            echo $resu;
        }

    }
    if($_GET['mode']=="chambre3"){
        $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
        $sql="SELECT * FROM chambre3";
        $req=$pdo->query($sql);
    
       while($row = $req->fetch(PDO::FETCH_ASSOC)){
        
        $resu= $row["valeur"];
        echo $resu;
    }
    }
    if($_GET['mode']=="chambre4"){
        $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
        $sql="SELECT * FROM chambre4";
        $req=$pdo->query($sql);
    
      while($row = $req->fetch(PDO::FETCH_ASSOC)){
        $resu= $row["valeur"];
        echo $resu;
      }
    }
    if($_GET['mode']=="dehors"){
        $pdo = new PDO("mysql:host=localhost;dbname=texte","root","");
        $sql="SELECT * FROM dehors";
        $req=$pdo->query($sql);
    
    while($row = $req->fetch(PDO::FETCH_ASSOC)){
        
        $resu= $row["valeur"];
        echo $resu;
    }
    }
    
}
    
?>