<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <title>inscription</title>
</head>
<body>
  <header class="container-fluid">
    <a href="inscription.php">Inscription</a>
    <a href="index.php">Liste client</a>
    <a href="listeCmd.php">Liste commande</a>
    <a href="client1.php">client id 1</a>
  </header>

  <main class="container-fluid">
    <form action="" method="post">
      <div class="form-group">
        <label for="">Prénom</label>
        <input type="text" name="prenom" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Login</label>
        <input type="text" name="login" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="mdp" class="form-control">
      </div>

      <div class="mt-3">
        <input type="submit" class="btn btn-primary">
      </div>

    </form>
  </main>

</body>
</html>

<?php

$pdo = new PDO("mysql:host=localhost; dbname=bd_wone", "root", "");

$sql = "INSERT INTO personne VALUES(NULL, ?, ?, ?, Now())"; // VAlues (NULL, :prenom(on l'appel marqueur nominatif c'est la meme que celui qui est à coté))
$stmt = $pdo->prepare($sql);

$prenom = $_POST['prenom'];
$login = $_POST['login'];
$mdp = $_POST['mdp'];

$stmt->execute( array($prenom, $login, $mdp) );

