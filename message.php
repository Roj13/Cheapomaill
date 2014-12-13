<?php
require_once 'config.php';
if(empty($_SESSION['uid'])){
    ?>
    <script>location.assign("index.php");</script>
<?php
}else{
    $user = $_SESSION['uid'];  
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>
            New message
        </title>
        <link type="text/css" rel="stylesheet" href="message.css"/>
    </head>
        <body>
            <?php include 'header.html'?>
            
            <div id="main">
                
            <form id="messaging_form" method="POST">
                
            <div id="head">
                <div>
                    <legend>To:</legend><input id = "to" type="text" name="adress" placeholder = "johnBrown@example.com"/>
                    
                </div>
                <p></p>
                <div>
                    <legend>Subject:</legend><input id = "sub" type="text" name="subject" placeholder = "Subject"/>
                    
                </div>
                <p></p>
                <div>
                         
                    <legend>Message:</legend><textarea rows="4" cols="50" id = "msg" type="textarea" name="message"  placeholder = "Cheap - O - Message">

</textarea>
                    
                </div>
                <div id ="enter_butt">
                        <input type="submit" value="Submit"/>
                    </div>
                
            </div>
                
            </form>
                
                </div>
        </body>
</html>
        
<?php

$conn = new mysqli("localhost", "root", "","cheapomaildb");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["adress"])){
    
        $message=$_POST["message"];
        $subject=$_POST["subject"];
        $address=$_POST["adress"];
        $user_id = $user["id"];
$conn->query("INSERT INTO `message`(`body`, `subject`, `recipient_ids`, user_id) VALUES ('$message','$subject','$address', '$user_id')");
}

$conn->close();
?>