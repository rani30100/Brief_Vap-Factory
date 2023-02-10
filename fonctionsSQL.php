<?php 
require_once 'database.php';



function getAllproducts(){
    // connection 
    $connexion = getDatabaseConnexion();
    $requete= 'SELECT * FROM Vapoteuses';
    $rows = $connexion->query($requete);
    return $rows;
}

// function createProduct($name, $description, $reference, $prixVente, $prixAchat, $quantite) {
//         try {

//             $connexion = getDatabaseConnexion();
//             $insertProduct = "INSERT INTO Vapoteuses (`Nom de l'article`,`Description de l'article`, Référence, `Prix de vente unitaire`, `Prix d'achat unitaire`, `Quantité en stock`)
//                             VALUES ('$name', '$description', '$reference', '$prixVente', '$prixAchat', '$quantite')";
//             $connexion->query($insertProduct);
//         }
//        catch (PDOExecption $e){
//         echo $insertProduct . "<br> ". $e-> getMessage();
//        }
// }

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