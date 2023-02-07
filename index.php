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
    <h1>Base de données Vapoteuses</h1>
    <?php

//Data server name
$dsn = 'mysql:host=localhost';
//user phpmyadmin
$user = "admin";
//pwd
$pass = "adminpwd";

// on lance une exception qui lit notre tabeleau 
try {

    
// database 
$db = new PDO ($dsn, $user, $pass);
//setAttribute permet de configurer un attribut, ici => Le mode pour reporter les erreurs de PDO
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//crée une variable qui selectionne notre tableau dans sql
$selectTable = ("SELECT * FROM Vapfactory.Vapoteuses");

// et on l'affiche avec la méthode query
$query = $db->query($selectTable);

$title = $query->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// print_r($title);
// echo '</pre>';



} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";

}
?>

<?php foreach($title as $titles):?>
<ul>
    <?= $titles["Nom de l'article"] ?>
<img src="images/pod.jpg" alt="">
    <ol class="liste description">Description : <?= $titles["Description de l'article"] ?></ol>
    <ol class="liste">Référence :<?= $titles["Référence"] ?></ol>
    <ol class="liste">Prix de Vente Unitaire : <?= $titles["Prix de vente unitaire"] ?></ol>
    <ol class="liste">Prix d'achat unitaire : <?= $titles["Prix d'achat unitaire"] ?></ol>
    <ol class="liste">Quantité en stock : <?= $titles["Quantité en stock"] ?></ol>
    <input type="button" value="Modifier la fiche produit">
</ul>
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
</body>
</html>