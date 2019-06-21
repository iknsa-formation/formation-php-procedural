<?php

require_once "includes/CreateProduct.php";

?>

<form action="/index.php/product" method="post" novalidate>
    <div>
        <label for="nom">Name</label>
        <input type="text" id="nom" name="nom">
    </div>

    <div>
        <label for="code">Code barre</label>
        <input type="text" id="code" name="code">
    </div>

    <div>
        <label for="created_by">Créer par : </label>
        <span><?= $_SESSION["security"]["id"]; ?></span>
    </div>

    <input type="submit">
</form>
