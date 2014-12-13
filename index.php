<?php
if(!empty($_GET["logout"])){
    if(!empty($_SESSION["uid"])){
        unset($_SESSION["uid"]);
    }
}

?>

<!DOCTYPE html >
<html >
    <head>
        <title>Cheap - O - Mail</title>
       <script type="text/javascript" src="index.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css" />
    </head>

            <body>
                    <div id="heading">
                        <h1>Cheap - O - Mail</h1>
                        <h4>Let's Communicate together</h4>
                    </div>

                <form id="login-form" action="homepage.php"  method='POST' onsubmit="return checkForm(this);">

                   
                    <div>
                        <center><em>
                        <h1>Login</h1>
                            </em></center>
                        <label>
                            <p></p>
                            <center>
                                <span>Username:</span><br></br><input id="username" type="text" name="username" placeholder="Enter Username"/>
                            </center>
                        </label>
                        
                        <br></br>
                        
                        <label>
                            <center>
                            <span>Password:</span><br></br><input id="password" type="password" name="password" placeholder="Password"/>
                                </center>
                        </label>
                        
                        <br></br>
                        
                        <label>
                            <center>
                            
                            <input type="submit" value="Submit"> 
                            
                            </center>
                        </label>

                    </div>


                </form> 

	</body>
</html>
