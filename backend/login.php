<?php

session_start();

$username = $_POST['username'];
$pass = $_POST['password'];




$servername = "localhost";
$dbuser = "root";
$dbpass = "root";
$database = "limit";


$conn = new mysqli($servername, $dbuser, $dbpass, $database, "3308");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   }


   else{




    $sql = "select * from reg where r_username = '$username' ";


    $res = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($res);
    
    if ($username==$row['r_username'])
    {
        if(password_verify($pass, $row['r_password']))
        {
            
                $stmt = $conn->prepare("SELECT * FROM reg WHERE r_username = ?");
                $stmt->bind_param('s', $_POST['username']);
                $stmt->execute();
                $result = $stmt->get_result();
                $user = $result->fetch_object();
                
                
                
                $_SESSION['user'] = $user->r_username;
                
                
                // echo "HELLO!!!";

                echo "<script>window.location.href='../orderpage.php'</script>";
            
            
            
                //echo "<script>window.location.href='http://somegram.000webhostapp.com/work.html'</script>";
            // header("Location: http://somegram.000webhostapp.com/work.html");
        }
        else{
            echo "Password Incorrect!";
        }
    }
    else{
        echo "Username does not exist.";
    }




   }




?>


