<?php 


session_start();

$user = $_SESSION['user'];


$moz = $_POST['moz'];
$pep = $_POST['pep'];
$cap = $_POST['cap'];
$bpep = $_POST['bpep'];
$pap = $_POST['pap'];
$gpep = $_POST['gpep'];
$olive = $_POST['olive'];
$bchkn = $_POST['bchkn'];
$corn = $_POST['corn'];
$gchkn = $_POST['gchkn'];
$bcorn = $_POST['bcorn'];
$sausage = $_POST['sausage'];
$mush = $_POST['mush'];
$peri = $_POST['peri'];
$tomato = $_POST['tomato'];
$bbqham = $_POST['bbqham'];
$pan = $_POST['pan'];
$pepham = $_POST['pepham'];
$jala = $_POST['jala'];
$gham = $_POST['gham'];
$onion = $_POST['onion'];
$wing = $_POST['wing'];
$pine = $_POST['pine'];
$bpork = $_POST['bpork'];
$straw = $_POST['straw'];
$gpork = $_POST['gpork'];
$gems = $_POST['gems'];
$tchkn = $_POST['tchkn'];
$total=0;
/*
o_moz
o_pep
o_cap
o_bpep
o_pap
o_gpep
o_olive
o_bchkn
o_corn
o_gchkn
o_bcorn
o_sausage
o_mush
o_peri
o_tomato
o_bbqham
o_pan
o_pepham
o_jala
o_gham
o_onion
o_wing
o_pine
o_bpork
o_straw
o_gpork
o_gems
o_tchkn
*/



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



    if($moz!=0){

    $sql = "select m_price from menu where m_stuff = 'moz' ";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res); 
    $total += ($moz * $row['m_price']);

}

    if($pep!=0){$sql = "select m_price from menu where m_stuff = 'pep' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($pep * $row['m_price']);}
    if($cap!=0){$sql = "select m_price from menu where m_stuff = 'cap' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($cap * $row['m_price']);}
    if($bpep!=0){$sql = "select m_price from menu where m_stuff = 'bpep' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($bpep * $row['m_price']);}
    if($pap!=0){$sql = "select m_price from menu where m_stuff = 'pap' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($pap * $row['m_price']);}
    if($gpep!=0){$sql = "select m_price from menu where m_stuff = 'gpep' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($gpep * $row['m_price']);}
    if($olive!=0){$sql = "select m_price from menu where m_stuff = 'olive' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($olive * $row['m_price']);}
    if($bchkn!=0){$sql = "select m_price from menu where m_stuff = 'bchkn' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($bchkn * $row['m_price']);}
    if($corn!=0){$sql = "select m_price from menu where m_stuff = 'corn' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($corn * $row['m_price']);}
    if($gchkn!=0){$sql = "select m_price from menu where m_stuff = 'gchkn' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($gchkn * $row['m_price']);}
    if($bcorn!=0){$sql = "select m_price from menu where m_stuff = 'bcorn' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($bcorn * $row['m_price']);}
    if($sausage!=0){$sql = "select m_price from menu where m_stuff = 'sausage' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($sausage * $row['m_price']);}
    if($mush!=0){$sql = "select m_price from menu where m_stuff = 'mush' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($mush * $row['m_price']);}
    if($peri!=0){$sql = "select m_price from menu where m_stuff = 'peri' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($peri * $row['m_price']);}
    if($tomato!=0){$sql = "select m_price from menu where m_stuff = 'tomato' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($tomato * $row['m_price']);}
    if($bbqham!=0){$sql = "select m_price from menu where m_stuff = 'bbqham' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($bbqham * $row['m_price']);}
    if($pan!=0){$sql = "select m_price from menu where m_stuff = 'pan' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($pan * $row['m_price']);}
    if($pepham!=0){$sql = "select m_price from menu where m_stuff = 'pepham' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($pepham * $row['m_price']);}
    if($jala!=0){$sql = "select m_price from menu where m_stuff = 'jala' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($jala * $row['m_price']);}
    if($gham!=0){$sql = "select m_price from menu where m_stuff = 'gham' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($gham * $row['m_price']);}
    if($onion!=0){$sql = "select m_price from menu where m_stuff = 'onion' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($onion * $row['m_price']);}
    if($wing!=0){$sql = "select m_price from menu where m_stuff = 'wing' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($wing * $row['m_price']);}
    if($pine!=0){$sql = "select m_price from menu where m_stuff = 'pine' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($pine * $row['m_price']);}
    if($bpork!=0){$sql = "select m_price from menu where m_stuff = 'bpork' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($bpork * $row['m_price']);}
    if($straw!=0){$sql = "select m_price from menu where m_stuff = 'straw' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($straw * $row['m_price']);}
    if($gpork!=0){$sql = "select m_price from menu where m_stuff = 'gpork' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($gpork * $row['m_price']);}
    if($gems!=0){$sql = "select m_price from menu where m_stuff = 'gems' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($gems * $row['m_price']);}
    if($tchkn!=0){$sql = "select m_price from menu where m_stuff = 'tchkn' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        $total += ($tchkn * $row['m_price']);}



$len = sizeof($_SESSION['cart']);
$check = $_SESSION['cart'][$len-1];

    $sql = "select * from menuorder where o_pizza = '$check'";


    $res = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($res); 

    $total += $row['o_cost'];

    $sql = "select * from menuorder where o_user = '$user'";
    $res = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($res); 
    if ($user==$row['o_user'])
    {
        
            
                // $stmt = $conn->prepare("insert into menuorder(o_moz, o_pep, o_cap, o_bpep, o_pap, o_gpep, o_olive, o_bchkn, o_corn, o_gchkn, o_bcorn, o_sausage, o_mush, o_peri , o_tomato, o_bbqham, o_pan, o_pepham, o_jala, o_gham, o_onion, o_wing, o_pine, o_bpork, o_straw, o_gpork, o_gems, o_tchkn) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) WHERE o_user='$user' ");
                $stmt = $conn->prepare("UPDATE menuorder SET o_bool=1, o_cost = ?, o_moz = ?, o_pep = ?, o_cap = ?, o_bpep = ?, o_pap = ?, o_gpep = ?, o_olive = ?, o_bchkn = ?, o_corn = ?, o_gchkn = ?, o_bcorn = ?, o_sausage = ?, o_mush = ?, o_peri = ?, o_tomato = ?, o_bbqham = ?, o_pan = ?, o_pepham = ?, o_jala = ?, o_gham = ?, o_onion = ?, o_wing = ?, o_pine = ?, o_bpork = ?, o_straw = ?, o_gpork = ?, o_gems = ?, o_tchkn = ? WHERE o_bool = 0 ;");
                $stmt->bind_param('dssssssssssssssssssssssssssss', $total, $moz, $pep, $cap, $bpep, $pap, $gpep, $olive, $bchkn, $corn, $gchkn, $bcorn, $sausage, $mush, $peri , $tomato, $bbqham, $pan, $pepham, $jala, $gham, $onion, $wing, $pine, $bpork, $straw, $gpork, $gems, $tchkn );
                $stmt->execute();
                

                // echo "<script>window.location.href='../orderpage.php'</script>";

                if(isset($_POST['cart'])){
                // echo "order updated";
                echo "<script>window.location.href='../cart.php'</script>";
                }
                if(isset($_POST['add'])){
                    echo "<script>window.location.href='../orderpage.php'</script>";
                }
                
            
            $stmt->close();
            $conn->close();
            
        
        
    }
    else{
        echo "Username does not exist.";
    }



}

?>




























