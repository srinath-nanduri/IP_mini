
<?php 



session_start();

if(isset($_SESSION["user"])){
 
	echo "<script>window.location.href='orderpage.php'</script>";

}

else{

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
	<title>Home 1 - Vincent</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link href="https://mdbootstrap.com/previews/docs/latest/css/bootstrap.min.css" rel="stylesheet" />

  <link href="https://mdbootstrap.com/previews/docs/latest/css/mdb.min.css" rel="stylesheet" />

  <link href="https://mdbootstrap.com/previews/docs/latest/html/fsscroller/css/style.css" rel="stylesheet" />

  <link href="https://mdbootstrap.com/previews/docs/latest/html/fsscroller/css/fsscroller.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css" integrity="sha512-gRH0EcIcYBFkQTnbpO8k0WlsD20x5VzjhOA1Og8+ZUAhcMUCvd+APD35FJw3GzHAP3e+mP28YcDJxVr745loHw==" crossorigin="anonymous" />

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet"  href="https://demo-storage.com/pm/html/vincent/css/kube.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet"  href="https://demo-storage.com/pm/html/vincent/css/font-awesome.css"> -->
	<link rel="stylesheet"  href="https://demo-storage.com/pm/html/vincent/css/owl.carousel.min.css">
	<link rel="stylesheet"  href="css/stylefinal.css">

	<!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5G6PPWB');</script>
  <!-- End Google Tag Manager -->
  <script>
	function myFunction()
{
    var x = document.getElementById("password");
    var y = document.getElementById("togpass");
    if (x.type === "password") 
    {
        x.type = "text";
        y.className = "fas fa-eye-slash";
    }
    else
    {
        x.type="password";
        y.className = "fas fa-eye";
    }
}
  </script>
</head>
<body class="vincent_home6 vincent_home1" >
	<header class="vincent_header" style="padding-top:-450px">
		<div class="row ">
			<!-- <div class="col col-3 vincent_header_left">
				<div class="vincent_inner">
					<div class="vincent_inner_h_contact">
						<div class="vincent_h_phone">+91 9345678765</div>
						<div class="vincent_h_wh">8:00 am – 11:30 pm</div>
					</div>
				</div>
			</div> -->
			<div class="col col-6 vincent_header_center">
				<div class="vincent_def_header">
					<!-- <div class="vincent_logo_cont">
						<a href="c.html" class="vincent_image_logo">
						</a>
					</div> -->
					<nav class="vincent_menu_cont">
						<ul id="menu-main-menu" class="vincent_menu">
						<li>
						<div class="vincent_logo_cont">
						<a href="c.html" class="vincent_image_logo">
						</a>
					</div>
						</li>
							<li class="menu-item"><a href="c.html">Home</a>
								<!-- <ul class="sub-menu">
									<li class="menu-item vincent_sub_menu_active"><a href="c.html">Home 1</a></li>
									<li class="menu-item"><a href="home2.html">Home 2</a></li>
									<li class="menu-item"><a href="home3.html">Home 3</a></li>
									<li class="menu-item"><a href="home4.html">Home 4</a></li>
									<li class="menu-item"><a href="home5.html">Home 5</a></li>
									<li class="menu-item"><a href="home6.html">Home 6</a></li>
								</ul> -->
							</li>
							<!-- <li class="menu-item menu-item-has-children"><a href="#">Menu</a>
								<ul class="sub-menu">
									<li class="menu-item"><a href="menu1.html">Menu 1</a></li>
									<li class="menu-item"><a href="menu2.html">Menu 2</a></li>
									<li class="menu-item"><a href="menu3.html">Menu 3</a></li>
								</ul>
							</li> -->
							<li class=" menu-item menu-item-has-children"><a href="#">Features</a>
								<ul class="sub-menu">
									<!-- <li class="menu-item "><a href="typography.html">Typography</a></li> -->
									<li class="menu-item"><a href="gal.html">Fullscreen Gallery</a></li>
									<!-- <li class="menu-item"><a href="404.html">Error 404 Page</a></li> -->
								</ul>
							</li>
							<li class="menu-item menu-item-has-children"><a href="#">About</a>
								<ul class="sub-menu">
									<li class="menu-item"><a href="about1.html">Customer Review</a></li>
									<!-- <li class="menu-item"><a href="about2.html">About 2</a></li> -->
									<li class="menu-item"><a href="teams.html">Team</a></li>
								</ul>
							</li>
							<!-- <li class="menu-item menu-item-has-children"><a href="#">Blog</a>
								<ul class="sub-menu">
									<li class="menu-item"><a href="blog-fullscreen.html">Blog Fullscreen</a></li>
									<li class="menu-item"><a href="blog-grid.html">Blog Grid</a></li>
									<li class="menu-item"><a href="blog-standard.html">Blog Standard</a></li>
									<li class="menu-item menu-item-has-children"><a href="#">Single Pages<i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class=" sub-menu1">
											<li class="menu-item"><a href="standard-post.html">Standard Post</a></li>
											<li class="menu-item"><a href="image-post.html">Image Post</a></li>
											<li class="menu-item"><a href="video-post.html">Video Post</a></li>
											<li class="menu-item"><a href="audio-post.html">Audio Post</a></li>
											<li class="menu-item"><a href="qoute-post.html">Quote Post</a></li>
											<li class="menu-item"><a href="link-post.html">Link Post</a></li>
										</ul>
									</li>
								</ul>
							</li> -->
							<!-- <li class="menu-item menu-item-has-children"><a href="#">Shop</a>
								<ul class="sub-menu">
									<li class="menu-item"><a href="product-listing.html">Product Listing</a></li>
									<li class="menu-item"><a href="single-product.html">Single Product</a></li>
									<li class="menu-item"><a href="cart.html">Cart</a></li>
									<li class="menu-item"><a href="checkout.html">Checkout</a></li>
								</ul>
							</li> -->
							<li class="menu-item menu-item-has-children"><a href="feedback.html">Contact</a>
							</li>
						</ul>
					</nav>
					<!-- <div class="clear"></div> -->
				</div>
				<div class="mobile_header ">
					<a href="c.html" class="vincent_image_logo"></a>
					<a href="javascript:void(0)" class="btn_mobile_menu">
						<span class="vincent_menu_line1"></span>
						<span class="vincent_menu_line2"></span>
						<span class="vincent_menu_line3"></span>
					</a>
				</div>
			</div>
			<!-- <div class="col col-3 vincent_header_right">
				<div class="vincent_inner">
					<a href="cart.html">
						<div class="vincent_shopping_cart">
							<div class="vincent_total_price">$0.00</div>
							<div class="vincent_total_items">0 items - View Cart</div>
							<div class="vincent_cart_item_counter">0</div>
						</div>
					</a>
				</div>
			</div> -->
		</div>
	</header>

					<!-- <div class="owl-item vincent_slider_main_item">
						<div class="vincent_slider_main_item_img">
							<div class=""><img src="cover1.jpg" alt=""></div>
						</div>
						<h1>Vincent </h1>
						<div class="vincent_slider_main_item_text">Italian Pizza With Cherry Tomatoes<br> and Green Basil </div>
					</div>
					<div class="owl-item vincent_slider_main_item vincent_slider_main_item1">
						<div class="vincent_slider_main_item_img">
							<div class=""><img src="cover1.jpg" alt=""></div>
						</div>
						<div class="vincent_slider_main_item_cont">
							<div class="vincent_item_cont">
							<h1>Vincent Pizza.</h1>
							<h2>Making people happy </h2>
							<div class="vincent_slider_main_item_text">Italian Pizza With Cherry Tomatoes and Green Basil </div>
							<a class="vincent_button" href="#">Book Now<i class="fa fa-angle-right" aria-hidden="true"></i></a>
							<a class="vincent_button vincent_button_background" href="menu1.html">View Menu<i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div> -->
					<!-- <div class="owl-item vincent_slider_main_item vincent_slider_main_item1 vincent_slider_main_item2">
						<div class="vincent_slider_main_item_img">
							<div class=""><img src="cover1.jpg" alt=""></div>
						</div>
						<div class="vincent_slider_main_item_cont">
							<div class="vincent_item_cont">
							<h1>Vincent Pizza.</h1>
							<h2>Making people happy </h2>
							<div class="vincent_slider_main_item_text">Italian Pizza With Cherry Tomatoes and Green Basil </div>
							<a class="vincent_button" href="#">Book Now<i class="fa fa-angle-right" aria-hidden="true"></i></a>
							<a class="vincent_button vincent_button_background" href="menu1.html">View Menu<i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div> -->
					<div class="main">

            <div class="container1">
                <div class="signup-content">
                    <form action="backend/login.php" method="POST" id="signup-form" class="signup-form">
                        <h2>Sign in </h2>
                        
                        <div class="form-group">
                            <input type="text" required class="form-input" name="username" id="username" placeholder="Username"/>
                        </div>
                        
                        <div class="form-group">
							<input type="password" minlength="8" required class="form-input" name="password" id="password" placeholder="Password"/>
							<span class="tog" onclick="myFunction()"><i id="togpass" class="fas fa-eye"></i>Show Password</span> 
                            <!-- <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span> -->
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit submit" value="Sign in"/>
                            <a href="signup.html" class="submit-link submit">Sign up</a>
                        </div>
                    </form>
                </div>
            </div>
    
		</div>
		

        <!-- <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script> -->
				
			
  <script src="https://demo-storage.com/pm/html/vincent/js/jquery-3.2.1.min.js"></script>
	<script src="https://demo-storage.com/pm/html/vincent/js/jquery.data-parallax.min.js"></script>
	<script src="https://demo-storage.com/pm/html/vincent/js/owl.carousel.min.js"></script>
	<script src="https://demo-storage.com/pm/html/vincent/js/kube.js"></script>
	<script src="https://demo-storage.com/pm/html/vincent/js/index.js"></script>
</body>
</html>


<?php  
}
?>