<?php
require 'config.php';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h1>Application simple déployée avec Ansible !</h1>";
    echo "<p>Connexion à la base de données réussie.</p>";

} catch (PDOException $e) {
    echo "<h1>Erreur de connexion : </h1>" . $e->getMessage();
}
?>
<link rel="stylesheet" href="style.css">
