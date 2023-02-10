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

function deleteProduct($id) {
    $id = $_GET["id"] ?? null;
    $db = getDatabaseConnexion();

if(!empty($id)) {
    $sql = "DELETE FROM `Vapoteuses` WHERE `Vapoteuses`.`id` = $id;";
        
    $studentStatement = $db->prepare($sql);
    $studentStatement->execute();
}

header('Location: index.php');
exit;
}

















?>