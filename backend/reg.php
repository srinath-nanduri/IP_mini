<?php 


$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];


$pass = $_POST['password'];
$cpass = $_POST['cpassword'];
$hash = password_hash($pass, PASSWORD_DEFAULT);
$error=0;


$servername = "localhost";
$dbuser = "root";
$dbpass = "root";
$database = "limit";



// if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
//     echo 'We don\'t have mysqli!!!';
// } else {
//     echo 'Phew we have it!';
// }



// Create connection
$conn = new mysqli($servername, $dbuser, $dbpass, $database, "3308");

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}


else{


    $sqle="select * from reg where ( r_email='$email');";
    $sqlu="select * from reg where ( r_username='$username');";

    $rese=mysqli_query($conn,$sqle);
    $resu=mysqli_query($conn,$sqlu);
   
    //if (mysqli_num_rows($res) > 0)  
    //{
      // output data of each row
      $rowe = mysqli_fetch_assoc($rese);
      $rowu = mysqli_fetch_assoc($resu);
   
     
      if($email==$rowe['r_email'] )
      {
          echo "Email or Username already exists";
          $error=1;
      }
      
      if($username==$rowu['r_username']){
          echo "Username already exists";
          $error=1;
      }
      
     
      if($cpass!==$pass)
      {
          echo "Passwords doesn't match.";
          $error=1;
      }
     
   
     //}
     //else
     if($error==0)
     { // if condition ends here if it is new entry, echo will work
          //echo "alright";

          $stmt = $conn->prepare("insert into reg( r_email, r_password, r_username, r_name) values(?,?,?,?) ");
          $stmt->bind_param("ssss", $email, $hash, $username, $name);
          $stmt->execute();
        //   echo "Successfully Registered.";
        echo "<script>
            alert('Successfully Registered.');
            window.location.href='signin.html';
        </script>";
        

          //echo "<script>window.location.href='http://nanmav.000webhostapp.com/'</script>";

        //   echo "<script>window.location.href='index.php'</script>";

          $stmt->close();
          $conn->close();
     

      }
   








    // $stmt = $conn->prepare("insert into reg(t_username, r_email, r_password, t_hash) values(?,?,?) ");
    // $stmt->bind_param("sss", $username, $email, $pass);
    // $stmt->execute();
    // echo "Successfully Registered.";
    // $stmt->close();
    // $conn->close();

}









?>