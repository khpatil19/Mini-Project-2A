<?php

$servername = "localhost";

$dbusername = "root";

$dbpassword = "";

$db_name = "website";

 #this code will provide connection to the database

$connect = new mysqli($servername, $dbusername, $dbpassword, $db_name);

if (!$connect){

die("connection failed: " . mysqli_connect_error());

} 

$username = $_POST['username'];

$password = $_POST['password'];

$email = $_POST['email'];

$sql = "INSERT into user (username, password, email) values ('$username' , '$password' , '$email' )";

if (mysqli_query($connect, $sql)){
   header('Location: login.html');



} else {

echo "Error: " . $sql . "<br>" . mysqli_error($connect);

}

mysqli_close($connect);

?>