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

function getAllproducts(){
    // connection 
    $connexion = getDatabaseConnexion();
    $requete= 'SELECT * FROM Vapoteuses';
    $rows = $connexion->query($requete);
    return $rows;
}

function createProduct($name, $description, $reference, $prixVente, $prixAchat, $quantite) {
        try {

            $connexion = getDatabaseConnexion();
            $insertProduct = "INSERT INTO Vapoteuses (`Nom de l'article`,`Description de l'article`, Référence, `Prix de vente unitaire`, `Prix d'achat unitaire`, `Quantité en stock`)
                            VALUES ('$name', '$description', '$reference', '$prixVente', '$prixAchat', '$quantite')";
            $connexion->query($insertProduct);
        }
       catch (PDOExecption $e){
        echo $insertProduct . "<br> ". $e-> getMessage();
       }
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






















?>