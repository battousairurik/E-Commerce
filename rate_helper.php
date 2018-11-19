<!--
Project Title: E-Commerce
Version: 1.5
Authors: Fredrick Ondieki, Michael Weaver
Date Updated: 11/17/2018
Description: Page helper used to insert the product rating into the database
-->

<?php
require_once 'db.php';

if (isset($_GET['product'], $_GET['rating'])){
    $product = (int)$_GET['product'];
    $rating = (int)$_GET['rating'];

    if(in_array($rating, [1,2,3,4,5])){
        $exists = $db->query("SELECT id FROM products WHERE id = {$product}")->num_rows ? true:false;
        if ($exists){
            $db->query("INSERT INTO product_ratings(product_id, rating) VALUES ({$product}, {$rating})" );
        }
    }

    header('Location: item.php?id=' . $product);
}