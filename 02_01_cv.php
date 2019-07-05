<?php

?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Martin - Développeur web</title>
  <!-- Librairies de Style -->
  <!-- ------------------- -->
  <link rel="stylesheet" href="./css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="./css/jquery/jquery-ui.css">
  <link rel="stylesheet" href="./css/main.css">

</head>
<body>
<div class="container">
  <!-- Image dans le coin supérieur droit : -->
  <div style="position:absolute;right: 20px;">
      <img src="./img/profile_01.JPG" border="0" height="150" alt="my profile">
  </div>

  <div class="enteteCV">
      Amaury Martin <br>
      <div id="divAge">20/11/1984</div>
      E-mail:
      <a href="mailto:amartin@gmail.fr">amartin@gmail.com</a><br>
      <a href="#" id="dialogPopin">Cliquez ici pour déclencher une Popin jQuery</a>
  </div>
  <div id="titreCV" class="titreCV">
      Développeur web
  </div>

  <!-- Section 1 -->
  <div class="titreSection">EXPERIENCES :</div>
  <div class="dateCV">2010</div>
  Freelance developpement Web <br>
  <div class="dateCV">2007</div>
  Amélioration des sites web de la société facesoft <br>

  <!-- Section 2 -->
  <div class="titreSection">FORMATION :</div>
  <div class="dateCV">2007</div>
  Diplôme de Technicien Supérieur en jQuery <br>
  <div class="dateCV">2005</div>
  Baccalauréat Scientifique <br>

  <!-- Ssection 3 -->
  <div class="titreSection" id="divers">DIVERS :</div>
  - Brevet secourisme <br>
  - Photoshop <br>
  - Pratique du tennis <br>



    <div id="dialog" title="Hello World">
        <p>Hello, je suis votre nouvelle boîte de dialogue !<br> The dialog window can be moved, resized and closed with the 'x' icon.</p>
    </div>

</div>

  <!-- Librairies JavaScrip -->
  <!-- -------------------- -->
    <script src="./js/jquery/jquery_3_3_1.js"></script>
    <script src="./js/jquery/jquery-ui.js"></script>
    <script src="./js/bootstrap/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>

    <script>
        $('#dialogPopin').click(function(){
            $( "#dialog" ).dialog();
        })
    </script>
</body>
</html>