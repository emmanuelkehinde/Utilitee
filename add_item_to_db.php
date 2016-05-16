<?php
$servername="localhost";
$username="root";
$password="";
$dbname="pmcrg";

$connection= mysqli_connect($servername,$username,$password,$dbname);
    if (!$connection) {
        die("unable to connect to localhost");
    }
$name_of_goods=$category=$selling_price=$add_info="";



$name_of_goods=$_POST['name_of_goods'];
$category=$_POST['category'];
$selling_price=$_POST['selling_price'];
$add_info=$_POST['add_info'];




$insert="INSERT INTO items(name_of_goods,category,selling_price,add_info) VALUES('$name_of_goods','$category','$selling_price','$add_info')";

$result= mysqli_query($connection,$insert);
 if ($result) {
    echo "success";
    }else{
        echo mysqli_error($connection);
        echo "<br>";
        echo "failure";
        }

