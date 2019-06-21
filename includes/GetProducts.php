<?php

require_once "includes/pdo.php";

$query = $db->query("SELECT * FROM product");
$products = $query->fetchAll($db::FETCH_ASSOC);