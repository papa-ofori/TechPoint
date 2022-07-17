<?php
//connect to the controller
require '../controllers/customer_controller.php';
include("../settings/core.php");
// // check_login_index();
// $adminn = check_admin_login();
// if ($adminn == 1) {
//     // code...
// } else {

// }

//checks
if (isset($_POST['logBtn'])) {
    //get user register details
    $right_email = $_POST['uemail'];
    $right_pass = $_POST['upass1'];

    //select controller
    $check = select_customer_ctr($right_email, $right_pass);

    if ($check) {
        //set session
        session_start();
        // print_r($check);
        $_SESSION['cid'] = $check['customer_id'];
        $_SESSION['role'] = $check['user_role'];

        // see if is admin
        check_login_index();
        $adminn = check_admin_login();
        if ($adminn == 1) {
        // code...
            header('location:../admin/Brand.php');
        } else {
             // code...
            header('location:../View/homepage.php');

        }


    } 



    else {
        
        echo "<script>alert('Email or Password is Wrong')</script>";
        // header('location:login.php');

    }
}
?>
