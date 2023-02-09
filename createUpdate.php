<?php 

require_once 'fonctionsSQL.php';


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

<a href="index.php"><input type="button" value="Page principale"></input></a>