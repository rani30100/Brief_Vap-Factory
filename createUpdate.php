<?php
	include 'fonctionsSQL.php';
	include 'index.php';
	$action = $_GET["action"];
 

require_once 'fonctionsSQL.php';


$action = $_GET["action"];
$id = $_GET['id'] ?? null;
if ($action == "DELETE"){
        $id = $_GET['Id'] ?? null;
        
} else {
        $name = $_GET["name"] ?? null ;
        $description = $_GET["description"] ?? null ;
        $reference = $_GET['reference'] ?? null;
        $prixVente = $_GET['prixVente'] ?? null;
        $prixAchat = $_GET["prixAchat"] ?? null;
        $quantite = $_GET["quantite"] ?? null ;
    
}if ($action == "CREATE") {
        create_and_update($name, $description, $reference, $prixVente, $prixAchat, $quantite);
        header('Location: index.php');
        exit;
}

if ($action == "UPDATE") {
        echo "produit Modifié <br>" ;
        create_and_update($name, $description, $reference, $prixVente, $prixAchat, $quantite,$id);
        echo '<a href="index.php" >retour</a>';
        exit;
}

if ($action == "DELETE") {
        deleteProduct($id);
    
        
}

?>

<a href="index.php"><input type="button" value="Page principale"></input></a>