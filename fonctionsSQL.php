
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
        $connexion->exec($insertProduct);
       
}


function getAllproducts(){
    // connection 
    $con = getDatabaseConnexion();
    $requete = 'SELECT * from utilisateurs';
	$rows = $con->query($requete);
	return $rows;

}

// //recupere un user
// function readUser($id) {
//     $con = getDatabaseConnexion();
//     $requete = "SELECT * from Vapoteuses where id = '$id' ";
//     $stmt = $con->query($requete);
//     $row = $stmt->fetchAll();
//     if (!empty($row)) {
//         return $row[0];
//     }
    
// }

// //met à jour le user
// function updateUser($id, $name,$description, $reference, $prixVente, $prixAchat, $quantite) {
//     try {
//         $con = getDatabaseConnexion();
//         $requete = "UPDATE Vapoteuses set 
//                     `Nom de l'article ` = '$name',
//                     `Description de l'article`  = '$description',
//                     `Référence` = '$reference',
//                     `Prix de vente unitaire`  = '$prixVente',
//                     `Prix d'achat unitaire`= '$reference',
//                     `Quantité` = '$prixVente',
//                     where id = '$id' ";
//         $stmt = $con->query($requete);
//     }
//     catch(PDOException $e) {
//         echo $sql . "<br>" . $e->getMessage();
//     }
// }

// // suprime un user
// function deleteProduct($id) {
//     try {
//         $con = getDatabaseConnexion();
//         $requete = "DELETE from Vapoteuses where id = '$id' ";
//         $stmt = $con->query($requete);
//     }
//     catch(PDOException $e) {
//         echo $sql . "<br>" . $e->getMessage();
//     }
// }

function getNewproduct() {
    $user['id'] = "";
    $user['nom'] = "";
    $user['description'] = "";
    $user['reference'] = "";
    $user['prixVente'] = "";
    $user['prixVAchat'] = "";
    $user['quantite'] = "";
    
}




















?>