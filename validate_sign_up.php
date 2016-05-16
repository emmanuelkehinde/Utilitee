<?php
// echo json_encode("you have currently entered valite_sign_up....this was typed by david");
$servername="localhost";
$username="root";
$password="";
$dbname="pmcrg";

$connection= mysqli_connect($servername,$username,$password,$dbname);
    if (!$connection) {
        die("unable to connect to localhost");
    } 


$first_name=$last_name=$email=$hostel=$block=$room=$phone_number=$other_phone_number=$password=$con_password="";
$first_name_error=$last_name_error=$email_error=$address_error=$phone_number_error=$password_error=$con_password_error="";

$success_message="";
$failure_message="";





if (isset($_POST["submit"])){
    $status= false;
    $first_name= $_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $hostel=$_POST['hostel'];
    $block=$_POST['block'];
    $room=$_POST['room'];
    $phone_number=$_POST['phone_number'];
    $other_phone_number=$_POST['other_phone_number'];
    $password=$_POST['password'];
    $con_password=$_POST['con_password'];
    echo json_encode($_POST);

    if (empty($_POST['first_name'])){
        $first_name_error= "* firstname is require";

        $status=true;
    }
    else if(!ctype_alpha($first_name) || ((strlen($first_name)<3 ) || (strlen($first_name)>25))){
        $first_name_error="* name only contain alphabet";
        $status=true;
    }
    else{
        $first_name= $_POST['first_name'];

    }

    if (empty($_POST['last_name'])){
        $last_name_error= "*last name is require";
        $status= true;
    }
    else if (!ctype_alpha($last_name) || ((strlen($last_name)<3 ) || (strlen($last_name)>25))){
        $last_name_error= "name only contain alphabet ";
        echo("dummies");
        $status= true;
    }
    else {
        $last_name= $_POST['last_name'];

    }

    if (empty($_POST['phone_number'])){
        $phone_number_error= "* field must not be empty";
        $status= true;
    }
    else if (!ctype_digit($phone_number)){
        $contact_error= "* invalid number";
        $status= true;
    }
    else{
        $phone_number= $_POST['phone_number'];

    }
    if (empty($_POST['email'])){
        $email_error="* field cannot be empty";
        $status=true;
    }
    else if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email_error="* email not valid";
        $status=true;
    }
    else{
        $email=$_POST['email'];
    }
    if (empty($_POST['password'])){
        $password_error= "* field cannot be empty";
        $status= true;
    }else if (!ctype_alnum($password)){
        $password_error=" password must contain letter and number";
        $status= true;
    }else if(strlen($password)<4){
        $password_error="* password is too small";
        $status= true;
    }
    else{
        $password=$_POST['password'];
    }
    if (empty($_POST['con_password'])){
        $con_password_error="* field cannot be empty";
        $status= true;
    }
    else if($con_password != $password){
        $con_password_error="* password do not match";
        $status= true;
    }
    else{
        $con_password=$_POST['con_password'];
    }
     
    if($status==false){
        $insert="INSERT INTO webapp(first_name,last_name,email,hostel,block,room,phone_number,other_phone_number,password) 
        VALUES('$first_name','$last_name','$email','$hostel','$block','$room','$phone_number','$other_phone_number','$password')";
        $result= mysqli_query($connection,$insert);
        if ($result) {
            $success_message.="you have successfully signed up";
            echo json_encode($success_message);
        }else{
            $failure_message="you didnt register";
            echo json_encode($failure_message);
        }
        
        }
        
     
}	

  


?>