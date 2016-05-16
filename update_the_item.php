<?php
$servername="localhost";
$username="root";
$password="";
$dbname="pmcrg";

$connection= mysqli_connect($servername,$username,$password,$dbname);
    if (!$connection) {
        die("unable to connect to localhost");
    }
include('update_item_details.php');

$id=$_POST['id'];
$name_of_goods=$_POST['name_of_goods'];
$category=$_POST['category'];
$selling_price=$_POST['selling_price'];
$add_info=$_POST['add_info'];

$insert=("UPDATE items set 
    name_of_goods='$name_of_goods',
    category='$category',
    selling_price='$selling_price',
    add_info='$add_info'
    WHERE id='$id'");

echo "the item has been sucessfully updated";

$result= mysqli_query($connection,$insert);


