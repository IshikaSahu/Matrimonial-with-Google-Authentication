<?php

session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'matrimonial');
$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];
$img = $_POST['image'];

$s = "select * from register where Username = '$name' && password = '$pass'";
$r = mysqli_query($con, $s);
$num = mysqli_num_rows($r);

if($num==1){
    $_SESSION['username'] = $name;
    header("location: login_auth.php");
}
else{
    header("location: login.php");
}

?>