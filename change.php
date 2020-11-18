<?php



session_start();




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

 

          $stmt = $conn->prepare("update profile set p_check=0 ");
          $stmt->execute();
        //   echo "Successfully Registered.";
        echo "<script>
            // alert('Successfully Updated.');
            window.location.href='profile.php';
        </script>";
        

          //echo "<script>window.location.href='http://nanmav.000webhostapp.com/'</script>";

        //   echo "<script>window.location.href='index.php'</script>";

          $stmt->close();
          $conn->close();
     
      
   




}






?>
