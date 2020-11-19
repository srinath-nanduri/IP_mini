<?php

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

    if(isset($_POST['username'])){
        $user = $_POST['username'];
     
        $query = "select count(*) as cntUser from reg where r_username='$user'";
     
        $result = mysqli_query($conn,$query);
        $response = "<span style='color: blanchedalmond; background-color:rgba(0,0,0,0.3);'><strong>&nbsp;Perfect, it's available&nbsp;</strong></span>";
        if(mysqli_num_rows($result)){
           $row = mysqli_fetch_array($result);
     
           $count = $row['cntUser'];
         
           if($count > 0){
               $response = "<span style='color: tomato; background-color:rgba(0,0,0,0.3);'><strong>&nbsp;Sorry it's taken&nbsp;</strong></span>";
           }
        
        }
     
        echo $response;
        die;
     }
    

}

