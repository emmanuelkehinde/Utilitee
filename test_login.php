<?php

session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="pmcrg";

$connection= mysqli_connect($servername,$username,$password,$dbname);
    if (!$connection) {
        die("unable to connect to localhost");
    } 

$email=$password="";
$email=$_POST['email'];
$password=$_POST['password'];


$login="SELECT * FROM webapp WHERE email='$email' and password='$password'";
$result =mysqli_query($connection,$login);
if(mysqli_num_rows($result)==1){
	$row=mysqli_fetch_assoc($result);
	$_SESSION['details']=$row;
	echo "login successfully";


}else{
	echo "the data you entered is not correct";
}
?>


