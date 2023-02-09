<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
    <h1>Base de données Vapoteuses</h1>

    <?php include 'fonctionsSQL.php';
    $products = getDatabaseConnexion();?>
   
   <?php foreach($products as $titles):?>
    <img src="images/pod.jpg" alt="">
    <table class="table_products">
        <input type="button" value="Modifier la fiche produit">
        
    <tr>
        <th>Nom</th>
        <td><?= $titles["Nom de l'article"] ?></td>
    </tr>

    <tr>
        <th>Description :</th>    
        <td id="products_description"><?= $titles["Description de l'article"] ?></td>
    </tr>

    <tr></tr>
        <th>Référence :</th>
        <td><?= $titles["Référence"] ?></td>
    </tr>

    <tr> </tr>
        <th>Prix de Vente Unitaire :</th>
        <td><?= $titles["Prix de vente unitaire"] ?></td>
    </tr>

    <tr></tr>
        <th>Prix d'achat unitaire :</th>
        <td><?= $titles["Prix d'achat unitaire"] ?></td>
    </tr>


    <tr></tr>
        <th>Quantité en stock :</th>
        <td><?= $titles["Quantité en stock"] ?></td>
    </tr>
</table>

<?php endforeach ?> 


<form action="createUpdate.php" method="get">
    
    <h2> Ajouter une nouvelle Vapoteuse </h2>
    <div class="main_form">


<input type="hidden" name="id" value="<? $user['id'];  ?>"/>
<input type="hidden" name="action" value="<? $action;  ?>"/>


<label for="name">Nom de la vapoteuse</label>
<input type="text" name="name" value="<?php echo $user['nom'];  ?>">

<label for="description">Description</label>
<input type="text" name="description" value="<?php echo $user['description'];  ?>">

<label for="reference">Référence </label>
<input type="text" name="reference" value="<?php echo $user['reference'];  ?>">

<label for="prixVente">Prix de Vente Unitaire : </label>
<input type="text" name="prixVente" value="<?php echo $user['prixVente'];  ?>">

<label for="prixAchat">Prix d'achat unitaire</label>
<input type="text" name="prixAchat" value="<?php echo $user['prixAchat'];  ?>">

<label for="quantite">Quantité </label>
<input type="text" name="quantite" value="<?php echo $user['quantite'];  ?>">

<input type="submit" name="submit">

<?php

	$id = $_GET["id"];
	if ($id == 0) {
		$user = getNewproduct();
		$action = "CREATE";
		$libelle = "Creer";
	} else {
		$user = readUser($id);
		$action = "UPDATE";
		$libelle = "Mettre a jour";
	}
?>
</div>

</form>

<?php if ($action!="CREATE") { ?>
	<form action="createUpdate.php" method="get">
		<input type="hidden" name="action" value="DELETE"/>
		<input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
		<p>
		<div class="button">
			<button type="submit">Supprimer</button>
		</div>
		</p>
	</form>
	<?php } ?>
</main>

</body>

</html>