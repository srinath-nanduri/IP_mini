<?php 

session_start();

$user = $_SESSION['user'];
$size = $_POST['sizeradio'];
$crust = $_POST['crustradio'];
$sauce = $_POST['sauceradio'];
$cheese = $_POST['cheeseradio'];
$pizza = $_POST['pizza'];
// $sizeamt = 0;
// $cheeseamt = 0;
// $sauceamt = 0;
// $crustamt = 0;
$total=0;

$name = $user.$pizza;
$_SESSION['name'] = $name;
// $_SESSION['cart'] = array();
array_push($_SESSION['cart'],$name);

$servername = "localhost";
$dbuser = "root";
$dbpass = "root";
$database = "limit";


$conn = new mysqli($servername, $dbuser, $dbpass, $database, "3308");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }


   else{



    $sql="select m_price from menu where ( m_stuff='$size');";
    $res=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    $sizeamt = $row["m_price"];

    $sql="select m_price from menu where ( m_stuff='$crust');";
    $res=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    $crustamt = $row["m_price"];

    $sql="select m_price from menu where ( m_stuff='$sauce');";
    $res=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    $sauceamt = $row["m_price"];

    $sql="select m_price from menu where ( m_stuff='$cheese');";
    $res=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    $cheeseamt = $row["m_price"];

    $total = $sizeamt+$crustamt+$sauceamt+$cheeseamt;


    $stmt = $conn->prepare("insert into menuorder( o_user, o_pizza, o_cost, o_size, o_crust, o_sauce, o_cheese) values(?,?,?,?,?,?,?) ");
    $stmt->bind_param("ssdssss",$user, $name, $total, $size, $crust, $sauce, $cheese);
    $stmt->execute();



    $stmt->close();
    $conn->close();

    echo "<script>window.location.href='../temp.php'</script>";






   }

?>