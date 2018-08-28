<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>exo8</title>
  </head>
  <body>
    <p>
      <?php
      if(isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['type'])){
        echo 'Bonjour ' . ' ' . $_GET['type'] . ' ' . $_GET['prenom'] . ' ' . $_GET['nom']  . ' ' . $_GET['fileExtention'];
         // la fontction "pathinfo($_POST['file'], PATHINFO_EXTENSION)" permet de récupérer l'extension d'un fichier
       }elseif(pathinfo($_GET['fileExtention'], PATHINFO_EXTENSION) == 'pdf'){
      }else{
      echo 'l\'extension de votre fichier est : ' . pathinfo($_GET['fileExtention'], PATHINFO_EXTENSION) . ' veuillez le modifier';
        ?>
        <!--creation d'un formulaire et d'un boutton-->
        <form action="index.php" method="GET">
        <select name="type">
        <option value="Monsieur">Mr</option>
        <option value="Madame">Mme</option>
        </select>
        <label>Nom :</label><input type="text" name="nom" />
        <label>Prenom :</label><input type="text" name="prenom" />
        <input type="file" name="fileExtention">
        <button type="submit">soumettre</button>
        </form>
        <?php
      }
      ?>
    </p>
  </body>
</html>
