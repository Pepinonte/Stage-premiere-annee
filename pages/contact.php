<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/styleContact.css" />

  <?php $title = "Contact"; ?>
</head>

<body>

  <?php require 'header.php'; ?>

  <div class="main">

    <form action="" method="post">

      <div class="champ champ-name">
        <div>
          <label for="name">Nom :</label>
        </div>
        <div>
          <input type="text" id="name" name="user_name">
        </div>
      </div>

      <div>
        <p>Status:</p>
        <input type="radio" id="Profesionnel" name="drone" value="Profesionnel" checked>
        <label for="Profesionnel">Profesionnel</label>
        <input type="radio" id="Particulier" name="drone" value="Particulier">
        <label for="Particulier">Particulier</label>
      </div>

      <div class="champ champ-mail">
        <div>
          <label for="mail">e-mail :</label>
        </div>

        <div>
          <input type="email" id="mail" name="user_mail">
        </div>
      </div>
      <div class="champ champ-sujet">
        <div>
          <label for="sujet">Sujet :</label>
        </div>
        <div>
          <input type="text" id="sujet" name="sujet">
        </div>
      </div>

      <div class="champ champ-msg">
        <div>
          <label for="msg">Message :</label>
        </div>
        <div>
          <textarea id="msg" name="user_message"></textarea>
        </div>
      </div>
      <div class="champ-envoyer">
        <button name="valider1" type="submit">Envoyer le message</button>
      </div>

    </form>
  </div>

  <?php
    if (isset($_POST['valider1'])) {
      $prenom = $_POST['user_name'];
      $mail = $_POST['user_mail'];
      $sujet = $_POST['sujet'];
      $msg = $_POST['user_message'];
      $date = new DateTime();

      echo 'send';

      require 'connexionBdd.php';
      try{
        $sql = 'INSERT INTO `client` (`idclient`, `nom`, `prenom`) VALUES ("", "' . $prenom . '", "")';
        $sql2 = 'INSERT INTO ` message`(`idmessage`, `date`, `sujet`, `msg`) VALUES ("", "' .$date->format('Y-m-d'). '", "' . $sujet . '", "' . $msg . '")';
        $connexion->exec($sql);
        $connexion->exec($sql2);
      }
      catch(Exception $e){
        echo 'requette fail';
      }
    }
  ?>

  <?php require 'footer.php'; ?>

</body>

</html>