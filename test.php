<?php   

session_start();

$arr = $_SESSION['cart'];

$max=sizeof($arr);

// echo $_SESSION['cart'][0];
echo "<br>";
    foreach($arr as $key => $val){
echo "$key -> $val ,"; 
} 
echo "<br>";

?>



















<?php




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

	$max = sizeof($_SESSION['cart']);
	$arr = $_SESSION['cart'];







?> 



					<?php 
					

						foreach($arr as $key => $val){

							$sql = "select o_cost from menuorder where o_pizza = '$val'";
							$res = mysqli_query($conn,$sql);
							$row = mysqli_fetch_assoc($res); 


						


					?>

								<?php echo $val;?>
							₹<?php echo $row['o_cost'];?>
							₹<?php echo $row['o_cost'];?>
							
						
						<?php } ?>
						
						



<?php 

} // end of connection database

} // end of if for checking SESSION

else{
    echo "<script>window.location.href='signin.php'</script>";
}
?> 

  