<?php
//connect to the controller
require '../controllers/product_controller.php';

//checks
if (isset($_POST['editBtn'])) {
    //get user register details

    $cid = $_POST['Cid'];
    $cname = $_POST['cnamee'];
    

    //insert new customer controler
    $check = update_cat_ctr($cid, $cname);

    //method check
    if ($check) {
        echo "<script>alert('Updated Sucessfully')</script>";
        header('location:../admin/Categories.php');
    } 
    
} else {
    echo 'Error! Did not update';
}
