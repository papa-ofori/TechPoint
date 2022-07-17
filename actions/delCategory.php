<?php
require("../controllers/product_controller.php");

if(isset($_POST['del'])){
    $cat_id =$_POST['cid'];
    
    delete_category_ctr($cat_id);
    header('Location: ../admin/Categories.php');
}

?>