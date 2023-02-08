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
    $products = getAllproducts();?>
   
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
    
<label for="name">Nom de la vapoteuse</label>
<input type="text" name="name">

<label for="description">Description</label>
<input type="text" name="description">

<label for="reference">Référence </label>
<input type="text" name="reference">

<label for="prixVente">Prix de Vente Unitaire : </label>
<input type="text" name="prixVente">

<label for="prixAchat">Prix d'achat unitaire</label>
<input type="text" name="prixAchat">

<label for="quantite">Quantité </label>
<input type="text" name="quantite">

<input type="submit" name="submit">

</div>

</form>

</main>

</body>

</html>