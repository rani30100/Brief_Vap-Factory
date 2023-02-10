<?php 
require_once 'database.php';

function getAllproducts(){
    // connection 
    $connexion = getDatabaseConnexion();
    $requete= 'SELECT * FROM Vapoteuses';
    $rows = $connexion->query($requete);
    return $rows;
}

function getVapoteuses() {
    $vapoteuses['Id'] = "";
    $vapoteuses["Nom de l'article"] = "";
    $vapoteuses["Description de l'article"] = "";
    $vapoteuses['Référence'] = "";
    $vapoteuses['Prix de vente unitaire'] = "";
    $vapoteuses["Prix d'achat unitaire"] = "";
    $vapoteuses['Quantité en stock'] = "";
    return $vapoteuses;
    
}

	//recupere un user
	function readProducts($id) {
		$con = getDatabaseConnexion();
		$requete = "SELECT * from Vapoteuses where id = '$id' ";
		$stmt = $con->query($requete);
		$row = $stmt->fetchAll();
		if (!empty($row)) {
			return $row[0];
		}
		
	}


// //met à jour le user
// function updateProduct($name, $description, $reference, $prixVente, $prixAchat, $quantite) {
//     try {
//         $con = getDatabaseConnexion();
//         $requete = "UPDATE Vapoteuses set 
//                     `Nom de l'article` = '$name',
//                     `Description de l'article` = '$description',
//                     `Référence` = '$reference',
//                     `Prix de vente unitaire` = '$prixVente',
//                     `Prix d'achat unitaire`  = '$prixAchat',
//                     `Quantité en stock` = '$quantite',
//                     where `Vapoteuses`.`Id` = '$id' ";
//         $stmt = $con->prepare($requete);
//         $stmt->execute();
//     }
//     catch(PDOException $e) {
//         echo $requete . "<br>" . $e->getMessage();
//     }
// }

function create_and_update($name, $description, $reference, $prixVente, $prixAchat, $quantite, $id = null) {
    if(!empty($name) && !empty($description) && !empty($reference) && !empty($prixVente) && !empty($prixAchat)&& !empty($quantite)) {
        
        
        if(!empty($id)) {

            $sql = "UPDATE Vapoteuses set 
            `Nom de l'article` = '$name',
            `Description de l'article` = '$description',
            `Référence` = '$reference',
            `Prix de vente unitaire` = '$prixVente',
            `Prix d'achat unitaire`  = '$prixAchat',
            `Quantité en stock` = '$quantite'
            where `Vapoteuses`.`Id` = $id ";
        } else {

            $sql =  "INSERT INTO Vapoteuses (`Id`,`Nom de l'article`,`Description de l'article`, Référence, `Prix de vente unitaire`, `Prix d'achat unitaire`, `Quantité en stock`)
            VALUES (NULL,'$name', '$description', '$reference', '$prixVente', '$prixAchat', '$quantite')";
            
        }
            $db = getDatabaseConnexion();
            $vapoteusesStatement = $db->prepare($sql);
            $vapoteusesStatement->execute();
    
            header('Location: index.php');
            exit;
    }
}



function deleteProduct($id) {
    $id = $_GET["id"] ?? null;
    $db = getDatabaseConnexion();

if(!empty($id)) {
    $sql = "DELETE FROM `Vapoteuses` WHERE `Vapoteuses`.`id` = $id;";
        
    $vapoteusesStatement = $db->prepare($sql);
    $vapoteusesStatement->execute();
}

header('Location: index.php');
exit;
}

















?>