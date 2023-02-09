<?php
	include 'fonctionsSQL.php';
	include 'index.php';
	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];
	} else {
		$id = $_GET["id"];
		$nom = $_GET["name"];
		$description = $_GET["description"];
		$reference = $_GET["reference"];
		$prixVente = $_GET["prixVente"];
		$prixAchat = $_GET["prixAchat"];
		$quantite = $_GET["quantite"];
	}
	

	if ($action == "CREATE") {
		createUser($name,$description, $reference, $prixVente, $prixAchat, $quantite);

		echo "user cree <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";
		
	}
	
	if ($action == "UPDATE") {
		updateUser($id, $name,$description, $reference, $prixVente, $prixAchat, $quantite);
		echo "user update <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";
	}
	if ($action == "DELETE") {
		deleteUser($id);
		echo "user delete <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";
	}
	
?>
