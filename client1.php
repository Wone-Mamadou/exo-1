<?php

$pdo = new PDO("mysql:host=localhost;dbname=bd_wone", "root", "");

$stm = $pdo->prepare("SELECT * FROM personne WHERE login = ? AND mdp = ?");
$stm->execute( ["ilci2", "ilci"] );
$client_1 = $stm->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
  <header class="container-fluid">
    <a href="inscription.php">Inscription</a>
    <a href="index.php">Liste client</a>
    <a href="listeCmd.php">Liste commande</a>
    <a href="client1.php">client id 1</a>
  </header>
    <main class="container-fluid">
      <h1>Personnes</h1>

      <table class="table table-striped">
        <tr>
          <th>Id</th>
          <th>Prénom</th>
          <th>Login</th>
          <th>Date</th>
        </tr>


          <tr>
            <td> <?= $client_1['id']; ?> </td>
            <td> <?= $client_1['prenom']; ?> </td>
            <td> <?= $client_1['login']; ?> </td>
            <td> <?= $client_1['dateInscription']; ?> </td>
          </tr>

      </table>
    </main>

</body>
</html>
