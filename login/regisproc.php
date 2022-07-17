<?php
//connect to the controller
require '../controllers/customer_controller.php';
//echo("i am in the processing page");

//checks
if (isset($_POST['regBtn'])) {
    //get user register details
        $right_fname = $_POST['fname'];
        $right_lname =$_POST['lname'];
        $right_uemail = $_POST['uemail'];
        $right_pass = $_POST['upass1'];
        $right_country = $_POST['country'];
        $right_gender = $_POST['radiogroup1'];
        $right_cty = $_POST['cty'];
        $right_phn = $_POST['phn'];
        $right_role = 2;

    //insert new customer controler
    $check = insert_new_customer_ctr($right_fname,$right_lname,$right_uemail,$right_pass,$right_country,$right_gender,$right_cty,$right_phn,$right_role);
    //print_r($right_phn,$right_country);

    //method check
    if ($check) {
        echo "<script>alert('Inserted Sucessfully')</script>";
        header('location:login.php');
    } 
    
} else {
    echo 'No post found';
}
