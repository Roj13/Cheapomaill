<?php
require_once 'config.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST["username"]) || isset($_POST["password"]) ){
    
        $username=$_POST["username"];
        $password=$_POST["password"];   
    
       
       $stmt = $conn->query("select firstname, lastname, username, id from user where password = md5('$password') and username= '$username'");
        $result = $stmt->fetch_assoc();
        if(!empty($result)){
            $_SESSION['uid'] = $result;
        }else{
            echo "Incorrect username or password";
            header("HTTP/1.0 404 Not Found");
            ?>

    <script>setTimeout(function(){location.assign("index.php")},3000);</script>
<?php
        }
    
}else if(empty($_SESSION['uid'])){
    ?>
    <script>location.assign("index.php");</script>
<?php
}

$conn->close();
?>

<! DOCTYPE HTML>


<html>


<head>
    <title>

    </title>
</head>

<body>
    <?php include 'header.html'?>
    <div id="pic">
        <img src="img/envelope.jpg" />
    </div>
    </center>

    <div id="message-composer" style="display: none;">

        <form id="messaging_form" method="POST">

            <div id="head">
                <div>
                    <legend>To:</legend>
                    <input id="to" type="text" name="adress" placeholder="johnBrown@example.com" />

                </div>
                <p></p>
                <div>
                    <legend>Subject:</legend>
                    <input id="sub" type="text" name="subject" placeholder="Subject" />

                </div>
                <p></p>
                <div>

                    <legend>Message:</legend>
                    <textarea rows="4" cols="50" id="msg" type="textarea" name="message" placeholder="Cheap - O - Message">

                    </textarea>

                </div>
                <div id="enter_butt">
                    <input type="submit" value="Submit" />
                </div>

            </div>

        </form>

    </div>
</body>

</html>