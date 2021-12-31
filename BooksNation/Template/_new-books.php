<!--New Books-->
<?php
    shuffle($product_shuffle);
    
    //request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['new_books_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }
?>

<section id="Newbooks">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">New Books</h4>
        <hr>
        <!--Owl carousel-->
        <div class="owl-carousel owl-theme">
        <?php foreach ($product_shuffle as $item) { ?>
            <div class="item py-2 px-2 bg-light">
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?>" alt="product1" class="img-fluid"></a>   <!--Here we are adding banner images for the display-->
                    <div class="text-center">
                        <h6><?php echo $item['item_name'] ?></h6>
                        <div class="rating text-warning font-size-12">   <!--Here we are adding the rating system for the display-->
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">                        <!--This is for the price section-->
                            <span>$<?php echo $item['item_price'] ?></span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1 ?>">
                            <?php
                                if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                }else{
                                    echo '<button type="submit" name="new_books_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
        <!--Owl carousel-->
    </div>
</section>
<!--New Books-->