
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
	<title>Sign In</title>
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
			
			<div class="col col-6 vincent_header_center">
				<div class="vincent_def_header">
					
					<nav class="vincent_menu_cont">
						<ul id="menu-main-menu" class="vincent_menu">
						<li>
						<div class="vincent_logo_cont">
						<a href="c.html" class="vincent_image_logo">
						</a>
					</div>
						</li>
							<li class="menu-item"><a href="c.html">Home</a>
								
							</li>
							
							<li class=" menu-item menu-item-has-children"><a href="#">Features</a>
								<ul class="sub-menu">
									
									<li class="menu-item"><a href="gal.html">Fullscreen Gallery</a></li>
									
								</ul>
							</li>
							<li class="menu-item menu-item-has-children"><a href="#">About</a>
								<ul class="sub-menu">
									<li class="menu-item"><a href="about1.html">Error</a></li>
									<!-- <li class="menu-item"><a href="about2.html">About 2</a></li> -->
									<li class="menu-item"><a href="teams.html">Team</a></li>
								</ul>
							</li>
							
							
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
			
		</div>
	</header>

					
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