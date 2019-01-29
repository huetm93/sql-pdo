<?php

try
{
    //Commence la transaction
    $pdo->beginTransaction();

    // Prépare la requête
    $push = $pdo->prepare("
        DELETE FROM team
        WHERE firstname = :firstname
    ");

    //Execute la requête
    $push->execute(array(':firstname' => 'Maxime'));

	// Ferme la transaction
    $push->closeCursor();

    // Commit les données
    $pdo->commit();

} catch(Exception $e) {
    
    $pdo->rollback();
    echo 'Erreur : ' . $e->getMessage();

}

?>