<?php
include("../controllers/product_controller.php");
include("adminnavbar.php");
include("../settings/core.php");
check_login_index();
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="../css/sign.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css ">
    <title>Add Product</title>
</head>

<body>
   <form id="form" action="../functions/addProduct.php" method="POST" enctype="multipart/form-data" style="background-image: url(../images/wall.jpg);">
    <div class="form_wrapper" style="margin-top:-640px;" >
        <div class="form_container">
            <div class="title_container">
                <h2>Add Product</h2>
            </div>
            <div class="input_field select_option">
               <select name="pcat" id="pcat">
                <option>Select Category</option>
                <?php 
                $cat_list = get_all_cat_ctr();
                if ($cat_list) {

                    //found
                  foreach ($cat_list as $cat) {
                    $cat_id = $cat['cat_id'];
                    $cat_name = $cat['cat_name'];

                    echo "<option value='$cat_id' >$cat_name</option>";
                }
            }else{
                        //no category found
              echo "<option value='no_found'>No Categories found</option>";
          }
          ?>
      </select>
      <div class="select_arrow"></div>

  </div>


  <div class="input_field select_option">
    <select name="pbrand" id="pbrand">
    <option>Select Brand</option>
    <?php 
    $brand_list = get_all_brands_ctr();
    if ($brand_list) {
            // course found
      foreach ($brand_list as $one_brand) {
        $brand_id = $one_brand['brand_id'];
        $brand_name = $one_brand['brand_name'];
        echo "<option value='$brand_id' >$brand_name</option>";
    }
}else{
        //no course found
  echo "<option value='no_found'>No Brand found</option>";
}
?>
</select>
<div class="select_arrow"></div>

</div>



<!-- Product Title -->
<div class="input_field">
    <input type="text" name="ptitle" id="ptitle" placeholder="Product Title" required />
</div>

<!-- Product Prize -->
<div class="input_field">
    <input type="text" name="pprice" id="pprice" placeholder="Product prize in Ghs" required />
</div>

<!-- Product name -->
<div class="input_field">
    <input type="text" name="pdesc" id="pdesc" placeholder="Product Description" required />
</div>

<!-- Product Keyword -->
<div class="input_field">
    <input type="text" name="pkey" id="pkey" placeholder="Product Keywords" required />
</div>


<center>
    <!-- Product Image -->
    <div class="input_field">
        <label><p>Upload Image<p></label>
            <input type="file" name="pimg" id="pimg" placeholder="Product Image">
        </div>

        <input class="button" type="submit" name="addProdBtn" style="width:70px;" value="Add" />
    </center>

</div>

</form>
</div>
</div>
</div>
</body>

</html>