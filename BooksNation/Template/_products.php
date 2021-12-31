<!-- Product -->
<?php


$item_id = $_GET['item_id'] ?? 1;
foreach ($product->getData() as $item) :
    if ($item['item_id'] == $item_id) :
        //request method post
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if (isset($_POST['book_submit'])){
                // call method addToCart
                $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
            }
        }

?>
<section id="product">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?>" width="300px" alt="product" class="img-fluid" style="margin-top: 10px; margin-left: 120px;">
                <div class="form-row pt-4 font-size-16 font-ptsans">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                    </div>
                    <div class="col">
                    <?php
                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
                        }else{
                            echo '<button type="submit" name="book_submit" class="btn btn-warning font-size-16 form-control">Add to Cart</button>';
                        }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-ptsans font-size-20"><?php echo $item['item_name'] ?></h5>
                <small>by <?php echo $item['item_brand'] ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered questions</a>
                </div>
                <hr class="m-0">

                <!---    product price       -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P:</td>
                        <td><strike>$162.00</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price:</td>
                        <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You Save:</td>
                        <td><span class="font-size-16 text-danger">$152.00</span></td>
                    </tr>
                </table>
                <!--- /product price -->

                <!-- policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">BooksNation <br>Deliverd</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                        </div>
                    </div>
                </div>
                <!-- /policy -->
                <hr>

                <!-- order-details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by : Mar 29  - Apr 1</small>
                    <small>Sold by <a href="#">BooksNation </a>(4.5 out of 5 | 18,198 ratings)</small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                </div>
                <!-- /order-details -->

                <div class="row">
                    <div class="col-6">
                        <!-- product qty section -->
                        <div class="qty d-flex">
                            <h6 class="font-ptsans">Qty</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- /product qty section -->
                    </div>
                </div>
            </div>

            <div class="col-12 py-5">
                <h6 class="font-rubik">Product Description</h6>
                <hr>
                <p class="font-rale font-size-14">Some people are good at taking decisions. I am not one of them. Some people fall asleep quickly at night. I am not one of them either.
                    It is three in the morning. I have tossed and turned in bed for two hours. I am to get married in fifteen hours. We have two hundred guests in the hotel,
                    here to attend my grand destination wedding. I brought them here.</p>
                <p class="font-rale font-size-14">Everyone is excited. It is the first destination wedding in the Mehta family.
                    I am the bride. I should get my beauty sleep. I can’t. The last thing I care about right now is beauty. The only thing I care about is how to get out of this mess.
                    Because like what often happens to me in life, here I am yet again in a situation where I don’t know what the fuck is going on.</p>
            </div>
        </div>
    </div>
</section>
<?php
        endif;
        endforeach;
?>
<!-- /Product -->