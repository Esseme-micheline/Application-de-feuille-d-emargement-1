<?php
    session_start() ;
   if(isset($_POST['bouton-valider'])){
    if(isset($_POST['Nom']) && isset($_POST['idue'])){
      $Nom = $_POST['Nom'];
      $idue = $_POST['idue'];
      $erreur ="" ;
      $nom_serveur = "localhost";
      $utilisateur = "root";
      $mot_de_passe = "";
      $nom_base_donnees="emargement";
      // $sql = "select * from enseignant";
       $con = mysqli_connect($nom_serveur , $utilisateur , $mot_de_passe , $nom_base_donnees);
      // if ($conn -> connect_errno)
      // {
      //    echo "Failed to connect to MySQL: " . $conn -> connect_error;
      //    exit();
      // }

      //   $result = ($conn->query($sql));
      //   $infoue = []; 
  
      //   if ($result->num_rows > 0) 
      //   {
      //       // fetch all data from db into array 
      //       // $infoue = $result->fetch_all(MYSQLI_ASSOC);  
      //       while($infoue = $result->fetch_assoc())
      //       {
      //           echo "Roll No: " .
      //               $infoue["id"]. " - Name: " .
      //               $infoue["Nom"]. " | City: " . 
      //               $infoue["idue"]. "<br>";
      //       }
      //   } else{
      //     echo "the is a problem";
      //   }
        
        // echo $infoue['Nom'];
        




       $req = mysqli_query($con , "SELECT * FROM enseignant WHERE Nom = '$Nom'
        AND idue = '$idue' ");
                    $sql = "SELECT * FROM ue WHERE 
                    idue= '$idue' ";
                    // die($sql);
                    if ($con -> connect_errno)
                    {
                        echo "Failed to connect to MySQL: " . $con -> connect_error;
                        exit();
                    }

                    $result = ($con->query($sql));
                    // var_dump($result);
                    $infoue = []; 
                
                    echo(4);

                    if ($result->num_rows > 0) 
                    {
                        echo(45);
                        // fetch all data from db into array 
                        // $infoue = $result->fetch_all(MYSQLI_ASSOC);  
                        while($infoue = $result->fetch_assoc())
                        {

                               $_SESSION['nomUe'] =$infoue["Nomue"];
                               $_SESSION['idniveau'] =$infoue["idniveau"];
                               $_SESSION['idsemestre'] =$infoue["idsemestre"];

                                $infoue["idue"]. " - Name: " .
                                $infoue["Nomue"]. " | City: " . 
                                $infoue["idniveau"]. " | City: " . 
                                $infoue["idsemestre"]. "<br>";
                            echo "$infoue[idue]";
                        }
                    } else{
                        echo "the is a problem";
                    }
       
    //    echo $infoue['Nomue'];
    }
    else{
       $erreur = "Information incorrect !";
    }


        $num_ligne = mysqli_num_rows($req);
       if($num_ligne > 0){
           $_SESSION['nomEnseignant'] = $Nom;
           $_SESSION['codeUe'] = $idue;
          header("Location:Feuille.php") ;
        //   $_SESSION['Nom'] = $Nom ;
            echo "dine";
        

        
    }  

  }
  //   //declare array to store the data of database
  //   $infoue = []; 
  
  //   if ($result->num_rows > 0) 
  //   {
  //       // fetch all data from db into array 
  //       $infoue = $result->fetch_all(MYSQLI_ASSOC);  
  //   }   
  
  //  }



 


?>


