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
        <th>Id</th>
        <td><?= $titles["Id"] ?></td>
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

<form action="">
    <h2> Ajouter une nouvelle Vapoteuse </h2>
    <div class="main_form">

<label for="name">Nom de la vapoteuse</label>
<input type="text" for="name">

<label for="name">Description</label>
<input type="text" for="name">

<label for="name">Référence </label>
<input type="text" for="name">

<label for="name">Prix de Vente Unitaire : </label>
<input type="text" for="name">

<label for="name">Prix d'achat unitaire</label>
<input type="text" for="name">

<label for="name">Quantité </label>
<input type="text" for="name">

<input type="submit">

</div>

</form>

</main>

</body>

</html>