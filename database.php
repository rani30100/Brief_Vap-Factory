<?php
function getDatabaseConnexion(){
    //Data server name
    $dsn = 'mysql:host=localhost;dbname=Vapfactory';
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
        
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die ();
    
    }
    return $db;
}