<?php


require 'fonctionsSQL.php';
$id = $_GET["id"];
	if ($id == 0) {
		$vapoteuses = getVapoteuses();
		$action = "CREATE";
		$libelle = "Creer";
	} else {
		$vapoteuses = readProducts($id);
		$action = "UPDATE";
		$libelle = "Mettre a jour";
	}
	
	
	


?>

<html>
    <link rel="stylesheet" href="style2.css">
<header>

</header>
<body>

		
	<form action="createUpdate.php" method="get">
	<p>	
		<a href="index.php">Liste des Produits</a>

		<input type="hidden" name="id" value="<?php echo $vapoteuses['Id'];  ?>"/>
		<input type="hidden" name="action" value="<?php echo $action;  ?>"/>
		 <div>
        	<label for="name">Nom de l'article :</label>
        	<input type="text" id="nom" name="name" value="<?php echo $vapoteuses["Nom de l'article"];  ?>">
	    </div>
	    <div>
	        <label for="prenom">Description de l'article</label>
	        <input type="text" id="" name="description" value="<?php echo $vapoteuses["Description de l'article"] ;  ?>">
	    </div>
	    <div>
	        <label for="age">Référence:</label>
	        <input type="text" id="" name="reference" value="<?php echo $vapoteuses['Référence'];  ?>">
	    </div>
	    <div>
	        <label for="">Prix de vente unitaire :</label>
	        <textarea id="" name="prixVente" placeholder=""><?php echo $vapoteuses['Prix de vente unitaire'];  ?></textarea>
	    </div>

        <div>
	        <label for="">Prix d'achat unitaire :</label>
	        <textarea id="" name="prixAchat" placeholder=""><?php echo $vapoteuses["Prix d'achat unitaire"] ;  ?></textarea>
	    </div>


        <div>
	        <label for="">Quantité en stock :</label>
	        <textarea id="" name="quantite" placeholder=""><?php echo $vapoteuses['Quantité en stock'];  ?></textarea>
	    </div>

		<div class="button">
			<button type="submit"><?php echo $libelle;  ?></button>
		</div>
	</p>
	</form>
	<br>

	<?php if ($action!="CREATE") { ?>
	<form action="createUpdate.php" method="get">
		<input type="hidden" name="action" value="DELETE"/>
		<input type="hidden" name="id" value="<?php echo $vapoteuses['Id'];  ?>"/>
		<p>
		<div class="button">
			<button type="submit">Supprimer</button>
		</div>
		</p>
	</form>
	<?php } 
    
    ?>

</body>
</html>