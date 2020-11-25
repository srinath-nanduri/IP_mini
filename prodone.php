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
		$user = $_SESSION['user'];
		$sql = "select * from profile WHERE p_user='$user' ";
		$res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res);
        $qr  = $row['p_img'];
        $bio = $row['p_bio'];
        $city = $row['p_city'];
        $no = $row['p_phone'];
        $sql = "select r_name from reg WHERE r_username='$user' ";
		$res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res);



		
	
	


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
	<title><?php echo $row['r_name'];?>, Profile</title>

	<link rel="stylesheet"  href="https://demo-storage.com/pm/html/vincent/css/kube.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet"  href="https://demo-storage.com/pm/html/vincent/css/owl.carousel.min.css">
  <link rel="stylesheet"  href="css/stylefinal.css">
  

	<!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5G6PPWB');</script>
  <!-- End Google Tag Manager -->
  <style>
    .vincent_form1 input,
.vincent_form1 textarea label{
  margin-bottom: 20px;
}
label{
    display:block;
}
.vincent_form1 input[type='submit'] {
  margin-bottom: 35px;
}

thead td{
min-width: 100px;
}

#div1::-webkit-scrollbar {
    display: none;
}

#div2::-webkit-scrollbar {
	width:5px;
	height:5px;
	/* color:black; */
	background-color:transparent;
	opacity:0.8;
}

#div2::-webkit-scrollbar-thumb {
	width:5px;
	height:5px;
	/* color:black; */
	background-color:#ffc851;
	opacity:0.8;
}



#hidehead{
	color:red;
	opacity:0;
	/* display:none; */
}
  </style>
  <script src="https://code.jquery.com/jquery-latest.js"></script>
</head>

<body>
	<header class="vincent_header">
		<div class="row ">
			
			<div class="col col-6 vincent_header_center">
				<div class="vincent_def_header">
					
					<nav class="vincent_menu_cont">
						<ul id="menu-main-menu" class="vincent_menu">
              <li>
                <div class="vincent_logo_cont">
                  <a href="index.html" class="vincent_image_logo">
                  </a>
                </div>
              </li>
							<li class="menu-item menu-item-has-children"><a href="c.html">Home</a>
								
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
      <div class="col col-3 vincent_header_right">
				<div class="vincent_inner">
					<a href="profile.php" style="font:28px 'PT Sans Narrow', sans-serif">
						<!-- <div class="vincent_shopping_cart">
							<div class="vincent_total_price">$0.00</div>
							<div class="vincent_total_items">0 items - View Cart</div>
							<div class="vincent_cart_item_counter">0</div>
						</div> -->
					</a>
					<form><li class="menu-item" ><a href="backend/logout.php"> Logout </a></li></form>
				</div>
			</div>
			
		</div>
	</header>
	<div class="vincent_title_block vincent_corners">
		<div class="vincent_inner_text">
			<h1>User Profile</h1>
		</div>
	</div>
	<div class="vincent_container vincent_blog_grid">
		<div class="vincent_blog_grid_wraper">
			<div class="grid1">
				<div class="grid-item">
					<div class="vincent_blog_grid_item">
						<a href="standard-post.html"><h4 class="vincent_blog_grid_title"><?php echo $row['r_name'];?></h4></a>
						<div class="vincent_meta">
							
							
						</div>
						<div class="vincent_post_formats">
              <img src="<?php echo $qr;?>" alt="your_qr">
						</div>
						<p class="vincent_excerpt"><?php echo $bio;?></p>
					</div>
        </div>
        <form action="backend/change.php" method="POST" class="signup-form vincent_form1">
        <div class="grid-item">
          &nbsp;
        </div>
			<div class="grid-item">
        <div class="main" >

          <div class="container1" style="padding-bottom:30px;" >
              <div class="signup-content">
                  <!-- <form action="" method="POST" id="signup-form" class="signup-form vincent_form"> -->
					  <h2> &nbsp; </h2>
					  <input name="imgqr" id="imgqr" type="hidden" value="" />
                      <!-- <p class="desc" style="color: #fff;">to get discount 10% </p> -->
                      <div class="form-group">
                      <label style="float:left;" >Contact No.</label>
                          <input readonly type="text" pattern="[0-9]{10}" max="10" value="<?php echo $no;?>" required class="form-input" name="phone"  placeholder="Contact No."/>
                      </div>
          <div class="form-group">
          <label style="float:left;" >Username</label>
                          <input readonly type="text" required class="form-input" name="username" id="username" placeholder="Username" value="<?php echo $user;?>" readonly/>
                      </div>
                      <div class="form-group">
                      <label style="float:left;" >City</label>
                          <input readonly type="text" required class="form-input" value="<?php echo $city;?>" name="city" placeholder="City"/>
                      </div>
                      
          
                      <div class="form-group" style="float: right;">
                          <input type="submit" name="submit" id="submit" class="form-submit submit" value="Change"/>
                      </div>
        
              </div>
          </div>
  
  </div>
      </div>
    </form>
				

				
				
			

			</div>
		</div>
	
	</div>







	<hr>
		<div style="margin:0 auto; width: fit-content;">
			<h1>Your Orders</h1>
		</div>
	<hr>




    <div class="vincent_container vincent_blog_standard" >
		<div id="div1" style="overflow: scroll;">
		<table >
		<thead  style="font-weight: bolder; ">
						<tr>
                            <td><strong>Sr No.</strong></td>
                            <td><strong>Amount</strong></td>
                            <td><strong>Size</strong></td>
                            <td><strong>Crust</strong></td>
                            <td><strong>Sauce</strong></td>
                            <td><strong>Cheese</strong></td>
                            <td><strong>Mozarella</strong></td>
                            <td><strong>Pepperoni</strong></td>
                            <td><strong>Capsicum</strong></td>
                            <td><strong>BBQ Pepperoni</strong></td>
                            <td><strong>Paprika</strong></td>
                            <td><strong>Grilled Pepperoni</strong></td>
                            <td><strong>Olives</strong></td>
                            <td><strong>BBQ Chicken</strong></td>
                            <td><strong>Corn</strong></td>
                            <td><strong>Grilled Chicken</strong></td>
                            <td><strong>Baby Corn</strong></td>
                            <td><strong>Chicken Sausage</strong></td>
                            <td><strong>Mushroom</strong></td>
                            <td><strong>Peri-Peri Wings</strong></td>
                            <td><strong>Tomato</strong></td>
                            <td><strong>BBQ Ham</strong></td>
                            <td><strong>Paneer</strong></td>
                            <td><strong>Pepper Grilled Ham</strong></td>
                            <td><strong>Jalapeno</strong></td>
                            <td><strong>Grilled Ham</strong></td>
                            <td><strong>Onion</strong></td>
                            <td><strong>Stuffed Chicken Wing</strong></td>
                            <td><strong>Pineapple</strong></td>
                            <td><strong>BBQ Pork</strong></td>
                            <td><strong>Strawberry</strong></td>
                            <td><strong>Grilled Pork</strong></td>
                            <td><strong>Gems</strong></td>
							<td><strong>Tandoori Chicken</strong></td>
						</tr>
						</thead>
		</table>
</div>
        <div class="row gutters" id="div2" style="max-height:400px; overflow: scroll;">
    
            <div class="col col-11 vincent_content" style="padding-top: 0px;">
            <div class="vincent_blog_standard_wraper">
                <div class="vincent_blog_standard_item">
                    <!-- <h3 class="vincent_blog_standard_title">Your Previous Orders</h3> -->
                   
                    <table class="">
						 <thead id="hidehead" style="font-weight: bolder; ">
						<tr>
                            <td><strong>Sr No.</strong></td>
                            <td><strong>Amount</strong></td>
                            <td><strong>Size</strong></td>
                            <td><strong>Crust</strong></td>
                            <td><strong>Sauce</strong></td>
                            <td><strong>Cheese</strong></td>
                            <td><strong>Mozarella</strong></td>
                            <td><strong>Pepperoni</strong></td>
                            <td><strong>Capsicum</strong></td>
                            <td><strong>BBQ Pepperoni</strong></td>
                            <td><strong>Paprika</strong></td>
                            <td><strong>Grilled Pepperoni</strong></td>
                            <td><strong>Olives</strong></td>
                            <td><strong>BBQ Chicken</strong></td>
                            <td><strong>Corn</strong></td>
                            <td><strong>Grilled Chicken</strong></td>
                            <td><strong>Baby Corn</strong></td>
                            <td><strong>Chicken Sausage</strong></td>
                            <td><strong>Mushroom</strong></td>
                            <td><strong>Peri-Peri Wings</strong></td>
                            <td><strong>Tomato</strong></td>
                            <td><strong>BBQ Ham</strong></td>
                            <td><strong>Paneer</strong></td>
                            <td><strong>Pepper Grilled Ham</strong></td>
                            <td><strong>Jalapeno</strong></td>
                            <td><strong>Grilled Ham</strong></td>
                            <td><strong>Onion</strong></td>
                            <td><strong>Stuffed Chicken Wing</strong></td>
                            <td><strong>Pineapple</strong></td>
                            <td><strong>BBQ Pork</strong></td>
                            <td><strong>Strawberry</strong></td>
                            <td><strong>Grilled Pork</strong></td>
                            <td><strong>Gems</strong></td>
							<td><strong>Tandoori Chicken</strong></td>
						</tr>
						</thead> 
						<tbody style="margin-top:-200px;" >
						<?php
$count=1;
$sel_query="Select * from menuorder WHERE o_user='$user' ORDER BY o_id desc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td>₹<?php echo $row["o_cost"]; ?></td>
                            <td><?php echo $row["o_size"]; ?></td>
                            <td><?php echo $row["o_crust"]; ?></td>
                            <td><?php echo $row["o_sauce"]; ?></td>
                            <td><?php echo $row["o_cheese"]; ?></td>
                            <td><?php echo $row["o_moz"]; ?></td>
                            <td><?php echo $row["o_pep"]; ?></td>
                            <td><?php echo $row["o_cap"]; ?></td>
                            <td><?php echo $row["o_bpep"]; ?></td>
                            <td><?php echo $row["o_pap"]; ?></td>
                            <td><?php echo $row["o_gpep"]; ?></td>
                            <td><?php echo $row["o_olive"]; ?></td>
                            <td><?php echo $row["o_bchkn"]; ?></td>
                            <td><?php echo $row["o_corn"]; ?></td>
                            <td><?php echo $row["o_gchkn"]; ?></td>
                            <td><?php echo $row["o_bcorn"]; ?></td>
                            <td><?php echo $row["o_sausage"]; ?></td>
                            <td><?php echo $row["o_mush"]; ?></td>
                            <td><?php echo $row["o_peri"]; ?></td>
                            <td><?php echo $row["o_tomato"]; ?></td>
                            <td><?php echo $row["o_bbqham"]; ?></td>
                            <td><?php echo $row["o_pan"]; ?></td>
                            <td><?php echo $row["o_pepham"]; ?></td>
                            <td><?php echo $row["o_jala"]; ?></td>
                            <td><?php echo $row["o_gham"]; ?></td>
                            <td><?php echo $row["o_onion"]; ?></td>
                            <td><?php echo $row["o_wing"]; ?></td>
                            <td><?php echo $row["o_pine"]; ?></td>
                            <td><?php echo $row["o_bpork"]; ?></td>
                            <td><?php echo $row["o_straw"]; ?></td>
                            <td><?php echo $row["o_gpork"]; ?></td>
                            <td><?php echo $row["o_gems"]; ?></td>
                            <td><?php echo $row["o_tchkn"]; ?></td>
						</tr>
						<?php $count++; } ?>
						</tbody>
                    </table>
                   <script>
					   $("#div1").scroll(function () { 
  $("#div2").scrollTop($("#div1").scrollTop());
  $("#div2").scrollLeft($("#div1").scrollLeft());
});
$("#div2").scroll(function () { 
  $("#div1").scrollTop($("#div2").scrollTop());
  $("#div1").scrollLeft($("#div2").scrollLeft());
});
				   </script>

                </div>
                </div>
                </div>
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
						<li><a href="c.html">Home</a></li>
						<li><a href="menu1.html">Menu</a></li>
						<li><a href="gal.html">Features</a></li>
						<li><a href="about1.html">About</a></li>
						<li><a href="blog-grid.html">Blog</a></li>
						<li><a href="feedback.html">Contact</a></li>
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
	<script src="https://demo-storage.com/pm/html/vincent/js/isotope.pkgd.min.js"></script>
	<script src="https://demo-storage.com/pm/html/vincent/js/imagesloaded.pkgd.min.js"></script>
	<script src="https://demo-storage.com/pm/html/vincent/js/owl.carousel.min.js"></script>
	<script src="https://demo-storage.com/pm/html/vincent/js/index.js"></script>
</body>
</html>





<?php 

	   }

}

else{
    echo "<script>window.location.href='signin.php'</script>";
}

?>