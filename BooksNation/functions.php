<?php
//require MySql connection
require ('Database/DBController.php');
//DBController object

//require Product Class
require ('Database/Product.php');

// require Cart Class
require ('database/Cart.php');

//DBController object
$db = new DBController();

//Product object
$product = new Product($db);
$product_shuffle = $product->getData();

//Cart object
$Cart = new Cart($db);