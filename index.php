<?php


$pdo = new PDO("mysql:host=localhost;dbname=bd_wone", "root", "",
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);


$query = "SELECT * FROM personne";

$stmt = $pdo->prepare($query);

$stmt->execute();

$listePerso = $stmt->fetchAll();


include 'listePerso.php';
