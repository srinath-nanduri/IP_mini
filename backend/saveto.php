<?php
session_start();

$servername = "localhost";
$dbuser = "root";
$dbpass = "root";
$database = "limit";



if(isset($_POST['save'])){

   
    
    $conn = new mysqli($servername, $dbuser, $dbpass, $database, "3308");
    
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
       }
    
    
       else{
    $max = sizeof($_SESSION['cart']);
    $arr = $_SESSION['cart'];
    
    foreach($arr as $key => $val){
        
            $sql = "update menuorder set o_save=1 where o_pizza = '$val'";
			$res = mysqli_query($conn,$sql);
            // $row = mysqli_fetch_assoc($res); 
            
            
            if($res>0){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
        }

        } 

        echo "<script>window.location.href='../prodone.php'</script>";

}
}

?>