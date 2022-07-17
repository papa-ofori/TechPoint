<?php
//connect to the user account class
include '../classes/customer_class.php';

//--INSERT--//
// insert new customer(sign up)

function insert_new_customer_ctr($right_fname,$right_lname,$right_uemail,$right_pass,$right_country,$right_gender,$right_cty,$right_phn,$right_role){
    $add_customer = new customer_class();
    return $add_customer->reg_new_customer_class($right_fname,$right_lname,$right_uemail,$right_pass,$right_country,$right_gender,$right_cty,$right_phn,$right_role);
}

//--SELECT--//
// customer login
function select_customer_ctr($right_email, $right_pass)
{
    $select_customer = new customer_class();
    return $select_customer->customer_log_class($right_email, $right_pass);
}



?>
