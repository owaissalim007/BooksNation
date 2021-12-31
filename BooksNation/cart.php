<?php
ob_start();
//include header.php file
include('header.php');

?>

<?php

//include cart items if it is not empty
count($product->getData('cart')) ? include('Template/_cart.php'):include('Template/NotFound/_cart_not_found.php');
//include _products1.php file


//include cart items if it is not empty
count($product->getData('wishlist')) ? include('Template/_wishlist_template.php'):include('Template/NotFound/_wishlist_not_found.php');
//include _products1.php file


//include _top-sale.php file
include('Template/_new-books.php');
//include _top-sale.php file
?>



<?php
//include footer.php file
include('footer.php');
?>