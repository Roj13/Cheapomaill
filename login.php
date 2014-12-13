<?php

$conn = new mysqli("localhost", "root", "","cheapomaildb");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else
{
    
    //echo 'work';
}


if(isset($_POST["username"]) || isset($_POST["password"]) ){
    
        $username=$_POST["username"];
        $password=$_POST["password"];
       
       $conn->query("INSERT INTO `user`(`firstname`, `lastname`, `password`, `username`) VALUES ('rojay','paisley','$password','$username')");

}

$conn->close();



?>