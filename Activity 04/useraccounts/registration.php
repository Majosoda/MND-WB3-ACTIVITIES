<?php

session_start();

$con = mysqli_connect('localhost','root','c@t0nther0ad');

mysqli_select_db($con,'useraccounts');

$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from usertable where name = '$name'";

$result=mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1){
	echo "user name alreay taken";
}else{
	$reg="insert into usertable(name,password) values ('$name','$pass')";
	mysqli_query($con,$reg)
	echo "Registration Successful";
}

?>