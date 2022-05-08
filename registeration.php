<?php

session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'matrimonial');
$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];
$img = $_POST['image'];

$s = "select * from register where Username = '$name'";
$r = mysqli_query($con, $s);
$num = mysqli_num_rows($r);

if($num==1){
    header('location: register.php');
}
else{
    $reg = "INSERT INTO `register`(`Username`, `Email`, `Password`, `Image`) VALUES ('$name','$email','$pass','$img')";
    mysqli_query($con,$reg);
    header("location: register_auth.php");
}

?>