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

        <?php foreach ($listePerso as $key => $value): ?>
          <tr>
            <td> <?php echo $value['id']; ?> </td>
            <td> <?= $value['prenom']; ?> </td>
            <td> <?= $value['login']; ?> </td>
            <td> <?= $value['dateInscription']; ?> </td>
          </tr>
        <?php endforeach; ?>

      </table>
    </main>

</body>
</html>
