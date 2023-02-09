<?php
	include 'fonctionsSQL.php';
	include 'index.php';
	$action = $_GET["action"];
 

require_once 'fonctionsSQL.php';


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
	
$action = $_GET["action"];

if ($action == "DELETE"){
        $id = $_GET['Id'];
        
} else {
        $name = $_GET["Nom de l'article"] ;
        $description = $_GET["Description de l'article"] ;
        $reference = $_GET['Référence'] ;
        $prixVente = $_GET['Prix de vente unitaire'];
        $prixAchat = $_GET["Prix d'achat' unitaire"];
        $quantite = $_GET["Quantité en stock"] ;
    
}if ($action == "CREATE") {
        createProduct($name, $description, $reference, $prixVente, $prixAchat, $quantite);
        echo "produit ajouté <br>" ;
        echo "<a href='index.php'>Liste des produits</a>";
}

if ($action == "UPDATE") {
        updateProduct($id, $name, $description, $reference, $prixVente, $prixAchat, $quantite);
        echo "produit modifié <br>";
        echo "<a href='index.php'>Liste des produits</a>";
}

if ($action == "DELETE") {
        deleteProduct($id);
        echo "produit effacé";
        echo "<a href='index.php'>Liste des produits</a>";
}
createProduct($name, $description, $reference, $prixVente, $prixAchat, $quantite);
?>
