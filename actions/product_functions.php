<?php
include("../controllers/product_controller.php");

$productlist=get_all_product_ctr();
if (isset($_GET['pid'])) {
    //product list id
    $pid= $_GET['pid'];
    $product_list=get_one_product_ctr($pid);
    
    $product_cat= $product_list['product_cat'];
    $product_brand= $product_list['product_brand'];
    $bname=get_one_brand_ctr($product_brand);
    $cname=get_one_category_ctr($product_cat);
    $product_title= $product_list['product_title'];
    $product_price= $product_list['product_price'];
    $product_desc= $product_list['product_desc'];
    $product_img= $product_list['product_image'];
    $product_keywords= $product_list['product_keywords'];
    # code...
}

function cart_count(){
    $cid= get_id();
    $total= select_total_qty_from_cart_ctr($cid);
    $total=$total[0];
    $total_a=$total['SUM(qty)'];
    return $total_a;
}

?>