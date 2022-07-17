<?php
require("../controllers/product_controller.php");

if(isset($_POST['del'])){
    $Prod_id =$_POST['pid'];
    
    delete_product_ctr($Prod_id);
    header('Location: ../admin/Products.php');
}

?>