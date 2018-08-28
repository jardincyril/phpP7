<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>forme</title>
  </head>
  <body>
    <p>
      <?php
      //verification des donnés saissi de l'url
      if(!empty($_GET['prénom']) && !empty($_GET['nom'])){
        echo 'Bonjour ' . $_GET['prénom'] . ' ' . $_GET['nom'] ;
      }else{
        echo 'données mal saisis';
      }
      ?>
    </p>
  </body>
</html>
