<?php
require("../controllers/product_controller.php");

if(isset($_POST['del'])){
    $brand_id =$_POST['bid'];
    
    delete_brand_ctr($brand_id);
    header('Location: ../admin/Brand.php');
}

?>