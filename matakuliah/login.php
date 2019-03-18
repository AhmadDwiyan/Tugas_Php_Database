<?php
include '../connect.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";


$hasil = mysqli_query($connect,$query);
$num = mysqli_num_rows($hasil);

if($num > 0){


    $_SESSION['user'] = $username;
    header("location:read.php");
    

} else {
echo "gagal";
}

?>


