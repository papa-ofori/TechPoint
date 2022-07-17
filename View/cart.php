<?php
include("../controllers/cart_controller.php");
include("../settings/core.php");
include("cartnav.php");
$cartlist=view_cart_ctr();
//for the number of items in the cart
$cid= get_id();
$total= select_total_qty_from_cart_ctr($cid);
$total=$total[0];
$total1=$total['SUM(qty)'];

// total price controller
$overall_price = select_total_price_ctr($cid);
$overall_price = $overall_price[0];
$overall_price_a = $overall_price['SUM(products.product_price*cart.qty)'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Carts</title>
    <link rel='stylesheet' type='text/css' href='../css/checkout.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>

<body style="background-image:url(../images/wall.jpg);">
    
<div class='card'>
            <div class='row'>
                <div class='col-md-8 cart'>
                    <div class='title'>
                        <div class='row'>
                            <div class='col'><h4><b>Shopping Cart</b></h4></div>
                            <div class='col align-self-center text-right text-muted'>TechPoint</div>
                        </div>
                    </div> 
                      <?php
                    foreach ($cartlist as $oneproduct) {
                    $product_id = $oneproduct['product_id'];
                    $product_title = $oneproduct['product_title'];
                    $product_price = $oneproduct['product_price'];
                    $product_image = $oneproduct['product_image'];
                    $product_qty=  $oneproduct['qty'];
                    $itemtotal_price= $product_price * $product_qty;
                    
                    if($product_qty ==1){
                        echo"   
                    <div class='row border-top border-bottom'>
                        <div class='row main align-items-center'>
                            <div class='col-2'><img class='img-fluid' src='../images/$product_image' style='margin-left: 20px;'></div>
                            <div class='col'>
                                <div class='row'>$product_title</div>
                            </div>
                            <div class='col'>
                                <a href='../actions/manage_cart_quantity.php?decrease=$product_id'>-</a><a href='#' class='border'>$product_qty</a><a href='../actions/manage_cart_quantity.php?update1=$product_id'>+</a>
                            </div>
                            <div class='col'>GHs$product_price <span class='close'><a href='../actions/remove_from_cart.php?delete=$product_id'>&#10005;</a></span></div>
                        </div>
                    </div>
                    ";
                    }
                    else {

                        echo"<div class='row border-top border-bottom'>
                        <div class='row main align-items-center'>
                            <div class='col-2'><img class='img-fluid' src='../images/$product_image' style='margin-left:20px;'></div>
                            <div class='col'>
                                <div class='row'>$product_title</div>
                            </div>
                            <div class='col'>
                                <a href='../actions/manage_cart_quantity.php?decrease=$product_id'>-</a><a href='#' class='border'>$product_qty</a><a href='../actions/manage_cart_quantity.php?update1=$product_id'>+</a>
                            </div>
                             <div class='col'>GHs$product_price <span class='close'><a href='../actions/remove_from_cart.php?delete=$product_id' >&#10005;</a></span></div>
                        </div>
                    </div>
                    ";
                }
                   
                }
                ?>
                    <div class='back-to-shop'><a href='products.php'>&leftarrow;</a><span class='text-muted'>Back to shop</span></div>
                </div>
                <div class='col-md-4 summary'>
                    <div style=" min-height: 400px; width: 300px;  ">
            <div class="container" style="margin-top: 40px;">
                <div class="card"style="margin-top: -50px;" >
                    <div class="card-header"><h4>Cart Summary</h4> </div>
                    <div class="card-body">
                        <?php
                        foreach ($cartlist as $oneproduct) {

                            $product_title = $oneproduct['product_title'];
                            $product_price = $oneproduct['product_price'];
                            $product_qty=  $oneproduct['qty'];
                            $itemtotal_price= $product_price * $product_qty;
                            echo "<h6 style='margin-top:-10px;'>$product_title ($product_qty):</h6> <h6> GHS $itemtotal_price</h6> <br>";
                        }

                        ?>

                        <?php

                        echo"<h6>Subtotal: $total1 items</h6> <h6>Total Price:GHS $overall_price_a</h6> <br>";

                        ?>
                    </div> 
                    <div class="card-footer" style="height: 30px;">
                        <a href='payment.php' class='btn btn-success'style="margin-top:-100px;">Check Out</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
</body>
</html>