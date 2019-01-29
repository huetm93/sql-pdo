<?php

try
{
    //Commence la transaction
    $pdo->beginTransaction();

    // Prépare la requête
    $push = $pdo->prepare("
        INSERT INTO team 
            (promo, firstname, lastname, gender, birthdate, age, github) 
        VALUES 
            (:promo, :firstname, :lastname, :gender, :birthdate, :age, :github)
    ");

    //Execute la requête
    $push->execute(array(':promo' => 'CRL-Turing-2.6', ':firstname' => 'Maxime', ':lastname' => 'Huet', ':gender' => 'M', ':birthdate' => '29/07/1993', ':age' => '25', ':github' => 'huet.m93'));

	// Ferme la transaction
    $push->closeCursor();

    // Commit les données
    $pdo->commit();

} catch(Exception $e) {
    
    $pdo->rollback();
    echo 'Erreur : ' . $e->getMessage();

}

?>

