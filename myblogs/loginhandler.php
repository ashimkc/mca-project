<?php
session_start();
if(empty($_SESSION['username'])){
header('location:login.php');
}
$dbusername="ashim";
$dbpassword="ashim";
$formusername=$_POST['username'];
$formpassword=$_POST['password'];
if($dbusername==$formusername && $dbpassword==$formpassword){
$_SESSION['username']="$dbusername";

header("location:index.php");
}
else{
	header("location:login.php?msg=invalid username or password");
}

echo $formusername;
echo $formpassword;
?>