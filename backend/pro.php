<?php

session_start();

$phone = $_POST['phone'];
$bio = $_POST['bio'];
$city = $_POST['city'];
$user = $_SESSION['user'];
$imgqr = $_POST['imgqr'];





$servername = "localhost";
$dbuser = "root";
$dbpass = "root";
$database = "limit";


// Create connection
$conn = new mysqli($servername, $dbuser, $dbpass, $database, "3308");

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}


else{

 

          $stmt = $conn->prepare("update profile set p_phone=?, p_city=?, p_bio=?, p_check=1, p_img=? where p_user='$user' ");
          $stmt->bind_param("isss", $phone, $city, $bio, $imgqr);
          $stmt->execute();
  
        echo "<script>
            alert('Successfully Updated.');
            window.location.href='../prodone.php';
        </script>";
        

          $stmt->close();
          $conn->close();
     
      
   




}






?>