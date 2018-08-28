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
      if(!empty($_POST['prénom']) && !empty($_POST['nom'])){
        echo 'Bonjour ' . $_POST['prénom'] . ' ' . $_POST['nom'] ;
      }else{
        echo 'données mal saisis';
      }
      ?>
    </p>
  </body>
</html>
