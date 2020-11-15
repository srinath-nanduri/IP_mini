<?php


session_start();

if(isset($_SESSION["user"])){
    

?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Cart - Vincent</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet"  href="https://demo-storage.com/pm/html/vincent/css/kube.css">
	<!-- <link rel="stylesheet"  href="https://demo-storage.com/pm/html/vincent/css/font-awesome.css"> -->
	<link rel="stylesheet"  href="css/stylefinal.css">

	<!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5G6PPWB');</script>
  <!-- End Google Tag Manager -->
</head>

<body>
	<header class="vincent_header">
		<div class="row ">
			
			<div class="col col-6 vincent_header_center">
				<div class="vincent_def_header">
					<!-- <div class="vincent_logo_cont">
						<a href="index.html" class="vincent_image_logo">
						</a>
					</div> -->
					<nav class="vincent_menu_cont">
						<ul id="menu-main-menu" class="vincent_menu">
							<li>
							<div class="vincent_logo_cont">
							<a href="index.html" class="vincent_image_logo"></a>							
							</div>
							</li>
							<li class="menu-item menu-item-has-children"><a href="#">Home</a>
								
							</li>
							
							<li class=" menu-item menu-item-has-children"><a href="#">Features</a>
								<ul class="sub-menu">									
									<li class="menu-item"><a href="gal.html">Fullscreen Gallery</a></li>								
								</ul>
							</li>
							<li class="menu-item menu-item-has-children"><a href="#">About</a>
								<ul class="sub-menu">
									<li class="menu-item"><a href="about1.html">About 1</a></li>									
									<li class="menu-item"><a href="teams.html">Team</a></li>
								</ul>
							</li>
							
							<li class="menu-item active menu-item-has-children"><a href="cart.html">Cart</a>
								
							</li>
							<li class="menu-item menu-item-has-children"><a href="feedback.html">Contact</a>
								
							</li>
						</ul>
					</nav>

					<div class="clear"></div>
					</div>

					<div class="mobile_header ">
						<a href="index.html" class="vincent_image_logo"></a>
						<a href="javascript:void(0)" class="btn_mobile_menu">
							<span class="vincent_menu_line1"></span>
							<span class="vincent_menu_line2"></span>
							<span class="vincent_menu_line3"></span>
						</a>
					</div>

			</div>
			
		</div>
	</header>
	<div class="vincent_title_block vincent_corners">
		<div class="vincent_inner_text">
			<h1>Cart</h1>
		</div>
	</div>
	<div class="vincent_container vincent_typography">
		<div class="row gutters">
			<div class="col col-8 vincent_content">
				<table class="vincent_cart">
					<thead>
						<tr>
							<th></th>
							<th></th>
							<th>Product</th>
							<th><span>Price</span></th>
							<th>Quantity</th>
							<th><span>Total</span></th>
						</tr>
					</thead>
					<tbody>
						<tr class="vincent_cart_item">
							<td>
								<a class="vincent_product-remove" href="#"> × </a>
							</td>
							<td class="vincent_product-thumbnail">
								<a href="single-product.html">
									<img src="img/2-300x300.png" alt="">
								</a>
							</td>
							<td class="vincent_product-name" data-title="Product">
								<a href="single-product.html">Pepperoni</a>
							</td>
							<td class="vincent_product-price" data-title="Price">
								<span>$2.90</span>
							</td>
							<td  class="vincent_product-quantity"  data-title="Quantity">
								<input type="text" value="1" name="quantity" class="vincent_quantity">
							</td>
							<td class="vincent_product-subtotal" data-title="Total">
								<span>$2.90</span>
							</td>
						</tr>
						<tr class="vincent_cart_item">
							<td>
								<a class="vincent_product-remove" href="#"> × </a>
							</td>
							<td  class="vincent_product-thumbnail">
								<a href="single-product.html">
									<img src="img/11-300x300.png" alt="">
								</a>
							</td>
							<td class="vincent_product-name" data-title="Product">
								<a href="single-product.html">MARGHERITA</a>
							</td>
							<td class="vincent_product-price" data-title="Price">
								<span>$2.60</span>
							</td>
							<td  class="vincent_product-quantity"  data-title="Quantity">
								<input type="text" value="1" name="quantity" class="vincent_quantity">
							</td>
							<td class="vincent_product-subtotal" data-title="Total">
								<span>$2.60</span>
							</td>
						</tr>
						<tr class="vincent_cart_actions">
							<td colspan="6">
								<div class="vincent_coupon">
									<input type="text" name="" placeholder="Coupon code">
									<button>Apply coupon</button>
								</div>
								<button class="vincent_update_cart">Update cart</button>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="vincent_cart_totals">
					<h5>Cart totals</h5>
					<table>
						<tbody>
							<tr>
								<th>Subtotal</th>
								<td><span>$5.50</span></td>
							</tr>
							<tr>
								<th>Total</th>
								<td><span>$5.50</span></td>
							</tr>
						</tbody>
					</table>
					<a class="vincent_button vincent_button_background" href="checkout.html">Proceed to checkout</a>
				</div>
			</div>

			<!-- <div class="col col-4 vincent_sidebar">
				 <div class="vincent_sidebar_block vincent_search_block">
					<form class="vincent_search_form">
						<input type="text" name="search" placeholder="Search">
						<span><i class="fa fa-search" aria-hidden="true"></i></span>
					</form>

				</div> 
				<div class="vincent_sidebar_block vincent_featured_posts">
					<h5>Featured Posts</h5>
					<div class="vincent_posts_item">
						<a  href="standard-post.html">
							<img src="img/1-80x80.jpg" alt="">
							<span>Healsy Food for healthy body</span>
						</a>
						<div class="vincent_date">April 6, 2017</div>
					</div>
					<div class="vincent_posts_item">
						<a href="standard-post.html">
							<img src="img/2-80x80.jpg" alt="">
							<span>food design trends 2017</span>
						</a>
						<div class="vincent_date">April 6, 2017</div>
					</div>
				</div>
				<div class="vincent_sidebar_block vincent_sidebar_categories">
					<h5>Blog Categories</h5>
					<ul>
						<li><a href="category.html">Food</a></li>
						<li><a href="category.html">Inspiration</a></li>
						<li><a href="category.html">Lifestyle</a></li>
						<li><a href="category.html">People</a></li>
						<li><a href="category.html">Recipes</a></li>
						<li><a href="category.html">World</a></li>
					</ul>
				</div>
				<div class="vincent_sidebar_block vincent_sidebar_tags">
					<h5>Tags</h5>
					<ul>
						<li><a href="category.html">Blog</a></li>
						<li><a href="category.html">Food</a></li>
						<li><a href="category.html">Lifestyle</a></li>
						<li><a href="category.html">Margherita</a></li>
						<li><a href="category.html">Pizza</a></li>
						<li><a href="category.html">Pizzeria</a></li>
						<li><a href="category.html">Restaurant</a></li>
						<li><a href="category.html">Vincent</a></li>
					</ul>
				</div>
				<div class="vincent_sidebar_block">
					<h5>Instafeed</h5>
					<ul class="vincent_sidebar_instafeed">
						<li><a class="vincent_image_fader" href="https://instagram.com/p/BSk1sbJFPDL/">
							<img src="img/17817627_1991094447779194_2141034917813813248_n.jpg" alt="">
						</a></li>
						<li><a class="vincent_image_fader" href="https://instagram.com/p/BSk1mfglkeK/">
							<img src="img/17596453_1394335877325424_5306473291534303232_n.jpg" alt="">
						</a></li>
						<li><a class="vincent_image_fader" href="https://instagram.com/p/BSk1lf1FbB7/">
							<img src="img/17662462_240934883045697_4488760463823208448_n.jpg" alt="">
						</a></li>
						<li><a class="vincent_image_fader" href="https://instagram.com/p/BSk1kROFVaq/">
							<img src="img/17663134_213463345806971_2661189821392748544_n.jpg" alt="">
						</a></li>
						<li><a class="vincent_image_fader" href="https://instagram.com/p/BSk1jg2l_ui/">
							<img src="img/17663740_2273891269502238_7837518096255418368_n.jpg" alt="">
						</a></li>
						<li><a class="vincent_image_fader" href="https://instagram.com/p/BSk1in3lBNE/">
							<img src="img/17818827_1383669068365197_1027011360048807936_n.jpg" alt="">
						</a></li>
					</ul>
				</div>
			</div> -->
		</div>
	</div>
	<div class="vincent_back_to_top"></div>
	<footer>
		<div class="vincent_container">
			<div class="row">
				<div class="col col-12">
					<div class="vincent_logo_cont">
						<a href="index.html" class="vincent_image_logo_footer">
						</a>
					</div>
					<div class="vincent_foter_text">+1 215 456 15 15. <span>8:00 am – 11:30 pm</span></div>
					<ul class="vincent_foter_menu">
						<li><a href="index.html">Home</a></li>
						<li><a href="menu1.html">Menu</a></li>
						<li><a href="fullscreen-gallery.html">Features</a></li>
						<li><a href="about1.html">About</a></li>
						<li><a href="blog-grid.html">Blog</a></li>
						<li><a href="contact-multiple-maps.html">Contact</a></li>
					</ul>
					<ul class="vincent_social">
						<li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
					<div class="vincent_copy_text">Copyright © 2018 Vincent. All Rights Reserved.</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://demo-storage.com/pm/html/vincent/js/jquery-3.2.1.min.js"></script>
	<script src="https://demo-storage.com/pm/html/vincent/js/index.js"></script>
</body>
</html>









<?php 
}

else{
    echo "<script>window.location.href='signin.php'</script>";
}
?>