<?php

$pdo = new PDO("mysql:host=localhost;dbname=bd_wone", "root", "");

$stm = $pdo->prepare("SELECT * FROM commande");
$stm->execute();
$listeCmd = $stm->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <title>Commande</title>
</head>
<body>
  <header class="container-fluid">
    <a href="inscription.php">Inscription</a>
    <a href="index.php">Liste client</a>
    <a href="listeCmd.php">Liste commande</a>
    <a href="client1.php">client id 1</a>
  </header>
  <main class="container-fluid">
    <h1>Liste commande</h1>
    <table class="table table-striped">
      <tr>
        <th>id commande</th>
        <th>id client</th>
        <th>date commande</th>
      </tr>
      <?php foreach($listeCmd as $key => $value): ?>
        <tr>
          <td> <?= $value['id']; ?> </td>
          <td> <?= $value['id_personne']; ?> </td>
          <td> <?= $value['date']; ?> </td>
        </tr>
      <?php endforeach; ?>


    </table>
  </main>

</body>
</html>
