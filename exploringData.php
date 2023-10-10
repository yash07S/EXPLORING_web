<?php

//Connect to database & check the connection
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}else{
    echo "No connection";
}

//select the database and write $con and database name
mysqli_select_db($con,'exploring');

//posting columns of database
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "INSERT INTO exploring_data(user,email,mobile,comment)
VALUES ('$user','$email','$mobile','$comment')";

echo "$query";
mysqli_query($con,$query);

header('location:index.html');
?>