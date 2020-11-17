<?php


session_start();

$v = 'rem';

$max = sizeof($_SESSION['cart']);
$arr = $_SESSION['cart'];
$a = array();

for ($x = 0; $x < $max; $x++) {
    $i = $v.$x;
    array_push($a,$i);
  }


  foreach($a as $key => $val){
    // echo "$key -> $val ,"; 
    if(isset($_POST[$val])){
        
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
        
    }
    } 


    echo "<script>window.location.href='../cart.php'</script>";

?>