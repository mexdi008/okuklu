<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "mehdi", "12345", "okukluadminpanel");
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{echo'<meta http-equiv="refresh" content="0; URL=addNews.php">'; exit;}
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 
if(isset($_POST['submit']))
{
    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
        $username = trim($_POST['username']);
        $username = strip_tags($username);
        $username = htmlspecialchars($username);
        $username = mysqli_real_escape_string($link,$username);

        $password = trim($_POST['password']);
        $password = strip_tags($password);
        $password = htmlspecialchars($password);
        $password = mysqli_real_escape_string($link,$password);

        $checkLoginTrue = mysqli_query($link,"SELECT user_username,user_password FROM userlogin WHERE
         user_username = '".$username."'
         AND
         user_password = '".$password."'");

         if(mysqli_num_rows($checkLoginTrue)>0)
         {
             $info = mysqli_fetch_array($checkLoginTrue);

             $_SESSION['username'] = $info['user_username'];
             $_SESSION['password'] = $info['user_password'];
             {echo'<meta http-equiv="refresh" content="0; URL=addNews.php">'; exit;}

         }
    }
}
 


?>