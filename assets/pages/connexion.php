<?php
try
{
	// On se connecte à MySQL
	$pdo = new PDO('mysql:host=localhost;dbname=becode;charset=utf8', 'root', '');
}

catch(Exception $e)
{
	// En cas d'erreur, on annule la transaction et on affiche l'erreur
	$pdo->Rollback();
	echo 'Erreur : ' . $e->getMessage();
}