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
		$sql = "select r_name from reg WHERE r_username='$user' ";
		$res = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($res);
		$n = $row['r_name'];
		$sql = "select * from profile WHERE p_user='$user'";
		$res = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($res);


		if($row['p_check']==0){
	
	


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
	<title><?php echo $user;?>, Profile</title>

	<link rel="stylesheet"  href="https://demo-storage.com/pm/html/vincent/css/kube.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet"  href="https://demo-storage.com/pm/html/vincent/css/owl.carousel.min.css">
  <link rel="stylesheet"  href="css/stylefinal.css">
  <link rel="stylesheet"  href="css/style1.css">

	<!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5G6PPWB');</script>
  <!-- End Google Tag Manager -->
  <style>
    .vincent_form1 input,
.vincent_form1 textarea {
  margin-bottom: 20px;
}
.vincent_form1 input[type='submit'] {
  margin-bottom: 35px;
}

  </style>
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
						<a href="standard-post.html"><h4 class="vincent_blog_grid_title">
							<?php 
							
						
								echo $n;
							

							?>
						</h4></a>
						<div class="vincent_meta">
							
							
						</div>
						<div class="vincent_post_formats">
              <img src="http://placehold.it/305x305/ffc851/000&text=YOUR_QR" alt="your_qr">
						</div>
						<p class="vincent_excerpt">
						<?php
						
						if($row['p_bio']==""){
							echo "Your Bio, get crazy here.";
						}

						else{
							echo $row['p_bio'];
						}
						
						?>

						</p>
					</div>
        </div>
        <form action="backend/pro.php" method="POST" id="signup-form" class="signup-form vincent_form1">
        <div class="grid-item">
          <div class="main" >
  
            <div class="container1" style="padding-bottom:30px;" >
                <div class="signup-content">
                    <!-- <form action="" method="POST" id="signup-form" class="signup-form vincent_form"> -->
                        <h2>Your Profile </h2>
                        <!-- <p class="desc" style="color: #fff;">to get discount 10% </p> -->
                        <div class="form-group">
                            <input type="text" required class="form-input" name="name" id="name" placeholder="Your Full Name" readonly value="<?php echo $n;?>"/>
                        </div>
            <div class="form-group">
                            <!-- <input type="text" required class="form-input" name="username" id="username" placeholder="Username"/> -->
                        </div>
                        <div class="form-group">
                            <!-- <input type="email" required class="form-input" name="email" id="email" placeholder="Email"/> -->
                            <textarea style="height: 100px;" class="form-input" name="bio" placeholder="Bio"></textarea>
                        </div>
                        
            
                        
                    
                </div>
            </div>
    
    </div>
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
                          <input type="text" pattern="[0-9]{10}" max="10" required class="form-input" name="phone"  placeholder="Contact No."/>
                      </div>
          <div class="form-group">
                          <input type="text" required class="form-input" name="username" id="username" placeholder="Username" value="<?php echo $user;?>" readonly/>
                      </div>
                      <div class="form-group">
                          <input type="text" required class="form-input" name="city" placeholder="City"/>
                      </div>
                      
          
                      <div class="form-group" style="float: right;">
                          <input type="submit" name="submit"  id="submit" class="form-submit submit" value="Update"/>
                          
                      </div>
                  <!-- </form> -->
              </div>
          </div>
  
  </div>
      </div>
    </form>
				

				
				
			

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
					<div class="vincent_foter_text">+91 9345678765. <span>8:00 am – 11:30 pm</span></div>
					<ul class="vincent_foter_menu">
						<li><a href="c.html">Home</a></li>
						
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

  
  <script>
    const data = JSON.stringify({
 "logo":"iVBORw0KGgoAAAANSUhEUgAAAu0AAAFMCAYAAAB/FoKxAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAUGVYSWZNTQAqAAAACAACARIAAwAAAAEAAQAAh2kABAAAAAEAAAAmAAAAAAADoAEAAwAAAAEAAQAAoAIABAAAAAEAAALtoAMABAAAAAEAAAFMAAAAANllY4kAAAFZaVRYdFhNTDpjb20uYWRvYmUueG1wAAAAAAA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJYTVAgQ29yZSA1LjQuMCI+CiAgIDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+CiAgICAgIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiCiAgICAgICAgICAgIHhtbG5zOnRpZmY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vdGlmZi8xLjAvIj4KICAgICAgICAgPHRpZmY6T3JpZW50YXRpb24+MTwvdGlmZjpPcmllbnRhdGlvbj4KICAgICAgPC9yZGY6RGVzY3JpcHRpb24+CiAgIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+CkzCJ1kAAEAASURBVHgB7b0/rC3Hned3qKWN1SSk/gS7gMYkEw024mPggErmyVKwgQg+JpSzdxlYsJToERzAECHiUSAgOZDAxw0oYxJeBoYtJiTBCWxgOOI4kAw4eI+Bg52EFIaBA61FOlgusAFdn3PeT7du3eruqu6q6upzvgXce87p0131q09VV3/r17+u88But/vC/SmJgAiIgAiIgAiIgAiIgAh0SuBLndols0RABERABERABERABERABO4TkGhXVxABERABERABERABERCBzglItHfeQDJPBERABERABERABERABCTa1QdEQAREQAREQAREQAREoHMCEu2dN5DMEwEREAEREAEREAEREAGJdvUBERABERABERABERABEeicgER75w0k80RABERABERABERABERAol19QAREQAREQAREQAREQAQ6JyDR3nkDyTwREAEREAEREAEREAERkGhXHxABERABERABERABERCBzglItHfeQDJPBERABERABERABERABCTa1QdEQAREQAREQAREQAREoHMCEu2dN5DMEwEREAEREAEREAEREAGJdvUBERABERABERABERABEeicgER75w0k80RABERABERABERABERAol19QAREQAREQAREQAREQAQ6JyDR3nkDyTwREAEREAEREAEREAERkGhXHxABERABERABERABERCBzglItHfeQDJPBERABERABERABERABCTa1QdEQAREQAREQAREQAREoHMCEu2dN5DMEwEREAEREAEREAEREAGJdvUBERABERABERABERABEeicgER75w0k80RABERABERABERABERAol19QAREQAREQAREQAREQAQ6JyDR3nkDyTwREAEREAEREAEREAERkGhXHxABERABERABERABERCBzglItHfeQDJPBERABERABERABERABCTa1QdEQAREQAREQAREQAREoHMCEu2dN5DMEwEREAEREAEREAEREAGJdvUBERABERABERABERABEeicgER75w0k80RABERABERABERABERAol19QAREQAREQAREQAREQAQ6JyDR3nkDyTwREAEREAEREAEREAERkGhXHxABERABERABERABERCBzglItHfeQDJPBERABERABERABERABCTa1QdEQAREQAREQAREQAREoHMCEu2dN5DMEwEREAEREAEREAEREAGJdvUBERABERABERABERABEeicgER75w0k80RABERABERABERABERAol19QAREQAREQAREQAREQAQ6JyDR3nkDyTwREAEREAEREAEREAEReFAITovAw3+x2z3+jd2O12t/eaj7tfuf+cQ2vgvTp/9xt7v3z7vdx/9ht/vg3+92//hPh/fhfvosAiIgAiIgAiIgAiJQnsADLssvymerHNck8OjXdrtH3J8J8OvfvCzSS9n28R+dgHfiHRH/7oe7HcJeSQREQAREQAREQAREoDwBifbyTJvlaOL8+l/tdrznj/drJTzx79xzAt798V5JBERABERABERABESgDAGJ9jIcq+fy185bjuccYc7rmuI8pbJ43RHw/BFKIy98CjXtIwIiIAIiIAIiIAJxAhLtcS6rbbWYc0Q5seZ7of711cwpVvA7dw+hNHjhiYtXEgEREAEREAEREAERSCcg0Z7OqviexyrQ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P4JGVBVEYA0CCpFZg7rKFAEREAEROFUCEu2n2vKqtwgsJKCHURcC1OEiIAIiIAIikEFAoj0DlnYVARG4IIBoJ7ZdSQREQAREQAREoD4Bifb6jFWCCBwtAYXIHG3TqmIiIAIiIAKdEXjA2fNFZzbJHBEQAREQAREQAREQAREQAY+APO0eDL0VAREQAREQAREQAREQgR4JSLT32CqySQREQAREQAREQAREQAQ8AhLtHgy9FQEREAEREAEREAEREIEeCUi099gqskkEREAEREAEREAEREAEPAIS7R4MvRUBERABERABERABERCBHglItPfYKrJJBERABERABERABERABDwCEu0eDL0VAREQAREQAREQAREQgR4JSLT32CqySQREQAREQAREQAREQAQ8AhLtHgy9FQEREAEREAEREAEREIEeCUi099gqskkEREAEREAEREAEREAEPAIS7R4MvRUBERABERABERABERCBHglItPfYKrJJBERABERABERABERABDwCEu0eDL0VAREQAREQAREQAREQgR4JSLT32CqySQREQAREQAREQAREQAQ8AhLtHgy9FQEREAEREAEREAEREIEeCUi099gqskkEREAEREAEREAEREAEPAL/P9m1BOBiDMxlAAAAAElFTkSuQmCC",
"text": "<?php echo $user;?>",
"width": 500
});

const xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
if (this.readyState === this.DONE) {
console.log(this.responseText);
    var e = this.responseText;
    var o = JSON.parse(e);
    // $('#qr').attr("src", o.b64ImgUrl);
	$('#imgqr').val(o.b64ImgUrl);
}
});

xhr.open("POST", "https://qr-code8.p.rapidapi.com/qrcode/generate");
xhr.setRequestHeader("content-type", "application/json");
xhr.setRequestHeader("x-rapidapi-key", "b87afd4c15msh7426185e2a83114p1e3b17jsnc36f42faf8c7");
xhr.setRequestHeader("x-rapidapi-host", "qr-code8.p.rapidapi.com");

xhr.send(data);


</script> 
	<script src="https://demo-storage.com/pm/html/vincent/js/jquery-3.2.1.min.js"></script>
	<script src="https://demo-storage.com/pm/html/vincent/js/isotope.pkgd.min.js"></script>
	<script src="https://demo-storage.com/pm/html/vincent/js/imagesloaded.pkgd.min.js"></script>
	<script src="https://demo-storage.com/pm/html/vincent/js/owl.carousel.min.js"></script>
	<script src="https://demo-storage.com/pm/html/vincent/js/index.js"></script>
</body>
</html>



<?php 

		}
		else{
			echo "<script>window.location.href='prodone.php'</script>";
		}

	   }

}

else{
    echo "<script>window.location.href='signin.php'</script>";
}

?>