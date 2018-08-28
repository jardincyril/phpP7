<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>exo6</title>
  </head>
  <body>
    <p>
      <?php
      //verification des donnés saissi de l'url
      if(isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['type'])){
        echo 'Bonjour ' . ' ' . $_GET['type'] . ' ' . $_GET['prenom'] . ' ' . $_GET['nom'];
      }else{
        ?>
        <!--creation d'un formulaire et d'un boutton-->
        <form action="index.php" method="GET">
        <select name="type">
        <option value="Monsieur">Mr</option>
        <option value="Madame">Mme</option>
        </select>
        <label>Nom :</label><input type="text" name="nom" />
        <label>Prenom :</label><input type="text" name="prenom" />
        <button type="submit">soumettre</button>
        </form>
        <?php
      }
      ?>
    </p>
  </body>
</html>
