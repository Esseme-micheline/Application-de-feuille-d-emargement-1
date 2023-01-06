
<?php
    session_start();
   echo $_SESSION['nomEnseignant'];
    echo $_SESSION['codeUe'];

    ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Feedback Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="assets/css/main.css" rel="stylesheet">
    
    <style>
    html, body {
      min-height: 100%;
      /* width: 150%; */
      background-color: rgb(131, 125, 125);
      }
      .flex-row {
    display: flex;
}
.wrapper {
    border: 1px solid #4b00ff;
    border-right: 1;
}

canvas#signature-pad {
    background: #fff;
    width: 100px;
    height: 100px;
    cursor: crosshair;
}
      body, div, form, input, select { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1, h4 {
      margin: 15px 0 4px;
      font-weight: 400;
      }
      h4 {
      margin: 20px 0 4px;
      font-weight: 400;
      }
      span {
      color: red;
      }
      .small {
      font-size: 10px;
      line-height: 18px;
      }
      button#clear {
     /* weight: 70px; */
     background-color: #095484;
    border: 1px solid transparent;
    color: #fff;
    font-weight: 600;
    cursor: pointer;
    margin-left: 20px;
    margin-top:95px;
}
button#clear span {
    transform: rotate(90deg);
    display: block;
}
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 3px;
      border: 1px solid gray;
      }
      form {
      padding: 20px;
      background: #fff;
      box-shadow: 0 5px 5px gray; 
      }
      input {
      width: 400px;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
      vertical-align: middle;
      }
      input:hover, textarea:hover, select:hover {
      outline: none;
      border: 1px solid #095484;
      background: #e6eef7;
      }
      .title-block select, .title-block input {
      margin-bottom: 10px;
      }
      select {
      padding: 7px 0;
      border-radius: 3px;
      border: 1px solid #ccc;
      background: transparent;
      }
      select, table {
      width: 30%;
      }
      option {
      background: #fff;
      }
      .day-visited, .time-visited {
      position: relative;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      input[type="time"]::-webkit-inner-spin-button {
      margin: 2px 22px 0 0;
      }
      .day-visited i, .time-visited i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      top: 8px;
      font-size: 20px;
      }
      .day-visited i, .time-visited i {
      right: 5px;
      z-index: 1;
      color: #a9a9a9;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 0;
      z-index: 2;
      opacity: 0;
      }
      .question-answer label {
      display: block;
      padding: 0 20px 10px 0;
      }
      .question-answer input {
      width: auto;
      margin-top: -2px;
      }
      th, td {
      width: 18%;
      padding: 15px 0;
      border-bottom: 1px solid #ccc;
      text-align: center;
      vertical-align: unset;
      line-height: 18px;
      font-weight: 400;
      word-break: break-all;
      }
      .first-col {
      width: 25%;
      text-align: left;
      }
      textarea {
      width: 90%;
      height: 200px;
      }
      .btn-block {
      margin-top: 20px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background-color: #0666a3;
      }
      @media (min-width: 568px) {
      .title-block {
      display: flex;
      justify-content: space-between;
      }
      .title-block select {
      width: 30%;
      margin-right: 200px;
      margin-bottom: 0;
      }
      .tit-block select {
      width: 30%;
      margin-right: 200px;
      margin-bottom: 0;
      }
      .titl-block select {
      width: 30%;
      margin-right: 200px;
      margin-bottom: 0;
      }
      .title-block input {
      width: 31%;
      margin-bottom: 0;
      }
      th, td {
      word-break: keep-all;
      }
      }
      .head{
        display: flex;
        justify-content: space-around;
        text-align: center;
      }
     
    </style>
  <body>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="acceuil.html" class="active">Home</a></li>
        <li><a href="about.html">About</a></li>
        
        <li><a href="bienvenu.html">Blog</a></li>
        <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="#">Dropdown 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul>
            </li>
            <li><a href="#">Dropdown 2</a></li>
            <li><a href="#">Dropdown 3</a></li>
            <li><a href="#">Dropdown 4</a></li>
          </ul>
        </li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav><!-- .navbar -->
          <div class="testbox">
            
              <form action="Verif.php" method="POST">
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
                  <h1>FEUILLE D'EMARGEMENT DES COURS DE ICT4D</h1>
                  <h4>Semetre<span>*</span></h4>
                  <input type="text" name="idsemestre"  value="<?php
                    echo $_SESSION['idsemestre'];
                  ?>"/>
                  
                
                  <h4>NIVEAU<span>*</span></h4>
                  <input type="text" name="idniveau"  value="<?php
                    echo $_SESSION['idniveau'];
                  
                
                  ?>"/>
                  <h4 >UE<span>*</span></h4>
                  <input type="text" name="idue"  value="<?php
                    echo $_SESSION['codeUe'];
                  ?>"/>
            
                  <h4>Nom_Enseignant<span>*</span></h4>
                  <input type="text" name="enseignant"  value="<?php
                      echo $_SESSION['nomEnseignant'];
                  ?>"/>
                  <h4>Sceance</h4><span>*</span>
                  <input type="text" name="idsceance"/>
                  <h4>Date</h4>
                  <input type="text" id="date" name="date"/>
                  <script>
            
                    var date = new Date(); 
                    document.getElementById("date").value=date.getFullYear()+"-"+date.getMonth()+"1"+"-"+date.getDate();
                    
                  </script>
                  <h4>Heure du debut</h4>
                  <input type="time" id="HeureDebut" name="HeureDebut" onchange="auto()" required/>
                  <h4>Heure de Fin</h4>
                  <input type="time" id="HeureFin" name="HeureFin" required onchange="auto()"/>
                  <h4>Total horaire</h4>
                  <input type="text" id="HoraireTotal" name="HoraireTotal"  />
                  <h4>Feedback/Enquiry</h4>
                  <p class="small">Please just enter the main topics and sub-topics. Thank you for your time and valuable feedback.</small>
                  <textarea rows="5" name="FeedBack"></textarea><br><br>
                  <h4>Password Enseignant</h4>
                  <input type="password" name="idpassword">
                  <h4>Password Delegue</h4>
                  <input type="password" name="iddelegue"><br>
                  
                    <input id="impression" name="impression" type="button" onclick="imprimer_page()" value="Imprimer cette page" />
                  
                  <script type="text/javascript">
                    function imprimer_page(){
                      window.print();
                    }
                  </script>
                  <div class="btn-block">
                    <button type="submit" id="btn"  name="sign">Send FeedBack</button>
                  </div>
              </form>
          </div>
            <script>
              function auto(){
                const start=document.getElementById("HeureDebut").value;
                const  end=document.getElementById("HeureFin").value;
                const HoraireTotal = document.getElementById("HoraireTotal");
                if(start>end){
                  HoraireTotal.value="error";    
                }
                else{
                  let D=start.split(":");
                  let F=end.split(":");
                  let sec1=(parseInt(D[0])*3600)+(parseInt(D[1])*60);
                  let sec2=(parseInt(F[0])*3600)+(parseInt(F[1])*60);
                  let sub = sec2 - sec1;
                  let H = parseInt(sub/3600);
                  let M = parseInt((sub%3600)/60);
                  if(M > 10 && H > 10)
                    HoraireTotal.value = H.toString()+":"+M.toString();
                  else if(M > 10 && H < 10)
                    HoraireTotal.value = "0" + H.toString()+":"+M.toString();
                  else if(H>10 && M<10)
                    HoraireTotal.value = H.toString()+":0"+M.toString();
                  else if(H == 0 && M == 0)
                    HoraireTotal.value = "0"+ H.toString()+":0"+M.toString();
                  else if(H == 0 && M > 0)
                    HoraireTotal.value = "0"+ H.toString()+":0"+M.toString();
                  else if(H>0 && M==0)
                    HoraireTotal.value = "0"+ H.toString()+":0"+M.toString();
                }
               
              }
            </script>

    </body>
</html>
