<?php 

include 'fonctionsSQL.php';

$id = $_GET[""];
    $name = $_GET["nameVap"];
    $description = $_GET["descriptions"];
    $reference = $_GET["ref"];
    $prixVente = $_GET["prixVente"];
    $prixAchat = $_GET["prixAchat"];
    $quantite = $_GET["quantite"];

    createProduct($name, $description, $reference, $prixVente, $prixAchat, $quantite);

?>