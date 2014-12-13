<?php
require_once 'config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST["username"]) || isset($_POST["password"]) ){
    
        $username=$_POST["username"];
        $password=$_POST["password"];
        $fname=$_POST["firstname"];
        $lname=$_POST["lastname"];
    
    
       
       $conn->query("INSERT INTO `user`(`firstname`,`lastname`,`password`, `username`) VALUES ('$fname','$lname','$password','$username')");
    
    
    $_SESSION['uid'] = array("username"=>$username,"fname"=>$fname,"lname"=>$lname);
}
?>

<!DOCTYPE html>
<html>

<body>

    <fieldset>
        <legend>CheapoUser</legend>
        <form method="post" action="homepage.php">
            
        <label>First Name: </label><input type="text" name="firstname" placeholder="First Name"/><br/><br/>    
        <label>Last Name: </label><input type="text" name="lastname" placeholder="Last Name"/><br/><br/>
        <label>UserName: </label><input type="text" name="username" placeholder="UserName"/><br/><br/>
        <label>PassWord: </label><input type="password" name="password" placeholder="PassWord"/><br/><br/>
        <input type="submit" value="Submit"/>
        <input type="reset" value="Reset"/>
        </form>
                
    </fieldset>
</body>
</html>