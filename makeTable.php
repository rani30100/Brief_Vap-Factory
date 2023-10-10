<?php
require_once 'database.php'; // Assurez-vous d'inclure votre fichier de connexion à la base de données ici

try {
    $db = getDatabaseConnexion();
    
    // Définition de la requête SQL pour créer la table
    $sql = "
    CREATE TABLE IF NOT EXISTS Vapoteuses (
        Id INT AUTO_INCREMENT PRIMARY KEY,
        `Nom de l'article` VARCHAR(255) NOT NULL,
        `Description de l'article` TEXT,
        `Référence` VARCHAR(50) NOT NULL,
        `Prix de vente unitaire` DECIMAL(10, 2) NOT NULL,
        `Prix d'achat unitaire` DECIMAL(10, 2) NOT NULL,
        `Quantité en stock` INT NOT NULL
    )";

    // Exécution de la requête
    $db->exec($sql);

    echo "La table 'Vapoteuses' a été créée avec succès.";
} catch (PDOException $e) {
    echo "Erreur lors de la création de la table : " . $e->getMessage();
}
?>
