<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    require_once "includes/pdo.php";

    $sql = "INSERT INTO product (nom, code, created_by) VALUES (:nom, :code, :create_by)";

    $query = $db->prepare($sql);

    $query->bindValue('nom', $_POST["nom"]);
    $query->bindValue('code', $_POST["code"]);
    $query->bindValue('create_by', $_SESSION["security"]["id"]);

    if (!$query->execute()) {
        dump($db->errorInfo());
        die('Veuillez contacter machin avec le code erreur 315647861');
    }
}
