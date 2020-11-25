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
	<title>Toppings-The Limitless</title>
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

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" 
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
  crossorigin="anonymous"></script> -->
 <style>
	 .thead{
		width: 40%;
		text-align: center;
		float: left;
	 }
	 .price{
		 width: 8%;
		 text-align: center;
		 float: left;
	 }
	td{
		padding-left: 5px;
		background-color: black;
	}
	 .thead1{
		width: 50%;
		text-align: center;
		font-size: x-large;
	 }

	 /* Chrome, Safari, Edge, Opera */

.nig input::-webkit-outer-spin-button,
.nig input::-webkit-inner-spin-button {
  appearance: none;
  margin: 0;
}

/* Firefox */
.nig input[type=number] {
  -moz-appearance: textfield;
}

#namepizza{
	width: max-content;
	margin: 0 auto;
}
	 
 </style>


<script src="https://code.jquery.com/jquery-3.5.1.js" 
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
  crossorigin="anonymous"></script>
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
							
							</li>
						
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
			<h1>Choose Your Own Toppings</h1>
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



<div class="vincent_container"  style="background-color: black;">
	<form action="backend/tocart.php" method="POST" class="lalala">
		
		<br>
		<h1 style="text-align: center;">Choose your options!</h1>


		<div class="nig" style="width: 14.6%; float: left; margin-top: 6.3%;">
	
			<input type="number" id="total" name="total" value="0" style="width: 100%; color: blanchedalmond; text-align: center;" readonly>
			<input type="submit" value="ADD TO CART" name="add" style=" width: 100%;">
			<input type="submit" value="CART" name="cart" style=" width: 100%;">
			<br>
		</div>



		<table style="width: 85.4%; " >
			<tr>
				<td class="thead1" >Veg</td>
				<td class="thead1" >Non Veg</td>
			</tr>
			<tr>
				<td class="opt" style="padding-left: 5px;">
				
					<input class="thead"  name="moz" type="number" min="0" max="2" placeholder="0"/>
					<input  name="mozsum" type="hidden" value="0"/>
					<label class="thead"  for="moz" >Mozarella (30₹)</label>
				</td>
		 	
				<td class="opt">
					<input class="thead" name="pep" type="number" min="0" max="2" placeholder="0"/>
					<input  name="pepsum" type="hidden" value="0"/>
					<label class="thead"  for="pep" >Pepperoni (45₹)</label>
				</td>
			
			</tr>

			<tr>
				<td class="opt" style="padding-left: 5px;">
					<input class="thead"  name="cap" type="number" min="0" max="2" placeholder="0"/>
					<input  name="capsum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="cap" >Capsicum (25₹)</label>
				</td>
				<td class="opt">
					<input class="thead" name="bpep" type="number" min="0" max="2" placeholder="0"/>
					<input  name="bpepsum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="bpep" >BBQ Pepperoni (50₹)</label>
				</td>
			</tr>

			<tr>
				<td class="opt" style="padding-left: 5px;">
					<input class="thead"  name="pap" type="number" min="0" max="2" placeholder="0"/>
					<input  name="papsum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="pap" >Paprika (25₹)</label>
				</td>
				<td class="opt">
					<input class="thead" name="gpep" type="number" min="0" max="2" placeholder="0"/>
					<input  name="gpepsum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="gpep" >Grilled Pepperoni (45₹)</label>
				</td>
			</tr>
			
			<tr>
				<td class="opt" style="padding-left: 5px;">
					<input class="thead"  name="olive" type="number" min="0" max="2" placeholder="0"/>
					<input  name="olivesum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="olive" >Black Olives (25₹)</label>
				</td>
				<td class="opt">
					<input class="thead" name="bchkn" type="number" min="0" max="2" placeholder="0"/>
					<input  name="bchknsum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="bchkn" >BBQ Chicken (40₹)</label>
				</td>
			</tr>

			<tr>
				<td class="opt" style="padding-left: 5px;">
					<input class="thead"  name="corn" type="number" min="0" max="2" placeholder="0"/>
					<input  name="cornsum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="corn" >Corn (25₹)</label>
				</td>
				<td class="opt">
					<input class="thead" name="gchkn" type="number" min="0" max="2" placeholder="0"/>
					<input  name="gchknsum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="gchkn" >Grill Chicken (50₹)</label>
				</td>
			</tr>

			<tr>
				<td class="opt" style="padding-left: 5px;">
					<input class="thead"  name="bcorn" type="number" min="0" max="2" placeholder="0"/>
					<input  name="bcornsum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="bcorn" >Baby Corn (30₹)</label>
				</td>
				<td class="opt">
					<input class="thead" name="sausage" type="number" min="0" max="2" placeholder="0"/>
					<input  name="sausagesum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="sausage" >Chicken Sausage (50₹)</label>
				</td>
			</tr>

			<tr>
				<td class="opt" style="padding-left: 5px;">
					<input class="thead"  name="mush" type="number" min="0" max="2" placeholder="0"/>
					<input  name="mushsum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="mush" >Mushroom (30₹)</label>
				</td>
				<td class="opt">
					<input class="thead" name="peri" type="number" min="0" max="2" placeholder="0"/>
					<input  name="perisum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="peri" >peri-peri Wing (50₹)</label>
				</td>
			</tr>

			<tr>
				<td class="opt" style="padding-left: 5px;">
					<input class="thead"  name="tomato" type="number" min="0" max="2" placeholder="0"/>
					<input  name="tomatosum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="tomato" >Tomato (25₹)</label>
				</td>
				<td class="opt">
					<input class="thead" name="bbqham" type="number" min="0" max="2" placeholder="0"/>
					<input  name="bbqhamsum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="bbqham" >BBQ Ham (45₹)</label>
				</td>
			</tr>

			<tr>
				<td class="opt" style="padding-left: 5px;">
					<input class="thead"  name="pan" type="number" min="0" max="2" placeholder="0"/>
					<input  name="pansum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="pan" >Paneer (35₹)</label>
				</td>
				<td class="opt">
					<input class="thead" name="pepham" type="number" min="0" max="2" placeholder="0"/>
					<input  name="pephamsum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="pepham" >Pepper BBQ Ham (45₹)</label>
				</td>
			</tr>

			<tr>
				<td class="opt" style="padding-left: 5px;">
					<input class="thead"  name="jala" type="number" min="0" max="2" placeholder="0"/>
					<input  name="jalasum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="jala" >Jalapeño (25₹)</label>
				</td>
				<td class="opt">
					<input class="thead" name="gham" type="number" min="0" max="2" placeholder="0"/>
					<input  name="ghamsum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="gham" >Grilled Ham (40₹)</label>
				</td>
			</tr>

			<tr>
				<td class="opt" style="padding-left: 5px;">
					<input class="thead"  name="onion" type="number" min="0" max="2" placeholder="0"/>
					<input  name="onionsum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="onion" >Onions (25₹)</label>
				</td>
				<td class="opt">
					<input class="thead" name="wing" type="number" min="0" max="2" placeholder="0"/>
					<input  name="wingsum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="wing" >Stuffed Wing (45₹)</label>
				</td>
			</tr>

			<tr>
				<td class="opt" style="padding-left: 5px;">
					<input class="thead"  name="pine" type="number" min="0" max="2" placeholder="0"/>
					<input  name="pinesum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="pine" >Pinapple (30₹)</label>
				</td>
				<td class="opt">
					<input class="thead" name="bpork" type="number" min="0" max="2" placeholder="0"/>
					<input  name="bporksum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="bpork" >BBQ Pork (40₹)</label>
				</td>
			</tr>

			<tr>
				<td class="opt" style="padding-left: 5px;">
					<input class="thead"  name="straw" type="number" min="0" max="2" placeholder="0"/>
					<input  name="strawsum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="straw" >Strawberry (45₹)</label>
				</td>
				<td class="opt">
					<input class="thead" name="gpork" type="number" min="0" max="2" placeholder="0"/>
					<input  name="gporksum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="gpork" >Grilled Pork (50₹)</label>
				</td>
			</tr>

			<tr>
				<td class="opt" style="padding-left: 5px;">
					<input class="thead"  name="gems" type="number" min="0" max="2" placeholder="0"/>
					<input  name="gemssum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="gems" >Gems (15₹)</label>
				</td>
				<td class="opt">
					<input class="thead" name="tchkn" type="number" min="0" max="2" placeholder="0"/>
					<input  name="tchknsum" class="addit" type="hidden" value="0"/>
					<label class="thead"  for="tchkn" >Tandoori Chicken (40₹)</label>
				</td>
			</tr>
			<!-- <tr>
				<td colspan="2">
				<input name="pizza" id="namepizza" placeholder="Name Your Pizza" type="text" required>
				</td>
			</tr> -->
		</table>


	
		



<!-- <div class="new">
	
	<input type="text" name="total" value="0" style="width: max-content; color: blanchedalmond; text-align: center;" readonly>
	<input type="submit" value="NEXT" style=" width: 100%;">
	<br>
</div> -->

	</form>


	


<script>



function updateTotal(){
	tot =  parseInt($(".opt input[name='mozsum']").val()) + parseInt($(".opt input[name='pepsum']").val()) + parseInt($(".opt input[name='capsum']").val()) + parseInt($(".opt input[name='bpepsum']").val()) + parseInt($(".opt input[name='papsum']").val()) + parseInt($(".opt input[name='gpepsum']").val()) + parseInt($(".opt input[name='olivesum']").val()) + parseInt($(".opt input[name='bchknsum']").val()) + parseInt($(".opt input[name='cornsum']").val()) + parseInt($(".opt input[name='gchknsum']").val()) + parseInt($(".opt input[name='bcornsum']").val()) + parseInt($(".opt input[name='sausagesum']").val()) + parseInt($(".opt input[name='mushsum']").val()) + parseInt($(".opt input[name='perisum']").val()) + parseInt($(".opt input[name='tomatosum']").val()) + parseInt($(".opt input[name='bbqhamsum']").val()) + parseInt($(".opt input[name='pansum']").val()) + parseInt($(".opt input[name='pephamsum']").val()) + parseInt($(".opt input[name='jalasum']").val()) + parseInt($(".opt input[name='ghamsum']").val()) + parseInt($(".opt input[name='onionsum']").val()) + parseInt($(".opt input[name='wingsum']").val()) + parseInt($(".opt input[name='pinesum']").val()) + parseInt($(".opt input[name='bporksum']").val()) + parseInt($(".opt input[name='gporksum']").val()) + parseInt($(".opt input[name='tchknsum']").val()) + parseInt($(".opt input[name='gemssum']").val()) + parseInt($(".opt input[name='strawsum']").val());
	console.log(tot);
	$(".nig input[name='total']").val(tot);
};




	$(".opt input[name='moz']").on('click blur keydown ', function(){
	if($('input[name="moz"]').val() == 0){
		$(".opt input[name='mozsum']").val('0');
	}
	else if($('input[name="moz"]').val() == 1){
		$(".opt input[name='mozsum']").val('30');
	}
	else if($('input[name="moz"]').val() == 2){
		$(".opt input[name='mozsum']").val('60');
	}
	
	updateTotal();
});


$(".opt input[name='pep']").on('click blur keydown ', function(){
	if($('input[name="pep"]').val() == 0){
		$(".opt input[name='pepsum']").val('0');
	}
	else if($('input[name="pep"]').val() == 1){
		$(".opt input[name='pepsum']").val('45');
	}
	else if($('input[name="pep"]').val() == 2){
		$(".opt input[name='pepsum']").val('90');
	}

	updateTotal();
});


$(".opt input[name='cap']").on('click blur keydown ', function(){
	let x;
	if($('input[name="cap"]').val() == 0){
		$(".opt input[name='capsum']").val('0');
	}
	else if($('input[name="cap"]').val() == 1){
		$(".opt input[name='capsum']").val('25');
	}
	else if($('input[name="cap"]').val() == 2){
		$(".opt input[name='capsum']").val('50');
	}

	updateTotal();
});

$(".opt input[name='bpep']").on('click blur keydown ', function(){
	let x;
	if($('input[name="bpep"]').val() == 0){
		$(".opt input[name='bpepsum']").val('0');
	}
	else if($('input[name="bpep"]').val() == 1){
		$(".opt input[name='bpepsum']").val('50');
	}
	else if($('input[name="bpep"]').val() == 2){
		$(".opt input[name='bpepsum']").val('100');
	}

	updateTotal();
});

$(".opt input[name='pap']").on('click blur keydown ', function(){
	let x;
	if($('input[name="pap"]').val() == 0){
		$(".opt input[name='papsum']").val('0');
	}
	else if($('input[name="pap"]').val() == 1){
		$(".opt input[name='papsum']").val('25');
	}
	else if($('input[name="pap"]').val() == 2){
		$(".opt input[name='papsum']").val('50');
	}

	updateTotal();
});

$(".opt input[name='gpep']").on('click blur keydown ', function(){
	let x;
	if($('input[name="gpep"]').val() == 0){
		$(".opt input[name='gpepsum']").val('0');
	}
	else if($('input[name="gpep"]').val() == 1){
		$(".opt input[name='gpepsum']").val('45');
	}
	else if($('input[name="gpep"]').val() == 2){
		$(".opt input[name='gpepsum']").val('90');
	}

	updateTotal();
});


$(".opt input[name='olive']").on('click blur keydown ', function(){
	let x;
	if($('input[name="olive"]').val() == 0){
		$(".opt input[name='olivesum']").val('0');
	}
	else if($('input[name="olive"]').val() == 1){
		$(".opt input[name='olivesum']").val('25');
	}
	else if($('input[name="olive"]').val() == 2){
		$(".opt input[name='olivesum']").val('50');
	}

	updateTotal();
});


$(".opt input[name='bchkn']").on('click blur keydown ', function(){
	let x;
	if($('input[name="bchkn"]').val() == 0){
		$(".opt input[name='bchknsum']").val('0');
	}
	else if($('input[name="bchkn"]').val() == 1){
		$(".opt input[name='bchknsum']").val('40');
	}
	else if($('input[name="bchkn"]').val() == 2){
		$(".opt input[name='bchknsum']").val('80');
	}

	updateTotal();
});


$(".opt input[name='corn']").on('click blur keydown ', function(){
	let x;
	if($('input[name="corn"]').val() == 0){
		$(".opt input[name='cornsum']").val('0');
	}
	else if($('input[name="corn"]').val() == 1){
		$(".opt input[name='cornsum']").val('25');
	}
	else if($('input[name="corn"]').val() == 2){
		$(".opt input[name='cornsum']").val('50');
	}

	updateTotal();
});


$(".opt input[name='gchkn']").on('click blur keydown ', function(){
	let x;
	if($('input[name="gchkn"]').val() == 0){
		$(".opt input[name='gchknsum']").val('0');
	}
	else if($('input[name="gchkn"]').val() == 1){
		$(".opt input[name='gchknsum']").val('50');
	}
	else if($('input[name="gchkn"]').val() == 2){
		$(".opt input[name='gchknsum']").val('100');
	}

	updateTotal();
});


$(".opt input[name='bcorn']").on('click blur keydown ', function(){
	let x;
	if($('input[name="bcorn"]').val() == 0){
		$(".opt input[name='bcornsum']").val('0');
	}
	else if($('input[name="bcorn"]').val() == 1){
		$(".opt input[name='bcornsum']").val('30');
	}
	else if($('input[name="bcorn"]').val() == 2){
		$(".opt input[name='bcornsum']").val('60');
	}

	updateTotal();
});


$(".opt input[name='sausage']").on('click blur keydown ', function(){
	let x;
	if($('input[name="sausage"]').val() == 0){
		$(".opt input[name='sausagesum']").val('0');
	}
	else if($('input[name="sausage"]').val() == 1){
		$(".opt input[name='sausagesum']").val('50');
	}
	else if($('input[name="sausage"]').val() == 2){
		$(".opt input[name='sausagesum']").val('100');
	}

	updateTotal();
});


$(".opt input[name='mush']").on('click blur keydown ', function(){
	let x;
	if($('input[name="mush"]').val() == 0){
		$(".opt input[name='mushsum']").val('0');
	}
	else if($('input[name="mush"]').val() == 1){
		$(".opt input[name='mushsum']").val('30');
	}
	else if($('input[name="mush"]').val() == 2){
		$(".opt input[name='mushsum']").val('60');
	}

	updateTotal();
});


$(".opt input[name='peri']").on('click blur keydown ', function(){
	let x;
	if($('input[name="peri"]').val() == 0){
		$(".opt input[name='perisum']").val('0');
	}
	else if($('input[name="peri"]').val() == 1){
		$(".opt input[name='perisum']").val('50');
	}
	else if($('input[name="peri"]').val() == 2){
		$(".opt input[name='perisum']").val('100');
	}

	updateTotal();
});


$(".opt input[name='tomato']").on('click blur keydown ', function(){
	let x;
	if($('input[name="tomato"]').val() == 0){
		$(".opt input[name='tomatosum']").val('0');
	}
	else if($('input[name="tomato"]').val() == 1){
		$(".opt input[name='tomatosum']").val('25');
	}
	else if($('input[name="tomato"]').val() == 2){
		$(".opt input[name='tomatosum']").val('50');
	}

	updateTotal();
});


$(".opt input[name='bbqham']").on('click blur keydown ', function(){
	let x;
	if($('input[name="bbqham"]').val() == 0){
		$(".opt input[name='bbqhamsum']").val('0');
	}
	else if($('input[name="bbqham"]').val() == 1){
		$(".opt input[name='bbqhamsum']").val('45');
	}
	else if($('input[name="bbqham"]').val() == 2){
		$(".opt input[name='bbqhamsum']").val('90');
	}

	updateTotal();
});


$(".opt input[name='pan']").on('click blur keydown ', function(){
	let x;
	if($('input[name="pan"]').val() == 0){
		$(".opt input[name='pansum']").val('0');
	}
	else if($('input[name="pan"]').val() == 1){
		$(".opt input[name='pansum']").val('35');
	}
	else if($('input[name="pan"]').val() == 2){
		$(".opt input[name='pansum']").val('70');
	}

	updateTotal();
});


$(".opt input[name='pepham']").on('click blur keydown ', function(){
	let x;
	if($('input[name="pepham"]').val() == 0){
		$(".opt input[name='pephamsum']").val('0');
	}
	else if($('input[name="pepham"]').val() == 1){
		$(".opt input[name='pephamsum']").val('45');
	}
	else if($('input[name="pepham"]').val() == 2){
		$(".opt input[name='pephamsum']").val('90');
	}

	updateTotal();
});


$(".opt input[name='gham']").on('click blur keydown ', function(){
	let x;
	if($('input[name="gham"]').val() == 0){
		$(".opt input[name='ghamsum']").val('0');
	}
	else if($('input[name="gham"]').val() == 1){
		$(".opt input[name='ghamsum']").val('40');
	}
	else if($('input[name="gham"]').val() == 2){
		$(".opt input[name='ghamsum']").val('80');
	}

	updateTotal();
});


$(".opt input[name='jala']").on('click blur keydown ', function(){
	let x;
	if($('input[name="jala"]').val() == 0){
		$(".opt input[name='jalasum']").val('0');
	}
	else if($('input[name="jala"]').val() == 1){
		$(".opt input[name='jalasum']").val('25');
	}
	else if($('input[name="jala"]').val() == 2){
		$(".opt input[name='jalasum']").val('50');
	}

	updateTotal();
});


$(".opt input[name='onion']").on('click blur keydown ', function(){
	let x;
	if($('input[name="onion"]').val() == 0){
		$(".opt input[name='onionsum']").val('0');
	}
	else if($('input[name="onion"]').val() == 1){
		$(".opt input[name='onionsum']").val('25');
	}
	else if($('input[name="onion"]').val() == 2){
		$(".opt input[name='onionsum']").val('50');
	}

	updateTotal();
});


$(".opt input[name='pine']").on('click blur keydown ', function(){
	let x;
	if($('input[name="pine"]').val() == 0){
		$(".opt input[name='pinesum']").val('0');
	}
	else if($('input[name="pine"]').val() == 1){
		$(".opt input[name='pinesum']").val('30');
	}
	else if($('input[name="pine"]').val() == 2){
		$(".opt input[name='pinesum']").val('60');
	}

	updateTotal();
});


$(".opt input[name='wing']").on('click blur keydown ', function(){
	let x;
	if($('input[name="wing"]').val() == 0){
		$(".opt input[name='wingsum']").val('0');
	}
	else if($('input[name="wing"]').val() == 1){
		$(".opt input[name='wingsum']").val('45');
	}
	else if($('input[name="wing"]').val() == 2){
		$(".opt input[name='wingsum']").val('90');
	}

	updateTotal();
});


$(".opt input[name='bpork']").on('click blur keydown ', function(){
	let x;
	if($('input[name="bpork"]').val() == 0){
		$(".opt input[name='bporksum']").val('0');
	}
	else if($('input[name="bpork"]').val() == 1){
		$(".opt input[name='bporksum']").val('40');
	}
	else if($('input[name="bpork"]').val() == 2){
		$(".opt input[name='bporksum']").val('80');
	}

	updateTotal();
});


$(".opt input[name='gpork']").on('click blur keydown ', function(){
	let x;
	if($('input[name="gpork"]').val() == 0){
		$(".opt input[name='gporksum']").val('0');
	}
	else if($('input[name="gpork"]').val() == 1){
		$(".opt input[name='gporksum']").val('50');
	}
	else if($('input[name="gpork"]').val() == 2){
		$(".opt input[name='gporksum']").val('100');
	}

	updateTotal();
});


$(".opt input[name='gems']").on('click blur keydown ', function(){
	let x;
	if($('input[name="gems"]').val() == 0){
		$(".opt input[name='gemssum']").val('0');
	}
	else if($('input[name="gems"]').val() == 1){
		$(".opt input[name='gemssum']").val('15');
	}
	else if($('input[name="gems"]').val() == 2){
		$(".opt input[name='gemssum']").val('30');
	}

	updateTotal();
});


$(".opt input[name='straw']").on('click blur keydown ', function(){
	let x;
	if($('input[name="straw"]').val() == 0){
		$(".opt input[name='strawsum']").val('0');
	}
	else if($('input[name="straw"]').val() == 1){
		$(".opt input[name='strawsum']").val('45');
	}
	else if($('input[name="straw"]').val() == 2){
		$(".opt input[name='strawsum']").val('90');
	}

	updateTotal();
});


$(".opt input[name='tchkn']").on('click blur keydown ', function(){
	let x;
	if($('input[name="tchkn"]').val() == 0){
		$(".opt input[name='tchknsum']").val('0');
	}
	else if($('input[name="tchkn"]').val() == 1){
		$(".opt input[name='tchknsum']").val('40');
	}
	else if($('input[name="tchkn"]').val() == 2){
		$(".opt input[name='tchknsum']").val('80');
	}

	updateTotal();
});






</script>









</div>
  <div class="vincent_back_to_top"></div>
	<footer>
		<!-- <div class="vincent_container"> -->
			<!-- <div class="row"> -->
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
  
			<!-- </div> -->
		<!-- </div> -->
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