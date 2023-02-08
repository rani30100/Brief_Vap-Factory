<?php 
function getDatabaseConnexion(){
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
        die ();
    
    }
    return $title;
}

function createProduct($name, $description, $reference, $prixVente, $prixAchat, $quantite) {
        $connexion = getDatabaseConnexion();
        $insertProduct = "INSERT INTO Vapoteuses (Nom de l'article, Description de l'article, Référence, Prix de vente unitaire, Prix d'achat unitaire, Quantité en stock)
                        VALUES ($name,$description, $reference, $prixVente, $prixAchat, $quantite)";
        $connexion->query($insertProduct);
        $create = $connexion->fetchAll(PDO::FETCH_ASSOC);
}


function getAllproducts(){
    // connection 
    getDatabaseConnexion();
   return getDatabaseConnexion();
}






















?>