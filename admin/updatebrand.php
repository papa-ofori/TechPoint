<?php
include("../controllers/product_controller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="../css/sign.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css ">
    <title>Responsive Contact Form HTML | CSS</title>
</head>
<?php 
$get_id = $_GET['Bid'];
$one_brand = get_one_brand_ctr($get_id);
?>
<body style="background-image:url('../images/wallpaper.jpg');">
    <div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                <h2>Login</h2>
            </div>
            <div class="row clearfix">
                <div class="">
                    <form action="../actions/update_brand.php" method="POST" >

                        <!-- customer brand -->
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            <input type="hidden" name="Bid" id="Bid"  value="<?php echo $one_brand['brand_id'];?>">
                        </div>

                        <!-- brand name -->
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                           <input type="text" name="bnamee"id="bnamee" value="<?php echo $one_brand['brand_name']; ?>">
                        </div>
                                             
                        <input class="button" type="submit"name="editBtn" value="Update">
                        <a class ='btn btn-danger' href='../admin/Brand.php'>Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>