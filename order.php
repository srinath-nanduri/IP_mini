<?php 

$size = $_POST['sizeradio'];
$crust = $_POST['crustradio'];
$sauce = $_POST['sauceradio'];
$cheese = $_POST['cheeseradio'];
$sizeamt = $_POST['size'];
$cheeseamt = $_POST['cheese'];
$sauceamt = $_POST['sauce'];
$crustamt = $_POST['crust'];
$total = $_POST['total'];

echo $size.' => '.$sizeamt.'<br>';
echo $crust.' => '.$crustamt.'<br>';
echo $sauce.' => '.$sauceamt.'<br>';
echo $cheese.' => '.$cheeseamt.'<br>';
echo 'Total Cost =>'.$total;



// echo "<script>alert('$var')</script>";
// echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 
echo ""  ;


?>