<?php

try {
  $dbName = 'tp1_securité';
  $host = 'localhost';
  $utilisateur = 'root';
  $motDePasse = '';
  $port='3306'; //port MySQL
  $dns = 'mysql:host='.$host .';dbname='.$dbName.';port='.$port;
  $bd = new PDO( $dns, $utilisateur, $motDePasse );
  $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

  die('<p> La connexion a érronée. Erreur['.$e->getCode().'] : '
   . $e->getMessage().'</p>');
 }
  ?>
