<?php
include("../controllers/product_controller.php");
include("../settings/core.php");
check_login_index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Categories Page</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/jaca90/pen/vZJZMx?depth=everything&order=popularity&page=10&q=statistics&show_forks=false" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/brand.css">

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
<style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700&subset=latin-ext");
html, body {
  height: 100%;
  width: 100%;
}

body {
  margin: 0;
  padding: 0;
  font-family: "Open Sans";
  font-size: 14px;
  font-weight: 400;
  overflow: hidden;
  background-color: #ececec;
  color: #102c58;
}

* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

::-webkit-input-placeholder {
  color: #c3c3c3;
}

h1 {
  font-size: 24px;
}

h2 {
  font-size: 20px;
}

h3 {
  font-size: 18px;
}

.u-list {
  margin: 0;
  padding: 0;
  list-style: none;
}

.u-input {
  outline: 0;
  border: 1px solid #d0d0d0;
  padding: 5px 10px;
  height: 35px;
  font-size: 12px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  background-clip: padding-box;
}

.c-badge {
  font-size: 10px;
  font-weight: 700;
  min-width: 17px;
  padding: 5px 4px;
  border-radius: 100px;
  display: block;
  line-height: 0.7;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #f91605;
}
.c-badge--header-icon {
  position: absolute;
  bottom: -9px;
}

.tooltip {
  width: 120px;
}
.tooltip-inner {
  padding: 8px 10px;
  color: #fff;
  text-align: center;
  background-color: #051835;
  font-size: 12px;
  border-radius: 3px;
}
.tooltip-arrow {
  border-right-color: #051835 !important;
}

.hamburger-toggle {
  position: relative;
  padding: 0;
  background: transparent;
  border: 1px solid transparent;
  cursor: pointer;
  order: 1;
}
.hamburger-toggle [class*='bar-'] {
  display: block;
  background: #102c58;
  -webkit-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .2s ease all;
  transition: .2s ease all;
  border-radius: 2px;
  height: 2px;
  width: 24px;
  margin-bottom: 4px;
}
.hamburger-toggle [class*='bar-']:nth-child(2) {
  width: 18px;
}
.hamburger-toggle [class*='bar-']:last-child {
  margin-bottom: 0;
  width: 12px;
}
.hamburger-toggle.is-opened {
  left: 3px;
}
.hamburger-toggle.is-opened [class*='bar-'] {
  background: #102c58;
}
.hamburger-toggle.is-opened .bar-top {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  -webkit-transform-origin: 15% 15%;
  transform-origin: 15% 15%;
}
.hamburger-toggle.is-opened .bar-mid {
  opacity: 0;
}
.hamburger-toggle.is-opened .bar-bot {
  -webkit-transform: rotate(45deg);
  transform: rotate(-45deg);
  -webkit-transform-origin: 15% 95%;
  transform-origin: 15% 95%;
  width: 24px;
}
.hamburger-toggle:focus {
  outline-width: 0;
}
.hamburger-toggle:hover [class*='bar-'] {
  background: #f5642d;
}

.header-icons-group {
  display: flex;
  order: 3;
  margin-left: auto;
  height: 100%;
  border-left: 1px solid #cccccc;
}
.header-icons-group .c-header-icon:last-child {
  border-right: 0;
}

.c-header-icon {
  position: relative;
  display: flex;
  float: left;
  width: 70px;
  height: 100%;
  align-items: center;
  justify-content: center;
  line-height: 1;
  cursor: pointer;
  border-right: 1px solid #cccccc;
}
.c-header-icon i {
  font-size: 18px;
  line-height: 40px;
}
.c-header-icon--in-circle {
  border: 1px solid #d0d0d0;
  border-radius: 100%;
}
.c-header-icon:hover i {
  color: #f5642d;
}

.l-header {
  padding-left: 70px;
  position: fixed;
  top: 0;
  right: 0;
  z-index: 10;
  width: 100%;
  background: #ffffff;
  -webkit-transition: padding 0.5s ease-in-out;
  -moz-transition: padding 0.5s ease-in-out;
  -ms-transition: padding 0.5s ease-in-out;
  -o-transition: padding 0.5s ease-in-out;
  transition: padding 0.5s ease-in-out;
}
.l-header__inner {
  height: 100%;
  width: 100%;
  display: flex;
  height: 70px;
  align-items: center;
  justify-content: stretch;
  border-bottom: 1px solid;
  border-color: #cccccc;
}
.sidebar-is-expanded .l-header {
  padding-left: 220px;
}

.c-search {
  display: flex;
  height: 100%;
  width: 350px;
}
.c-search__input {
  border-top-right-radius: 0px;
  border-bottom-right-radius: 0px;
  border-right: 0;
  flex-basis: 100%;
  height: 100%;
  border: 0;
  font-size: 14px;
  padding: 0 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.c-dropdown {
  opacity: 0;
  text-align: left;
  position: absolute;
  flex-direction: column;
  display: none;
  width: 300px;
  top: 30px;
  right: -40px;
  background-color: #fff;
  overflow: hidden;
  min-height: 300px;
  border: 1px solid #d0d0d0;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  background-clip: padding-box;
  -webkit-box-shadow: 0px 5px 14px -1px #cecece;
  -moz-box-shadow: 0px 5px 14px -1px #cecece;
  box-shadow: 0px 5px 14px -1px #cecece;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.l-sidebar {
  width: 70px;
  position: absolute;
  z-index: 10;
  left: 0;
  top: 0;
  bottom: 0;
  background: #102c58;
  -webkit-transition: width 0.5s ease-in-out;
  -moz-transition: width 0.5s ease-in-out;
  -ms-transition: width 0.5s ease-in-out;
  -o-transition: width 0.5s ease-in-out;
  transition: width 0.5s ease-in-out;
}
.l-sidebar .logo {
  width: 100%;
  height: 70px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #051835;
}
.l-sidebar .logo .logo__txt {
  font-size: 26px;
  line-height: 1;
  color: #fff;
  text-align: center;
  font-weight: 700;
}
.l-sidebar__content {
  height: 100%;
  position: relative;
}
.sidebar-is-expanded .l-sidebar {
  width: 220px;
}

.c-menu > ul {
  display: flex;
  flex-direction: column;
}
.c-menu > ul .c-menu__item {
  color: #fff;
  max-width: 100%;
  overflow: hidden;
}
.c-menu > ul .c-menu__item__inner {
  display: flex;
  flex-direction: row;
  align-items: center;
  min-height: 60px;
  position: relative;
  cursor: pointer;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}
.c-menu > ul .c-menu__item__inner:before {
  position: absolute;
  content: " ";
  height: 0;
  width: 2px;
  left: 0;
  top: 50%;
  margin-top: -18px;
  background-color: #5f9cfd;
  opacity: 0;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}
.c-menu > ul .c-menu__item.is-active .c-menu__item__inner {
  border-left-color: #5f9cfd;
  background-color: #1e3e6f;
}
.c-menu > ul .c-menu__item.is-active .c-menu__item__inner i {
  color: #5f9cfd;
}
.c-menu > ul .c-menu__item.is-active .c-menu__item__inner .c-menu-item__title span {
  color: #5f9cfd;
}
.c-menu > ul .c-menu__item.is-active .c-menu__item__inner:before {
  height: 36px;
  opacity: 1;
}
.c-menu > ul .c-menu__item:not(.is-active):hover .c-menu__item__inner {
  background-color: #f5642d;
  border-left-color: #f5642d;
}
.c-menu > ul .c-menu__item i {
  flex: 0 0 70px;
  font-size: 18px;
  font-weight: normal;
  text-align: center;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}
.c-menu > ul .c-menu__item .c-menu-item__expand {
  position: relative;
  left: 100px;
  padding-right: 20px;
  margin-left: auto;
  -webkit-transition: all 1s ease-in-out;
  -moz-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
  -o-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
}
.sidebar-is-expanded .c-menu > ul .c-menu__item .c-menu-item__expand {
  left: 0px;
}
.c-menu > ul .c-menu__item .c-menu-item__title {
  flex-basis: 100%;
  padding-right: 10px;
  position: relative;
  left: 220px;
  opacity: 0;
  -webkit-transition: all 0.7s ease-in-out;
  -moz-transition: all 0.7s ease-in-out;
  -ms-transition: all 0.7s ease-in-out;
  -o-transition: all 0.7s ease-in-out;
  transition: all 0.7s ease-in-out;
}
.c-menu > ul .c-menu__item .c-menu-item__title span {
  font-weight: 400;
  font-size: 14px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}
.sidebar-is-expanded .c-menu > ul .c-menu__item .c-menu-item__title {
  left: 0px;
  opacity: 1;
}
.c-menu > ul .c-menu__item .c-menu__submenu {
  background-color: #051835;
  padding: 15px;
  font-size: 12px;
  display: none;
}
.c-menu > ul .c-menu__item .c-menu__submenu li {
  padding-bottom: 15px;
  margin-bottom: 15px;
  border-bottom: 1px solid;
  border-color: #072048;
  color: #5f9cfd;
}
.c-menu > ul .c-menu__item .c-menu__submenu li:last-child {
  margin: 0;
  padding: 0;
  border: 0;
}

main.l-main {
  width: 100%;
  height: 100%;
  padding: 70px 0 0 70px;
  -webkit-transition: padding 0.5s ease-in-out;
  -moz-transition: padding 0.5s ease-in-out;
  -ms-transition: padding 0.5s ease-in-out;
  -o-transition: padding 0.5s ease-in-out;
  transition: padding 0.5s ease-in-out;
}
main.l-main .content-wrapper {
  padding: 25px;
  height: 100%;
}
main.l-main .content-wrapper .page-content {
  border-top: 1px solid #d0d0d0;
  padding-top: 25px;
}
main.l-main .content-wrapper--with-bg .page-content {
  background: #fff;
  border-radius: 3px;
  border: 1px solid #d0d0d0;
  padding: 25px;
}
main.l-main .page-title {
  font-weight: 400;
  margin-top: 0;
  margin-bottom: 25px;
}
.sidebar-is-expanded main.l-main {
  padding-left: 220px;
}
</style></head><body>
  














<body class="sidebar-is-reduced">
  <header class="l-header">
    <div class="l-header__inner clearfix">
      <div class="c-header-icon js-hamburger">
        <div class="hamburger-toggle"><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></div>
      </div>
      <div class="c-header-icon has-dropdown"><span class="c-badge c-badge--header-icon animated shake">87</span><i class="fa fa-bell"></i>
        <div class="c-dropdown c-dropdown--notifications">
          <div class="c-dropdown__header"></div>
          <div class="c-dropdown__content"></div>
        </div>
      </div>
      <div class="c-search">
        <input class="c-search__input u-input" placeholder="Search..." type="text"/>
      </div>
      <div class="header-icons-group">
        
        <div class="c-header-icon logout"><a href="../login/logout.php"><i class="fa fa-power-off"></i></a></div>
      </div>
    </div>
  </header>
  <div class="l-sidebar">
    <div class="logo">
      <div class="logo__txt">TP</div>
    </div>
    <div class="l-sidebar__content">
      <nav class="c-menu js-menu">
        <ul class="u-list">
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Statistics">
            <div class="c-menu__item__inner"><i class="fa fa-bar-chart"></i>
              <div class="c-menu-item__title"><a><a style="color:white;" href="Brand.php">Brands</a></span></div>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Statistics">
            <div class="c-menu__item__inner"><i class="fa fa-bar-chart"></i>
              <div class="c-menu-item__title"><a><a style="color:white;" href="Categories.php">Categories</a></span></div>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Statistics">
            <div class="c-menu__item__inner"><i class="fa fa-bar-chart"></i>
              <div class="c-menu-item__title"><a><a style="color:white;" href="Products.php">Products</a></span></div>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Statistics">
            <div class="c-menu__item__inner"><i class="fa fa-bar-chart"></i>
              <div class="c-menu-item__title"><a><a style="color:white;" href="allProducts.php">All Products</a></span></div>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</body>



<!-- Categories crud -->
<body style="overflow-y:scroll;">>
	<div class="container" style="width:700px">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-sm-6">
							<h2>Category</h2>
						</div>
						<div class="col-sm-6">
							<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Category</span></a>		
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>

						<th>ID</th>
						<th>Name</th>
						<th style="width:200px;">Action</th>
					</tr>
				</thead>
				<tbody>
					<div style="overflow-y: scroll;">
					<?php
					$cat_list = get_all_cat_ctr();
					foreach ($cat_list as $cat) {
						$cid = $cat['cat_id'];
						$cname = $cat['cat_name'];
					    echo"
					    <tr>
					    <td>$cid</td>
						<td>$cname</td>
						<td>
							<a class ='btn btn-primary btn-sm' href='updateCategory.php?Cid=$cid''>Update</a>
						    <form action='../actions/delCategory.php' method='POST'>
                <input type='hidden' value='$cid' name='cid'>
                 <button type='submit' name='del' style='margin-top:-53px; margin-left:73px;' class='btn btn-danger btn-sm remove'>Delete</button>
                 </form>
						</td>
					</tr>";
					}

					?>
					</div>
				</tbody>
			</table>
			
		</div>
	</div>        
</div>
<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog" style="margin-left: -240px;">
		<div class="modal-content">


			<!-- Add product form -->
			<form action="../functions/add_category.php" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Add Category</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="cname" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add" name="addCat">
				</div>
			</form>


		</div>
	</div>
</div>



<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script src='https://use.fontawesome.com/2188c74ac9.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script >"use strict";

var Dashboard = function () {
  var global = {
    tooltipOptions: {
      placement: "right"
    },
    menuClass: ".c-menu"
  };

  var menuChangeActive = function menuChangeActive(el) {
    var hasSubmenu = $(el).hasClass("has-submenu");
    $(global.menuClass + " .is-active").removeClass("is-active");
    $(el).addClass("is-active");

    // if (hasSubmenu) {
    //  $(el).find("ul").slideDown();
    // }
  };

  var sidebarChangeWidth = function sidebarChangeWidth() {
    var $menuItemsTitle = $("li .menu-item__title");

    $("body").toggleClass("sidebar-is-reduced sidebar-is-expanded");
    $(".hamburger-toggle").toggleClass("is-opened");

    if ($("body").hasClass("sidebar-is-expanded")) {
      $('[data-toggle="tooltip"]').tooltip("destroy");
    } else {
      $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
    }
  };

  return {
    init: function init() {
      $(".js-hamburger").on("click", sidebarChangeWidth);

      $(".js-menu li").on("click", function (e) {
        menuChangeActive(e.currentTarget);
      });

      $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
    }
  };
}();

Dashboard.init();
//# sourceURL=pen.js
</script>
</body></html>
