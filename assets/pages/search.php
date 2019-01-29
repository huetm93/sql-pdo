<?php

$resultat = $pdo->query('SELECT * FROM team');
$donnees = $resultat->fetch();



while ($donnees = $resultat->fetch())
{
  echo "<p>". $donnees['promo'] . " ";
  echo $donnees ['firstname'] . " ";
  echo $donnees ['lastname'] . " ";
  echo $donnees ['gender'] . " ";
  echo $donnees ['birthdate'] . " ";
  echo $donnees ['age'] . " ";
  echo $donnees ['github'] . "<p>";
}

$resultat->closeCursor();

?>