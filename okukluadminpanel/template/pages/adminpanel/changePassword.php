<?php

if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['newPassword']) && !empty($_POST['newPassword2']))
{
        $username = trim($_POST['username']);
    	$username = strip_tags($username);
    	$username = htmlspecialchars($username);
    	$username = mysqli_real_escape_string($link,$username);

        $password = trim($_POST['password']);
    	$password = strip_tags($password);
    	$password = htmlspecialchars($password);
    	$password = mysqli_real_escape_string($link,$password);

        $newPassword = trim($_POST['newPassword']);
    	$newPassword = strip_tags($newPassword);
    	$newPassword = htmlspecialchars($newPassword);
    	$newPassword = mysqli_real_escape_string($link,$newPassword);

        $newPassword2 = trim($_POST['newPassword2']);
    	$newPassword2 = strip_tags($newPassword2);
    	$newPassword2 = htmlspecialchars($newPassword2);
    	$newPassword2 = mysqli_real_escape_string($link,$newPassword2);

    $request = $link->query("SELECT user_password,user_username FROM userlogin");
    $pullNews=mysqli_fetch_array($request);

    if( $newPassword == $newPassword2 && $password == $pullNews['user_password'] && $username == $pullNews['user_username']  )
    {

    $update = mysqli_query($link,"UPDATE userlogin SET user_password ='".$newPassword."'");
    if($update == true)
    {
        echo'<div class="alert alert-success" role="alert">Password successfully updated!you are redirecting to the login'.'</div>';
        session_destroy();
        echo'<meta http-equiv="refresh" content="3; URL=login.php">'; exit;
    }
    
    }
    else{echo'<div class="alert alert-danger" role="alert">Please fill the informations correctly!'.'</div>';}

}


?>