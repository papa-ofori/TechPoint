<?php
//connect the controller
require("../controllers/product_controller.php");

//check for 
if (isset($_POST['addProdBtn'])){
	$target_dir = "../images/";
	$target= $target_dir.basename($_FILES['pimg']['name']);
	$pcat = ($_POST['pcat']);
	$pbrand = ($_POST['pbrand']);
	$ptitle = ($_POST['ptitle']);
	$pprice = ($_POST['pprice']);
	$pdesc = ($_POST['pdesc']);
	$pimg = ($_FILES['pimg']['name']);
	$pkey = ($_POST['pkey']);

	

	//call a controller
	$check = insert_product_ctr($pcat,$pbrand,$ptitle,$pprice,$pdesc,$pimg,$pkey);

	if ($check){
		header("location:../admin/Products.php");
		if(move_uploaded_file($_FILES['pimg']['tmp_name'], $target)){

		}
		else{
			echo"failed";
		}
	} else {
		echo "Insertion failed";
	}

}


?>
