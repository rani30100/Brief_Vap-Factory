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
            $studentStatement = $db->prepare($sql);
            $studentStatement->execute();
    
            header('Location: index.php');
            exit;
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