<?php

try
{
    //Commence la transaction
    $pdo->beginTransaction();

    // Prépare la requête
    $push = $pdo->prepare("
        UPDATE team 
        SET lastname = :lastname 
        WHERE firstname = :firstname
    ");

    //Execute la requête
    $push->execute(array(':lastname' => 'Tekxy' , ':firstname' => 'Maxime'));

	// Ferme la transaction
    $push->closeCursor();

    // Commit les données
    $pdo->commit();

} catch(Exception $e) {
    
    $pdo->rollback();
    echo 'Erreur : ' . $e->getMessage();

}

?>