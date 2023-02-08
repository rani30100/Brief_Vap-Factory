<?php 

include 'fonctionsSQL.php';

$id = $_GET["id"];
    $name = $_GET["name"];
    $description = $_GET["description"];
    $reference = $_GET["reference"];
    $prixVente = $_GET["prixVente"];
    $prixAchat = $_GET["prixAchat"];
    $quantite = $_GET["quantite"];

    createProduct($id, $name, $description, $reference, $prixVente, $prixAchat, $quantite);

?>