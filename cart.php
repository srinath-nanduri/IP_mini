<?php


session_start();

if(isset($_SESSION["user"])){
	
	



$servername = "localhost";
$dbuser = "root";
$dbpass = "root";
$database = "limit";


$conn = new mysqli($servername, $dbuser, $dbpass, $database, "3308");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }


   else{
	$l = strlen($_SESSION['user']);
	$max = sizeof($_SESSION['cart']);
	$arr = $_SESSION['cart'];
	$tot=0;





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
	<title>Cart - The Limitless</title>
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

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" 
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
  crossorigin="anonymous"></script> -->

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-latest.js"></script>



  <script>
	$(document).ready(function() {

/* Set rates */
var taxRate = 0.05;
var fadeTime = 300;

/* Assign actions */
$('.pass-quantity input').change(function() {
updateQuantity(this);
});

$('.vincent_product-remove').click(function() {
removeItem(this);
});


/* Recalculate cart */
function recalculateCart() {
var subtotal = 0;

/* Sum up row totals */
$('.vincent_cart_item').each(function() {
subtotal += parseFloat($(this).children('.vincent_product-subtotal span').text());
console.log(subtotal);
});

/* Calculate totals */
var tax = subtotal * taxRate;
var total = subtotal + tax;

/* Update totals display */
$('.totals-value').fadeOut(fadeTime, function() {
$('#cart-subtotal').html(subtotal.toFixed(2));
$('#cart-tax').html(tax.toFixed(2));
$('.cart-total').html(total.toFixed(2));
if (total == 0) {
$('.checkout').fadeOut(fadeTime);
} else {
$('.checkout').fadeIn(fadeTime);
}
$('.totals-value').fadeIn(fadeTime);
});
}

recalculateCart();


/* Update quantity */
function updateQuantity(quantityInput) {
/* Calculate line price */
var productRow = $(quantityInput).parent().parent();
var price = parseFloat(productRow.children('.product-price').text());
var quantity = $(quantityInput).val();
var linePrice = price * quantity;

/* Update line price display and recalc cart totals */
productRow.children('.product-line-price').each(function() {
$(this).fadeOut(fadeTime, function() {
$(this).text(linePrice.toFixed(2));
recalculateCart();
$(this).fadeIn(fadeTime);
});
});
}

/* Remove item from cart */
function removeItem(removeButton) {
/* Remove row from DOM and recalc cart total */
var productRow = $(removeButton).parent().parent().parent();
// productRow.slideUp(fadeTime, function() {
productRow.remove();
e = $('removeform<?php echo $key ?>');
e.currentTarget.submit();
recalculateCart();
// });
}

});
</script>

<script
    src="https://www.paypal.com/sdk/js?client-id=AfQrrmX0EFxSmEcBsVe5nZ1cr0rYJaZjfHIDRMjPCHYoygfQfBF4Qf49J9DywEtz6K2h_1kjOxr_XN5N"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>



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
							<li class="menu-item   "><a href="#">Home</a>
								
							</li>
							
							<li class=" menu-item menu-item-has-children"><a href="#">Features</a>
								<ul class="sub-menu">									
									<li class="menu-item"><a href="gal.html">Fullscreen Gallery</a></li>								
								</ul>
							</li>
							<li class="menu-item menu-item-has-children"><a href="#">About</a>
								<ul class="sub-menu">
									<li class="menu-item"><a href="about1.html">Error</a></li>									
									<li class="menu-item"><a href="teams.html">Team</a></li>
								</ul>
							</li>
							
							<li class="menu-item active "><a href="#">Cart</a>
								
							</li>
							<li class="menu-item "><a href="feedback.html">Contact</a>
								
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
			<div class="col col-3 vincent_header_right">
				<div class="vincent_inner">
				<a href="profile.php" style="font:28px 'PT Sans Narrow', sans-serif">
						Welcome, <?php echo $_SESSION['user']; ?>
					</a>
					<form><li class="menu-item" ><a href="backend/logout.php"> Logout </a></li></form>
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

					<?php 
					

						foreach($arr as $key => $val){

							$sql = "select o_cost from menuorder where o_pizza = '$val'";
							$res = mysqli_query($conn,$sql);
							$row = mysqli_fetch_assoc($res); 


						


					?>

						<tr class="vincent_cart_item">
							<td>
								<!-- <a class="vincent_product-remove" onclick="SubmitFormData();"  style="color: tomato;cursor: pointer;" > × </a> -->



								<form action="backend/removecart.php" id="removeform<?php echo $key ?>" method="POST">
								<input type="hidden" value="<?php echo $key ?>" name="rem<?php echo $key ?>" />
								<input type="submit" id="removeit<?php echo $key ?>"  class="vincent_product-remove" style=" color:tomato; font-size:x-large;" value='×'/>
								</form>




							</td>
							<td class="vincent_product-thumbnail">
								<!-- <a href="single-product.html"> -->
									<img src="https://source.unsplash.com/100x100/?pizza" alt="">
								<!-- </a> -->
							</td>
							<td class="vincent_product-name" data-title="Product">
								<!-- <a href="single-product.html">Pepperoni</a> -->
								<?php //echo $val;?>
								<?php echo substr($val,$l);?>
							</td>
							<td class="vincent_product-price" data-title="Price">
							₹<span style="color:white;" id="subcost<?php echo $key ?>"><?php echo $row['o_cost'];?></span>
							</td>
							<td  class="vincent_product-quantity"  data-title="Quantity">
								<input type="number" min="1" value="1" style="width:100px;" id="quantity<?php echo $key ?>" name="quantity"  class="vincent_quantity" >
								<script>
								
								$('#quantity<?php echo $key ?>').change(function(){
									$x = $('#quantity<?php echo $key ?>').val();
									$y = $('#subcost<?php echo $key ?>').text();
									$y = parseInt($y);
									$('#totcost<?php echo $key ?>').text($x * $y);
									$c = getTotalCost();
									$('#cart-subtotal').text($c);
									$('#cart-total').text($c+($c*0.05));
								});


								function getTotalCost() {
								var totalPrice = 0;
								$(".tott").each(function() {
									totalPrice += parseFloat($(this).html());
								});
								return totalPrice;
								}
								</script>
							</td>
							<td class="vincent_product-subtotal" data-title="Total">
							₹<span style="color:white;" class="tott" id="totcost<?php echo $key ?>" ><?php echo $row['o_cost'];?></span>
							
							
	

							
							</td>
						</tr>
						<?php } ?>
						
						<tr class="vincent_cart_actions">
							<td colspan="6">
								<div class="vincent_coupon">
									<input type="text" name="" placeholder="Coupon code">
									<button>Apply coupon</button>
								</div>
							<a href="orderpage.php">	<button class="vincent_update_cart">Add a Pizza</button></a>
							<p></p>
							<form action="backend/saveto.php" method="POST">
								<input type="submit" value="Save for Store" name="save" style="float:right;"/>
							</form>
							</td>
						</tr>
						
						<tr>
						<td>
							
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
								<td>₹<span class="totals-value" id="cart-subtotal">5.50</span></td>
								<script>
							
									$(document).ready(function(){
										$c = getTotalCost();
										$('#cart-subtotal').text($c);
										$('#cart-total').text($c+($c*0.05));
									});

							function getTotalCost() {
  var totalPrice = 0;
  $(".tott").each(function() {
	totalPrice += parseFloat($(this).html());
  });
  return totalPrice;
}

							</script>
							</tr>
							<tr>
								<th>Tax</th>
								<td><span class="totals-value" id="cart-tax" >0.05</span></td>
							</tr>
							<tr>
								<th>Total</th>
								<td>₹<span class="totals-calue cart-total" id="cart-total">5.50</span></td>
								<script>
									
								</script>
							</tr>
						</tbody>
					</table>

					
					<div id="paypal-button-container"></div>

<!-- <script>
  paypal.Buttons().render('#paypal-button-container');
  // This function displays Smart Payment Buttons on your web page.
</script> -->
<script>
$x = parseFloat($('#cart-total').text());
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: $x
          }
        }]
      });
    }
  }).render('#paypal-button-container');
</script>
				</div>
			</div>

		</div>
	</div>






	<!-- <div class='pm-button'><a href='https://www.payumoney.com/paybypayumoney/#/CB****************************10'><img src ='https://www.payumoney.com/media/images/payby_payumoney/new_buttons/21.png' /></a></div> -->






	<div class="vincent_back_to_top"></div>
	<footer>
		<div class="vincent_container">
			<div class="row">
				<div class="col col-12">
					<div class="vincent_logo_cont">
						<a href="index.html" class="vincent_image_logo_footer">
						</a>
					</div>
					<div class="vincent_foter_text">+91 9345678765. <span>8:00 am – 11:30 pm</span></div>
					<ul class="vincent_foter_menu">
						<li><a href="index.html">Home</a></li>
						<li><a href="gal.html">Features</a></li>
						<li><a href="teams.html">About</a></li>						
						<li><a href="feedback.html">Contact</a></li>
					</ul>
					<ul class="vincent_social">
						<li><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
					<div class="vincent_copy_text">Copyright © 2020 Limitless. All Rights Reserved.</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://demo-storage.com/pm/html/vincent/js/jquery-3.2.1.min.js"></script>
	<script src="https://demo-storage.com/pm/html/vincent/js/index.js"></script>
</body>
</html>






<?php 

} // end of connection database

} // end of if for checking SESSION

else{
    echo "<script>window.location.href='signin.php'</script>";
}
?> 

  