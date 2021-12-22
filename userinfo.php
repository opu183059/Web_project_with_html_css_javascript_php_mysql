<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}
mysqli_select_db($con, 'opuonline');
$user = $_POST['user'];
$email = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = " insert into userinfodata(user, email, number, subject, message) 
values ('$user','$email','$number','$subject','$message'); " ;

mysqli_query($con, $query);

header('location:index.php');

?>