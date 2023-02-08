<?php 

include 'fonctionsSQL.php';
if ( isset( $_GET['submit'] )){

        $name = $_GET["name"] ;
        $description = $_GET["description"] ;
        $reference = $_GET["reference"] ;
        $prixVente = $_GET["prixVente"] ;
        $prixAchat = $_GET["prixAchat"] ;
        $quantite = $_GET["quantite"] ;
    
        

        echo '<p>'. $description.'</p>' . "\n";
        echo '<p>'. $reference .'</p>'. "\n";
        echo '<p>'. $prixVente .'</p>'. "\n";
        echo '<p>'.$prixAchat .'</p>'. "\n";
        echo '<p>'.$quantite.'</p>'. "\n";
}
createProduct($name, $description, $reference, $prixVente, $prixAchat, $quantite);
?>

<a href="index.php"><input type="button" value="Page principale"></input></a>