<?php

// Connexion à la bdd
define('HOSTNAME', '2918p.myd.infomaniak.com');
define('USERNAME', '2918p_julien');
define('PASSWORD', 'Locky123');
define('DATABASE', '2918p_locky');

$dsn = 'mysql:host=' . HOSTNAME . ';dbname=' . DATABASE;

try { // on essai ce code
  $pdo = new PDO($dsn, USERNAME, PASSWORD);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) { // en cas d'erreur on la capture
  die('<ul><li>Erreur sur le fichier : ' . $e->getFile() . '</li><li>Erreur à la ligne ' . $e->getLine() . '</li><li>Message derreur : ' . $e->getMessage() . '</li></ul>');
}