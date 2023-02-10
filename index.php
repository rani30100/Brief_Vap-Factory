<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main class="main">
        
    <h1 class="color-pink">Base de données Vapoteuses</h1>
    <div class="vapotforever">
        <a href="formulaireProducts.php">Ajoute ta Vapot'</a>

    </div>

    <?php
    require_once 'database.php'; 
    require_once 'fonctionsSQL.php';
    
    $products = getAllproducts();?>
   
   <?php foreach($products as $titles):?>
    <article class="myproducts">
        <div class="colonneGauche">
            <img src="images/pod.jpg" alt="">
            
        </div>

    <table class="table_products">
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
    <tr>
        <th class="th" colspan="2"><?php echo '<a href=formulaireProducts.php?id='.$titles["Id"].' >'."Modifier cet article".'</a>'; ?></th>
 
    </tr>
</table>

</article>
<?php endforeach ?> 
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

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