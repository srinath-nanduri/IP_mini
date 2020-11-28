<?php


session_start();

$v = 'rem';

$max = $_SESSION['max'];
$a = array();

for ($x = 0; $x < $max; $x++) {
    $i = $v.$x;
    array_push($a,$i);
  }

  $servername = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $database = "limit";
  
  
  $conn = new mysqli($servername, $dbuser, $dbpass, $database, "3308");
  
  
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
     }
  
  
     else{

  foreach($a as $key => $val){
    // echo "$key -> $val ,"; 
    if(isset($_POST[$val])){
        
        $sql = "UPDATE menuorder SET o_save=0 WHERE o_pizza='$_POST[$val]'";
        $res = mysqli_query($conn, $sql);
        // unset($_SESSION['cart'][$key]);
        // $_SESSION['cart'] = array_values($_SESSION['cart']);
        
    }
    } 


    echo "<script>window.location.href='../prodone.php'</script>";
     }
?>