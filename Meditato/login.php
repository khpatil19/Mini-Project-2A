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



$sql = "SELECT * from user where username = '$username' and password ='$password' ";
  $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){ 
              header('Location: index.html');
              
        }
        else{
            echo "<h1> Login failed. Invalid username or password.</h1>";
        }


mysqli_close($connect);

?>

