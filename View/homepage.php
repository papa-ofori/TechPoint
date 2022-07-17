<?php
include("../controllers/product_controller.php");
include("../settings/core.php");
if (ifloggedin()==true){
$admin= check_admin_login();

if ($admin == 1) {
   
    }else{
       
}
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="../images/fevicon/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>TechPoint</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <!-- font awesome style -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />

</head>

<body >

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="#"><span>TechPoint</span></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="testimonial.php">Testimonial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
            <div class="user_optio_box">
              <a href="">

                <!-- logout status -->
                <?php
                if (ifloggedin()==true) {
                  echo "<a href='../login/logout.php'><i class='fa fa-user' aria-hidden='true'>Logout</i></a>";

                  
                }
                //login status
                else{
                  echo "<a href='../login/login.php'><i class='fa fa-user' aria-hidden='true'>Login</i></a>";
                 
                } 
                ?>
              </a>
              <a href="">
                <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></a></i>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="slider_bg_box">
        <img src="../images/wallpaper.jpg" style="width: 100%;" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

          <!-- first slider -->
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Laptops
                    </h1>
                    <p>
                      We provide brands form the tech gaints,Apple,Lenovo,Dell and so many more.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        Products
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- second slider -->
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                     Phones and acessories
                    </h1>
                    <p>
                      Get your quality phone and its acessories right here on TechPoint
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        Products
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Monitors
                    </h1>
                    <p>
                      Monitors ranging grom 24inches to 45inches available  
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        Products
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Discover
                    </h1>
                    <p>
                      View new products
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Affordable prices
                    </h1>
                    <p>
                     Purchase all your tech products at Techpoint. At techpoint We got you covered
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
          <li data-target="#customCarousel1" data-slide-to="3"></li>
          <li data-target="#customCarousel1" data-slide-to="4"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->

  <section class="service_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="../images/feature-1.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Fast Delivery
              </h5>
              <p>
                variations of passages of Lorem Ipsum available
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="../images/feature-2.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Free Shiping
              </h5>
              <p>
                variations of passages of Lorem Ipsum available
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="../images/feature-3.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Best Quality
              </h5>
              <p>
                variations of passages of Lorem Ipsum available
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="../images/feature-4.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                24x7 Customer support
              </h5>
              <p>
                variations of passages of Lorem Ipsum available
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


  <section class='product_section'>
    <div class="container">
      <div class="product_heading">
        <h2>
          Laptops
        </h2>
      </div>
      <!-- container for laptops -->
      <div class='product_container'>
        <?php
        $product_list = get_all_laptops_ctr();
        foreach ($product_list as $product) {

          $pid = $product['product_id'];
          $pname = $product['product_title'];
              // $pbrand = $product['product_brand'];
          $pprice = $product['product_price'];
          $pdesc = $product['product_desc'];
          $pimg = $product['product_image'];
          echo"


          <div class='box'>
          <div class='box-content'>
          <div class='img-box'>
          <img src='../images/$pimg' alt='$pname>
          </div>
          <div class='detail-box'>
          <div class='text'>
          <h6><a href='singleProduct.php?pid=$pid' class='text-dark'>$pname</a>

          </h6>
          <h5>

          <span>Price:</span> GHs$pprice
          </h5>
          </div>
          <div class='like'>
          <h6>
          <a href='singleProduct.php?pid=$pid' class='btn btn-outline-info'>View Product</a>
          </h6>
          <div class='star_container'>
          <i class='fa fa-star' aria-hidden='true'></i>
          <i class='a fa-star' aria-hidden='true'></i>
          <i class='fa fa-star' aria-hidden='true'></i>
          <i class='fa fa-star' aria-hidden='true'></i>
          <i class='fa fa-star' aria-hidden='true'></i>
          </div>
          </div>
          </div>
          </div>
          <div class='btn-box'>
          <a href='../actions/add_to_cart.php?pid=$pid'>
          Add To Cart
          </a>

          </div>

          </div>


          ";

        }

        ?>


      </div>
    </div>
  </div>
</section>
<!-- end laptop section -->


<!-- phones section -->
<section class='product_section'>
  <div class="container">
    <div class="product_heading">
      <h2>
        Phones
      </h2>
    </div>
    <!-- container for phones -->
    <div class='product_container'>
      <?php
      $product_list = get_all_phones_ctr();
      foreach ($product_list as $product) {

        $pid = $product['product_id'];
        $pname = $product['product_title'];
              // $pbrand = $product['product_brand'];
        $pprice = $product['product_price'];
        $pdesc = $product['product_desc'];
        $pimg = $product['product_image'];
        echo"


        <div class='box'>
        <div class='box-content'>
        <div class='img-box'>
        <img src='../images/$pimg' alt='$pname>
        </div>

        <div class='detail-box'>
        <div class='text'>
        <h6><a href='singleProduct.php?pid=$pid' class='text-dark'>$pname</a>

        </h6>
        <h5>

        <span>Price:</span> GHs$pprice
        </h5>
        </div>
        <div class='like'>
        <h6>
        <a href='singleProduct.php?pid=$pid' class='btn btn-outline-info'>View Product</a>
        </h6>
        <div class='star_container'>
        <i class='fa fa-star' aria-hidden='true'></i>
        <i class='a fa-star' aria-hidden='true'></i>
        <i class='fa fa-star' aria-hidden='true'></i>
        <i class='fa fa-star' aria-hidden='true'></i>
        <i class='fa fa-star' aria-hidden='true'></i>
        </div>
        </div>
        </div>
        </div>
        <div class='btn-box'>
        <a href='../actions/add_to_cart.php?pid=$pid'>
        Add To Cart
        </a>

        </div>

        </div>


        ";

      }

      ?>


    </div>
  </div>
</div>
</section>
<!-- end phones section -->


<!-- many more section -->
<section class='product_section'>
  <div class="container">
    <div class="product_heading">
      <h2>
        And Many more
      </h2>
    </div>
    <!-- container for phones -->
    <div class='product_container'>
      <?php
      $product_list = get_all_acessories_ctr();
      foreach ($product_list as $product) {

        $pid = $product['product_id'];
        $pname = $product['product_title'];
              // $pbrand = $product['product_brand'];
        $pprice = $product['product_price'];
        $pdesc = $product['product_desc'];
        $pimg = $product['product_image'];
        echo"


        <div class='box'>
        <div class='box-content'>
        <div class='img-box'>
        <img src='../images/$pimg' alt='$pname>
        </div>
        <div class='detail-box'>
        <div class='text'>
        <h6><a href='singleProduct.php?pid=$pid' class='text-dark'>$pname</a>

        </h6>
        <h5>

        <span>Price:</span> GHs$pprice
        </h5>
        </div>
        <div class='like'>
        <h6>
        <a href='singleProduct.php?pid=$pid' class='btn btn-outline-info'>View Product</a>
        </h6>
        <div class='star_container'>
        <i class='fa fa-star' aria-hidden='true'></i>
        <i class='a fa-star' aria-hidden='true'></i>
        <i class='fa fa-star' aria-hidden='true'></i>
        <i class='fa fa-star' aria-hidden='true'></i>
        <i class='fa fa-star' aria-hidden='true'></i>
        </div>
        </div>
        </div>
        </div>
        <div class='btn-box'>
        <a href='../actions/add_to_cart.php?pid=$pid'>
        Add To Cart
        </a>

        </div>

        </div>


        ";

      }

      ?>


    </div>
  </div>
</div>
</section>

<!-- end product section -->


  <!-- end product section -->

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <!-- client section -->
  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
      </div>
    </div>
    <div id="customCarousel2" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="../images/client.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Morojink
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore eu fugia
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="../images/client.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Morojink
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore eu fugia
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="../images/client.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Morojink
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore eu fugia
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#customCarousel2" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel2" data-slide-to="1"></li>
        <li data-target="#customCarousel2" data-slide-to="2"></li>
      </ol>
    </div>
  </section>
  <!-- end client section -->


  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_logo">
        <h2>
          HandTime
        </h2>
      </div>
      <div class="row">

        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              About Shop
            </h5>
            <div>
              <div class="img-box">
                <img src="../images/location-white.png" width="18px" alt="">
              </div>
              <p>
                Address
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="../images/telephone-white.png" width="12px" alt="">
              </div>
              <p>
                +01 1234567890
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="../images/envelope-white.png" width="18px" alt="">
              </div>
              <p>
                demo@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Informations
            </h5>
            <p>
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_insta">
            <h5>
              Instagram
            </h5>
            <div class="insta_container">
              <div class="row m-0">
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="../images/mac.jpg" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="../images/payment.jpg" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="../images/s21.jpg" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="../images/quality.jpg" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="../images/beats.jpg" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="../images/llp.jpg" alt="">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <img src="../images/fb.png" alt="">
              </a>
              <a href="">
                <img src="../images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="../images/linkedin.png" alt="">
              </a>
              <a href="">
                <img src="../images/youtube.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <!-- custom js -->
  <script type="text/javascript" src="../js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>