<?php 

require_once 'fonctionsSQL.php';


$action = $_GET["action"] ?? null;
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
        // createProduct($name, $description, $reference, $prixVente, $prixAchat, $quantite);
?>

<h1><?= !empty($id) ? "Modifier" : "Ajouter"?> un produit</h1>
<table class="table_products">
        
        <tr>
            <th>Id</th>
            <td><?php echo $id ?></td>
        </tr>
        
        <tr>
                <th>Nom</th>
            <td><?= $name ?></td>
        </tr>
    
        <tr>
            <th>Description :</th>    
            <td id="products_description"><?= $description ?></td>
        </tr>
        
        <tr></tr>
        <th>Référence :</th>
        <td><?= $reference ?></td>
</tr>

<tr> 
<th>Prix de Vente Unitaire :</th>
<td><?= $prixVente?></td>
</tr>

<tr>
<th>Prix d'achat unitaire :</th>
<td><?= $prixAchat?></td>
</tr>


<tr>
        <th>Quantité en stock :</th>
        <td><?= $quantite?></td>
</tr>

</table>
<a href="index.php" >retour</a>

    