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
	<title>Meet our awesome team - The Limitless</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet"  href="https://demo-storage.com/pm/html/vincent/css/kube.css">
	<!-- <link rel="stylesheet"  href="https://demo-storage.com/pm/html/vincent/css/font-awesome.css"> -->
	<!-- <link rel="stylesheet"  href="https://demo-storage.com/pm/html/vincent/css/owl.carousel.min.css"> -->
	<link rel="stylesheet"  href="css/stylefinal.css">

	<!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5G6PPWB');</script>
  <!-- End Google Tag Manager -->

  <script src="https://code.jquery.com/jquery-3.5.1.js" 
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
  crossorigin="anonymous"></script>
  <!-- <script src="loader.js"></script>
  <script>
	  $( document ).ready(function() {
  // Handler for .ready() called.
  $('.vincent_philosophy_img3').load(function(){
     $('.pizzaa').hide();
  });
});
  </script> -->
</head>

<body class="vincent_team_page">

	<header class="vincent_header">
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
							<li class="menu-item menu-item-has-children"><a href="c.html">Home</a>
								<!-- <ul class="sub-menu">
									<li class="menu-item"><a href="index.html">Home 1</a></li>
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
									<li class="menu-item "><a href="teams.html">Team</a></li>
								</ul>
							</li>
							
							<li class="menu-item menu-item-has-children"><a href="cart.php">Cart</a>

							<li class="menu-item menu-item-has-children"><a href="feedback.html">Contact</a>
								<!-- <ul class="sub-menu">
									<li class="menu-item"><a href="contact-w-sidebar.html">Contact with Sidebar</a></li>
									<li class="menu-item"><a href="contact-w-gallery.html">Contact with Gallery</a></li>
									<li class="menu-item"><a href="contact-multiple-maps.html">With Multiple Maps</a></li>
								</ul> -->
							</li>
						</ul>
					</nav>
					<div class="clear"></div>
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
			<div class="col col-3 vincent_header_right">
				<div class="vincent_inner">
					<a href="profile.html">
						<!-- <div class="vincent_shopping_cart">
							<div class="vincent_total_price">$0.00</div>
							<div class="vincent_total_items">0 items - View Cart</div>
							<div class="vincent_cart_item_counter">0</div>
						</div> --> Welcome, <?php echo $_SESSION['user']; ?>
					</a>
					<form><li class="menu-item" ><a href="backend/logout.php"> Logout </a></li></form>
				</div>
			</div>
			
		</div>
	</header>
	<div class="vincent_title_block vincent_corners">
		<div class="vincent_inner_text">
			<h1>Your Wish is Your Dish</h1>
		</div>
	</div>
	
  
    
       <div class="vincent_philosophy">
        <div class="row">
         <div class="col col-4">
        <div class="vincent_advantages_dark_img vincent_philosophy_img3"></div>
        </div>
        <div class="col col-4">
        <div class="vincent_philosophy_item">
        <h2>MYOP</h2>
		<h5>Make Your Own Pizza.</h5>
        <h6> We don’t just make pizza. We make YOUR PIZZA.</h6>
        <img class="vincent_single_img" src="assets/09.jpeg" alt="">
        <p>Make your own pizza with all the toppings you choose and give every piiza a new taste you don’t expect. With over 80 base choices and 200 options for different combinations of toppings, we fill your heart with the atmost satisfaction and your stomach with the best flavors possible.</p>
        </div>
        </div>
        <div class="col col-4">
        <div class="vincent_advantages_dark_img vincent_philosophy_img4"></div>
        </div>
      </div>
</div>
<!-- <div class="vincent_collapse_block"> -->
  <!-- <div class="vincent_container">
    <div class="row gutters" style=" padding-left: 20%;">
      <div class="col col-8">
        <div class="vincent_collapse" data-component="collapse">

          <h4><a href="#box-1" class="collapse-toggle">Our Philosophy<i class="fa fa-angle-down" aria-hidden="true"></i></a></h4>
          <div class="collapse-box " id="box-1">
            <p>What’s our purpose at Vincent? <a href="#">Moments of Excitement.</a> All made possible by our flavor, innovation and, most importantly, by unlocking potential in our team members.</p>
            <p>With more than 50 years of experience under our belts, we understand how to best serve our customers through tried and true service principles. Instead of following trends, <strong>we set them</strong>. We create food we’re proud <em>to serve and deliver</em> it fast, with a smile. No matter where you find us, we’re making sure each meal our customers enjoy is delicious and one-of-a-kind.</p>
          </div>

          <h4><a href="#box-2" class="collapse-toggle">Our Purpose<i class="fa fa-angle-down" aria-hidden="true"></i></a></h4>
          <div class="collapse-box hide" id="box-2">
            <p>What’s our purpose at Vincent? <a href="#">Moments of Excitement.</a> All made possible by our flavor, innovation and, most importantly, by unlocking potential in our team members.</p>
            <p>With more than 50 years of experience under our belts, we understand how to best serve our customers through tried and true service principles. Instead of following trends, <strong>we set them</strong>. We create food we’re proud <em>to serve and deliver</em> it fast, with a smile. No matter where you find us, we’re making sure each meal our customers enjoy is delicious and one-of-a-kind.</p>
          </div>

          <h4><a href="#box-3" class="collapse-toggle">Best Service<i class="fa fa-angle-down" aria-hidden="true"></i></a></h4>
          <div class="collapse-box hide" id="box-3">
            <p>What’s our purpose at Vincent? <a href="#">Moments of Excitement.</a> All made possible by our flavor, innovation and, most importantly, by unlocking potential in our team members.</p>
            <p>With more than 50 years of experience under our belts, we understand how to best serve our customers through tried and true service principles. Instead of following trends, <strong>we set them</strong>. We create food we’re proud <em>to serve and deliver</em> it fast, with a smile. No matter where you find us, we’re making sure each meal our customers enjoy is delicious and one-of-a-kind.</p>
          </div>

        </div>
      </div>



 </div>


 
</div> -->
<br>
<div class="vincent_container">
	<form action="backend/order.php" method="POST" class="lalala">
		<!-- <input type="text" placeholder="HIiiiiiiiiiiiiii" required>
		<textarea></textarea> --><br>
		<h1 style="text-align: center;">Choose your options!</h1>
	<div class="new" style="width: fit-content; margin: 0 auto;">
		<label class="same">
			<input type="radio" name="sizeradio" value="small" checked>
			<img src="assets/order/small.png">
			<p>SMALL</p>
		</label>
		<label class="same">
			<input type="radio" name="sizeradio" value="medium">
			<img src="assets/order/medium.png">
			<p>MEDIUM</p>
		</label>
		<label class="same">
			<input type="radio" name="sizeradio" value="large">
			<img src="assets/order/large.png">
			<p>LARGE</p>
		</label>
		<label class="same">
			<input type="text" name="size" id="size" value="100" readonly style="border:none; color: blanchedalmond; text-align: center;">
			<p>INR</p>
		</label>
	</div>
	<!-- <br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br> -->
	<div class="new" style="height: 200px;">
		<label class="same">
			<input type="radio" name="crustradio" value="thin" checked>
			<img src="assets/order/thin.jpg">
			<p>THIN</p>
		</label>
		<label class="same">
			<input type="radio" name="crustradio" value="classic">
			<img src="assets/order/classic.jpg">
			<p>CLASSIC</p>
		</label>
		<label class="same">
			<input type="radio" name="crustradio" value="stuffed">
			<img src="assets/order/stuffed.jpg">
			<p>STUFFED</p>
		</label>
		<label class="same">
			<input type="text" name="crust"  value="50" readonly style="border:none; color: blanchedalmond; text-align: center;">
			<p>INR</p>
		</label>
	</div>
	<!-- <br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br> -->
	<div class="new">
		<label class="same">
			<input type="radio" name="sauceradio" value="nosauce" checked>
			<img src="assets/order/no-sauce.jpg">
			<p>NO SAUCE</p>
		</label>
		<label class="same">
			<input type="radio" name="sauceradio" value="sauce">
			<img src="assets/order/tomato.jpg">
			<p>TOMATO SAUCE</p>
		</label>
		<label class="same">
			<input type="radio" name="sauceradio" value="spicy">
			<img src="assets/order/spicy.jpg">
			<p>SPICY SAUCE</p>
		</label>
		<label class="same">
			<input type="text" name="sauce"  value="0" readonly style="border:none; color: blanchedalmond; text-align: center;">
			<p>INR</p>
		</label>
	</div>

	<div class="new">
		<label class="same">
			<input type="radio" name="cheeseradio" value="nocheese" checked>
			<img src="assets/order/no-cheese.jpg">
			<p>NO CHEESE</p>
		</label>
		<label class="same">
			<input type="radio" name="cheeseradio" value="cheese">
			<img src="assets/order/cheese.jpg">
			<p>CHEESE</p>
		</label>
		<label class="same">
			<input type="radio" name="cheeseradio" value="doublecheese">
			<img src="assets/order/double.jpg">
			<p>DOUBLE CHEESE</p>
		</label>
		<label class="same">
			<input type="text" name="cheese"  value="0" readonly style="border:none; color: blanchedalmond; text-align: center;">
			<p>INR</p>
		</label>
	</div>

<div class="new">
	<input name="pizza" id="namepizza" placeholder="Name Your Pizza" type="text" required>
	<input type="text" name="total" value="150" style="width: max-content; color: blanchedalmond; text-align: center;" readonly>
	<input type="submit" value="NEXT" style=" width: 100%;">
	<br>
</div>

	</form>


	<script>

function updateTotal(){
	tot =  parseInt($(".same input[name='size']").val()) + parseInt($(".same input[name='crust']").val()) + parseInt($(".same input[name='cheese']").val()) + parseInt($(".same input[name='sauce']").val());
	$(".new input[name='total']").val(tot);
};

	$(".same input[name='sizeradio']").click(function(){
	if($('input:radio[name=sizeradio]:checked').val() == "small"){
		$(".same input[name='size']").val('100');
	}
    else if($('input:radio[name=sizeradio]:checked').val() == "medium"){
		$(".same input[name='size']").val('150');
    }
	else if($('input:radio[name=sizeradio]:checked').val() == "large"){
		$(".same input[name='size']").val('200');
	}
	updateTotal();
});



$(".same input[name='cheeseradio']").click(function(){
	if($('input:radio[name=cheeseradio]:checked').val() == "nocheese"){
		$(".same input[name='cheese']").val('0');
	}
    else if($('input:radio[name=cheeseradio]:checked').val() == "cheese"){
		$(".same input[name='cheese']").val('30');
    }
	else if($('input:radio[name=cheeseradio]:checked').val() == "doublecheese"){
		$(".same input[name='cheese']").val('60');
	}
	updateTotal();
});




$(".same input[name='crustradio']").click(function(){
	if($('input:radio[name=crustradio]:checked').val() == "thin"){
		$(".same input[name='crust']").val('50');
	}
    else if($('input:radio[name=crustradio]:checked').val() == "classic"){
		$(".same input[name='crust']").val('10');
    }
	else if($('input:radio[name=crustradio]:checked').val() == "stuffed"){
		$(".same input[name='crust']").val('100');
	}
	updateTotal();
});




$(".same input[name='sauceradio']").click(function(){
	if($('input:radio[name=sauceradio]:checked').val() == "nosauce"){
		$(".same input[name='sauce']").val('0');
	}
    else if($('input:radio[name=sauceradio]:checked').val() == "sauce"){
		$(".same input[name='sauce']").val('20');
    }
	else if($('input:radio[name=sauceradio]:checked').val() == "spicy"){
		$(".same input[name='sauce']").val('50');
	}
	updateTotal();
});









	</script>


</div>
  <div class="vincent_back_to_top"></div>
	<footer >
		<div class="vincent_container">
			<div class="row">
				<div class="col col-12">
					<div class="vincent_logo_cont">
						<a href="c.html" class="vincent_image_logo_footer">
						</a>
					</div>
					<div class="vincent_foter_text">+91 9345678765 <span>8:00 am – 11:30 pm</span></div>
					<ul class="vincent_foter_menu">
						<li><a href="c.html">Home</a></li>
						<!-- <li><a href="menu1.html">Menu</a></li> -->
						<li><a href="gal.html">Features</a></li>
						<li><a href="about1.html">About</a></li>
						<!-- <li><a href="blog-grid.html">Blog</a></li> -->
						<li><a href="feedback.html">Contact</a></li>
					</ul>
					<ul class="vincent_social">
						<li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
					<div class="vincent_copy_text">Copyright © 2018 Limitless. All Rights Reserved.</div>
        </div>
  
			</div>
		</div>
	</footer>
  

  <script src="https://demo-storage.com/pm/html/vincent/js/jquery-3.2.1.min.js"></script>
	<!-- <script src="https://demo-storage.com/pm/html/vincent/js/jquery.data-parallax.min.js"></script> -->
	<!-- <script src="https://demo-storage.com/pm/html/vincent/js/owl.carousel.min.js"></script> -->
	<script src="https://demo-storage.com/pm/html/vincent/js/kube.js"></script>
	<script src="https://demo-storage.com/pm/html/vincent/js/index.js"></script>
</body>

</html>

<?php 

}

else{
    echo "<script>window.location.href='signin.php'</script>";
}

?>