<?php

require('config.php');

function Login($con)
{
 if(!empty($_POST['user']))
    {

        $query = mysqli_query($con,"SELECT pass FROM signup WHERE user = '$_POST[user]'") or die(mysqli_error($con));
        $getpass = mysqli_fetch_array($query);
        $dbpass = $getpass[0];
        $temp = $_POST['pass'];
        
        if($temp == $dbpass)
        {
             $message = "Successfully Logged In";
            echo "<script type='text/javascript'>alert('$message');</script>";
            readfile("index.html");
        }
        else
        {
            $message = "Username and/or Password incorrect.\\nTry again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            readfile("login.php");
        }

    }    
}

if(isset($_POST['submit']))
{

    Login($con);
    
}

?>