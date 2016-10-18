<?php

function insertProdCat($pdo, $catName) {
    $table = 'wa_product_categories';

    $stmt = $pdo->prepare("INSERT INTO $table (CATEGORY_NAME) VALUES (:catName)");
    $stmt->bindParam(':catName', $catName);
    $stmt->execute();
}

function getProdCatList($pdo) {
    $table = 'wa_product_categories';

    $stmt = $pdo->prepare("SELECT * FROM $table");
    $stmt->execute();
    $cats = $stmt->fetchAll();
    return $cats;
}

function deleteProdCat($pdo, $catID) {
    $table = 'wa_product_categories';

    $stmt = $pdo->prepare("DELETE FROM $table WHERE ID = :catID");
    $stmt->bindParam(':catID', $catID);
    $stmt->execute();
}

function updateProdCat($pdo, $catID, $newName) {
    $table = 'wa_product_categories';

    $stmt = $pdo->prepare("UPDATE $table set CATEGORY_NAME = :newName WHERE ID = :catID");
    $stmt->bindParam(':catID', $catID);
    $stmt->bindParam(':newName', $newName);
    $stmt->execute();
}

?>
