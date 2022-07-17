<?php
//connect to database class
require '../settings/db_class.php';

/**
 *General class to handle all functions
 */
/**
 *@author Papa Kwame Ofori-Asante
 *
 */

class customer_class extends db_connection
{
    //--INSERT--//
	public function reg_new_customer_class($fname,$lname,$uemail,$upass,$country,$gender,
		$cty,$phn,$urole) {
        //open connection
		$this->db_connect();

        //mysql real escape string with database connection check
        $right_fname = mysqli_real_escape_string($this->db, $fname);
		$right_lname = mysqli_real_escape_string($this->db, $lname);
		$right_uemail = mysqli_real_escape_string($this->db, $uemail);
		$right_pass = mysqli_real_escape_string($this->db, $upass);
		$right_country = mysqli_real_escape_string($this->db, $country);
		$right_gender = mysqli_real_escape_string($this->db, $gender);
		$right_cty = mysqli_real_escape_string($this->db, $cty);
		$right_phn = mysqli_real_escape_string($this->db, $phn);
		$right_role = mysqli_real_escape_string($this->db, $urole);

        //insert query for add customer
		$sql = "INSERT INTO customer(customer_fname,customer_lname,customer_email,customer_pass,customer_country,customer_gender,customer_city,customer_contact,user_role) VALUES('$right_fname','$right_lname','$right_uemail',md5('$right_pass'),'$right_country','$right_gender','$right_cty','$right_phn','$right_role')";
		return $this->db_query_escape_string($sql);
        // return $sql;
	}



    //--SELECT--//
    //customer login
	public function customer_log_class($right_email, $right_pass)
	{
        // select username and password
		$sql = "SELECT * FROM customer where customer_email = '$right_email' and customer_pass = md5('$right_pass')";
		// return $sql;
		return $this->db_fetch_one($sql);
	}

}


?>
