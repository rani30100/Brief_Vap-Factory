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


function getAllproducts(){
    // connection 
    getDatabaseConnexion();
   return getDatabaseConnexion();
}






















?>