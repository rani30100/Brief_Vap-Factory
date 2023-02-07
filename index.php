<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Base de données Vapoteuses</h1>
    <?php

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

$title = $query->fetchAll(PDO::FETCH_OBJ);

var_dump($title);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";

}
?>


</body>
</html>