<?php
    session_start();

    ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .head{
        display: flex;
        justify-content:space-around ;
        text-align: center;
      }
      .Depart2{
        margin-left: 100px;
      }
      .Depart3{
        margin-left: 100px;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <!-- <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a> -->
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="acceuilchef.html">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">
              <span data-feather="file"></span>
              About
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="acceuilchef.html">
              <span data-feather="file"></span>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ajoutue.php">
              <span data-feather="shopping-cart"></span>
              UE
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ajout.php">
              <span data-feather="users"></span>
              Enseignant
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inde.php">
              <span data-feather="bar-chart-2"></span>
              Statistiques
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ajoutSemestre.php">
              <span data-feather="layers"></span>
              Semestre
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          
          <li class="nav-item">
            <a class="nav-link" href="ajoutniveau.php">
              <span data-feather="file-text"></span>
              Niveau
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ajoutsceance.php">
              <span data-feather="file-text"></span>
              Sceance
            </a>
          </li>
          <!-- <li class="nav-item">
          <a class="nav-link" href="http://localhost:81/phpmyadmin/index.php?route=/database/structure&db=emargement">
              <span data-feather="file-text"></span>
              Database
            </a>
          </li>  -->
          <li class="nav-item">
          <a class="nav-link" href="ajoutD.php">
              <span data-feather="file-text"></span>
              Delegue
            </a>
          </li> 
          <li class="nav-item">
          <a class="nav-link" href="Fiche.html">
              <span data-feather="file-text"></span>
              Fiche
            </a>
          </li> 
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
               <div class="head">
                  <div  class="Depart1">
                     <p>REPUBLIQUE DU CAMEROUN</p>
                      <p>Paix-Travail-Patrie</p>
                      <p>UNIVERSITE DE YAOUNDE I</p>
                      <p>Faculte des Science</p>
                      <p>Departement d'informatique</p>
                      <p>B.P.812 Yaounde</p>
                    
                  </div>
                  <div class="Depart2">
                     <img src="icone universite.jpg" alt="">
                  </div>
                  <div  class="Depart3">
                     <p>REPUBLIC OF CAMEROUN </p>
                      <p>Peace-Work-Fatherland</p>
                      <p>UNIVERSITY OF YAOUNDE I</p>
                      <p>Faculty Of Sciences</p>
                      <p>Department of Computer Sciences</p>
                      <p>P.O.Box 812 Yaounde</p>
                  </div>
                </div>
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <!-- <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div> -->
          <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button> -->
        </div>
      </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      <h2>Programme des cours de ICT4D</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">NIVEAU</th>
              <th scope="col">SEMESTRE</th>
              <th scope="col">CODE</th>
              <th scope="col">INTITULER</th>
              <th scope="col">ENSEIGNANT</th>
              <th scope="col">HEURE</th>
            </tr>
          </thead>
          <tbody>
          <!-- <tr>
              <td>L1</td>
              <td>S1</td>
              <td>ICT101</td>
              <td>Introduction to Business Information Systems</td>
              <td>Nzekon Armel</td>
              <td>Lundi : 12h00 - 14h00  <br>
                    Mardi : 9h45 - 11h45 </td>
            </tr>
            <tr>
            <td>L1</td>
              <td>S1</td>
              <td>ICT103</td>
              <td>Introduction to Programming</td>
              <td>Messi</td>
              <td>  Mercredi : 7h30 - 9h30 <br>
                    Vendredi : 9h45 - 11h45 
              </td>
            </tr>
            <tr>
              <td>L1</td>
              <td>S1</td>
              <td>ICT105</td>
              <td>Introduction to Algorithms</td>
              <td>Tchio Corneille</td>
              <td>  Vendredi : 12h00 - 14h00  <br>
              </td>
            </tr>
            <tr>
              <td>L1</td>
              <td>S1</td>
              <td>ICT107</td>
              <td>Mathematiques for Computer Science I</td>
              <td>Nguefack Bertrand</td>
              <td>Mardi : 12h00 - 14h00  <br>
              Lundi : 9h45 - 11h45</td>
            </tr>
            <tr>
              <td>L1</td>
              <td>S1</td>
              <td>ICT109</td>
              <td>Discrete Mathematics I</td>
              <td>Mbang Joseph</td>
             <td> Mercredi : 12h00 - 14h00  <br>
              Mardi : 9h45 - 11h45</td>
            </tr>
            <tr>
              <td>L1</td>
              <td>S1</td>
              <td>ICT111</td>
              <td>Data Coding</td>
              <td>Tamo</td>
              <td> Mercredi : 7h00 - 9h00  <br>
              </td>
            </tr>
            <tr>
              <td>L1</td>
              <td>S2</td>
              <td>ENG104</td>
              <td>English I</td>
              <td>Musima</td>
              <td>0</td>
            </tr>
            
            <tr>
              <td>L1</td>
              <td>S2</td>
              <td>FRAN104</td>
              <td>Francais I</td>
              <td>Biyong</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L1</td>
              <td>S2</td>
              <td>ICT102</td>
              <td>Object-Oriented Programming</td>
              <td>Nkouandou</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L1</td>
              <td>S2</td>
              <td>ICT104</td>
              <td>Computer Sciences</td>
              <td>Kutche Juslin </td>
              <td>0</td>
            </tr>
            <tr>
              <td>L1</td>
              <td>S2</td>
              <td>ICT106</td>
              <td>Data Structure and Patterns I</td>
              <td>Messi</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L1</td>
              <td>S2</td>
              <td>ICT108</td>
              <td>Creating Web Application</td>
              <td>Catcha</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L1</td>
              <td>S2</td>
              <td>ICT110</td>
              <td>Database Analysis and Design</td>
              <td>Abessolo</td>
              <td>0</td>
            </tr>
            <tr>
              <td>#</td>
              <td>#</td>
              <td>#</td>
              <td>#</td>
              <td>#</td>
            </tr>
            <tr>
              <td>L2</td>
              <td>S1</td>
              <td>ENG203</td>
              <td>English II</td>
              <td>Musima</td>
              <td>Lundi : 7h30 - 9h30 <br>
                Mercredi : 12h00 - 14h00
              </td>
            </tr>
            <tr>
              <td>L2</td>
              <td>S1</td>
              <td>FRAN203</td>
              <td>Francais II</td>
              <td>Ndongo</td>
              <td>Lundi : 14h15 - 16h15 <br>
                Mardi : 12h00 - 14h00
              </td>
            </tr>
            <tr>
              <td>L2</td>
              <td>S1</td>
              <td>ICT201</td>
              <td>Introduction au Genie Logiciel</td>
              <td>Moyou</td>
              <td>  Mercredi : 7h30 - 9h30 <br>
                    Vendredi : 9h45 - 11h45 
              </td>
            </tr>
            <tr>
              <td>L2</td>
              <td>S1</td>
              <td>ICT203</td>
              <td>Database System</td>
              <td>Sevany</td>
              <td>  Mercredi : 9h45 - 11h45  <br>
                    Jeudi : 7h30 - 9h30 
              </td>
            </tr>
            <tr>
              <td>L2</td>
              <td>S1</td>
              <td>ICT205</td>
              <td>Introduction to Programming .Net</td>
              <td>Catcha</td>
              <td>  Vendredi : 12h00 - 14h00  <br>
              </td>
            </tr>
            <tr>
              <td>L2</td>
              <td>S1</td>
              <td>ICT207</td>
              <td>Software Developpment in Java I</td>
              <td>Monthe</td>
              <td>  Mardi : 14h00 - 16h15  <br>
                    Vendredi : 7h30 - 9h30 
              </td>
            </tr>
            <tr>
              <td>L2</td>
              <td>S1</td>
              <td>ICT213</td>
              <td>Introduction to Computer Security and Risk Management</td>
              <td>Nkondock</td>
              <td> Lundi : 12h00 - 14h00  <br>
                    Mardi : 9h45 - 11h45 
              </td>
            </tr>
            <tr>
              <td>L2</td>
              <td>S1</td>
              <td>ICT215</td>
              <td>Introduction to Computer Network</td>
              <td>Olivier Videme</td>
            </tr>
            <tr>
              <td>L2</td>
              <td>S1</td>
              <td>ICT217</td>
              <td>Software Engineering</td>
              <td>Nkouandou</td>
              <td>  Lundi : 9h45 - 11h45  <br>
                    Vendredi : 14h00 - 16h15
              </td>
            </tr>
            <tr>
              <td>L2</td>
              <td>S2</td>
              <td>ICT202</td>
              <td>Software Developpment for Mobile Devices</td>
              <td>Fomekong</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L2</td>
              <td>S2</td>
              <td>ICT204</td>
              <td>Introduction to Operating System</td>
              <td>Messi</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L2</td>
              <td>S2</td>
              <td>ICT206</td>
              <td>Introduction to Computer Network</td>
              <td>Kutche Juslin</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L2</td>
              <td>S2</td>
              <td>ICT208</td>
              <td>Computer Architecture</td>
              <td>Tchio Corneille</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L2</td>
              <td>S2</td>
              <td>ICT210</td>
              <td>Database Programming</td>
              <td>Tapamo</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L2</td>
              <td>S2</td>
              <td>ICT214</td>
              <td>Introduction to Cryptography</td>
              <td>Moyou</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L2</td>
              <td>S2</td>
              <td>ICT216</td>
              <td>Network Administrator</td>
              <td>Tamo</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L2</td>
              <td>S2</td>
              <td>ICT218</td>
              <td>Advanced Mobile Application Developpment</td>
              <td>Nkouandou</td>
              <td>0</td>
            </tr>
            <tr>
              <td>#</td>
              <td>#</td>
              <td>#</td>
              <td>#</td>
              <td>#</td>
            </tr>
            <tr>
              <td>L3</td>
              <td>S1</td>
              <td>ENG303</td>
              <td>English III</td>
              <td>Kehbuma</td>
            </tr>
            <tr>
              <td>L3</td>
              <td>S1</td>
              <td>FRAN303</td>
              <td>Francais III</td>
              <td>Biyong</td>
            </tr>
            <tr>
              <td>L3</td>
              <td>S1</td>
              <td>ICT301</td>
              <td>Software Architecture and Design</td>
              <td>Monthe</td>
            </tr>
            <tr>
              <td>L3</td>
              <td>S1</td>
              <td>ICT303</td>
              <td>Data Communication and Security</td>
              <td>Aminou</td>
            </tr>
            <tr>
              <td>L3</td>
              <td>S1</td>
              <td>ICT305</td>
              <td>Wed Application Development</td>
              <td>Njine</td>
            </tr>
            <tr>
              <td>L3</td>
              <td>S1</td>
              <td>ICT307</td>
              <td>Computer System Engineering</td>
              <td>Aminou</td>
            </tr>
            <tr>
              <td>L3</td>
              <td>S1</td>
              <td>ICT313</td>
              <td>Cyber and Internet Security</td>
              <td>Moyou</td>
            </tr>
            <tr>
              <td>L3</td>
              <td>S1</td>
              <td>ICT315</td>
              <td>Network Application Developement</td>
              <td>Kutche</td>
            </tr>
            <tr>
              <td>L3</td>
              <td>S1</td>
              <td>ICT317</td>
              <td>Information System</td>
              <td>Sevany</td>
            </tr>
            <tr>
              <td>L3</td>
              <td>S2</td>
              <td>ICT300</td>
              <td>Internship</td>
              <td>Aminou</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L3</td>
              <td>S2</td>
              <td>ICT302</td>
              <td>Introduction to Artificial Intelligence</td>
              <td>Kouokam</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L3</td>
              <td>S2</td>
              <td>ICT304</td>
              <td>Software Testing and Deployment</td>
              <td>Kimbi</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L3</td>
              <td>S2</td>
              <td>ICT306</td>
              <td>Businness Intelligence</td>
              <td>Tapamo</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L3</td>
              <td>S2</td>
              <td>ICT308</td>
              <td>Software Development in Java II</td>
              <td>Tchio Corneille</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L3</td>
              <td>S2</td>
              <td>ICT310</td>
              <td>Professional Issue in IT</td>
              <td>Fangang</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L3</td>
              <td>S2</td>
              <td>ICT314</td>
              <td>Computer Forensics and Incident raesponse</td>
              <td>Nkondock</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L3</td>
              <td>S2</td>
              <td>ICT316</td>
              <td>Digital Communication</td>
              <td>Aminou</td>
              <td>0</td>
            </tr>
            <tr>
              <td>L3</td>
              <td>S2</td>
              <td>ICT318</td>
              <td>Java Enterprise Edition</td>
              <td>Fomekong</td>
              <td>0</td>
            </tr> -->
            <?php
               $erreur ="" ;
               $nom_serveur = "localhost";
               $utilisateur = "root";
               $mot_de_passe = "";
               $nom_base_donnees="emargement";
            
                $con = mysqli_connect($nom_serveur , $utilisateur , $mot_de_passe , $nom_base_donnees);
               $query = ' SELECT niveau.Nomniveau,semestre.Nomsemestre,enseignant.idue,ue.Nomue,enseignant.Nom,feuille.HeureDebut,feuille.HeureFin FROM niveau,ue,enseignant,semestre,feuille WHERE ue.idniveau = niveau.idniveau AND ue.idue LIKE enseignant.idue
                AND semestre.id = feuille.idsemestre AND ue.idsemestre = semestre.id; ';

               // Utilise un itérateur
               $result = $con->query($query);
               foreach ($result as $row) {
                echo "<tr>
                <td>". $row['Nomniveau'] ."</td>
                <td>". $row['Nomsemestre'] ."</td>
                <td>". $row['idue'] ."</td>
                <td>". $row['Nomue'] ."</td>
                <td>". $row['Nom'] ."</td>
                    <td>". $row['HeureDebut'] ."</td>
                    
                 </tr>";

               }
               
            ?>
          
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

    <script src="bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="dashboard.js"></script>
      
  </body>
</html>
