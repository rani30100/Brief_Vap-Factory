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

    <?php require_once 'fonctionsSQL.php';
    $products = getAllproducts();?>
   
   <?php foreach($products as $titles):?>
    <img src="images/pod.jpg" alt="">
    <table class="table_products">
        
    <tr>
        <th>Id</th>
        <td><?php echo '<a href=formulaireProducts.php?id='.$titles["Id"].' >'.$titles["Id"].'</a>'; ?></td>
    </tr>

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

</main>

</body>

</html>

<!-- < ?php

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
? >
</div>

</form>

< ?php if ($action!="CREATE") ?>{ 
	<form action="createUpdate.php" method="get">
		<input type="hidden" name="action" value="DELETE"/>
		<input type="hidden" name="id" value="< ?php echo $user['id'];  ?>"/>
		<p>
		<div class="button">
			<button type="submit">Supprimer</button>
		</div>
		</p>
	</form> 
	< ?php } ? > -->