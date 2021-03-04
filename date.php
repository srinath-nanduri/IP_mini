<?php 
session_start();
$d = date('Y-m-d');
echo $d;
$l = strlen($_SESSION['user']);
?>



<?php
echo "<br>";
echo $_SESSION['user'];
echo "<br>";
echo "save";
echo "<br>";
echo $l;
echo "<br>";
echo strtr("srisave","sri","sss");
echo "<br>";
echo substr("srisave",$l);

?>