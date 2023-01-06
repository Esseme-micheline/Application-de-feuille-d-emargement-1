<?php
    session_start() ;
     if(isset($_POST['sign'])){
      if(isset($_POST['idsemestre']) && isset($_POST['idniveau']) && isset($_POST['idue'])
      && isset($_POST['enseignant']) && isset($_POST['idsceance']) && isset($_POST['date'])
      && isset($_POST['HeureDebut']) && isset($_POST['HeureFin']) && isset($_POST['HoraireTotal'])
      && isset($_POST['FeedBack']) && isset($_POST['idpassword']) && isset($_POST['iddelegue'])){
          echo"2";
            $idsemestre = $_POST['idsemestre'];
            $idniveau= $_POST['idniveau'];
            $idue = $_POST['idue'];
            $enseignant = $_POST['enseignant'];
            $idsceance = $_POST['idsceance'];
            $date = $_POST['date'];
            $HeureDebut = $_POST['HeureDebut'];
            $HeureFin = $_POST['HeureFin'];
            $HoraireTotal = $_POST['HoraireTotal'];
            $FeedBack = $_POST['FeedBack'];
            $idpassword = $_POST['idpassword'];
            $iddelegue = $_POST['iddelegue'];
            // $iddelegue = $_POST['iddelegue'];
            $erreur ="" ;
            $nom_serveur = "localhost";
            $utilisateur = "root";
            $mot_de_passe = "";
            $nom_base_donnees="emargement";
            $con = new mysqli($nom_serveur , $utilisateur , $mot_de_passe , $nom_base_donnees);
            
            // Check connection
            if ($con->connect_error) {
                echo"3";
                die("Connection failed: "
                . $con->connect_error);
            }
            $sqlquery = "INSERT INTO feuille (`idsemestre`,`idniveau`,`idue`,`enseignant`,`idsceance`,`date`,`HeureDebut`
            ,`HeureFin`,`HoraireTotal`,`FeedBack`,`idpassword`,`iddelegue`) VALUES
            ( '$idsemestre','$idniveau','$idue','$enseignant','$idsceance','$date','$HeureDebut'
            ,'$HeureFin','$HoraireTotal','$FeedBack',MD5('$idpassword'),MD5('$iddelegue'))";
           if ($con->query($sqlquery)) {
              header("Location:acceuil.html") ;
             
            } else {
                echo "Error: " . $sqlquery . "<br>" . $con->error;
            }
        }
        
    }

?>
