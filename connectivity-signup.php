<?php

require('config.php');

function NewUser($con)
{
    $name = $_POST['name'];
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $clgname = $_POST['clgname'];
    
      
    if($pass == $cpass)
    {
        $query = "INSERT INTO signup (name,user,email,pass,clgname) VALUES('$name','$user','$email','$pass','$clgname')";
    
    $data = mysqli_query($con,$query) or die(mysqli_error($con));
  
        $message = "Sucessfully Registered";
        echo "<script type='text/javascript'>alert('$message');</script>";
      readfile("index.html");

    }
    else
    {
          $message = "Password Did Not Match Confirm Password";
        echo "<script type='text/javascript'>alert('$message');</script>";
        readfile("signup.html");
    }
}

function Signup($con)
{
    if(!empty($_POST['user']))
    {
        $query = mysqli_query($con,"SELECT * FROM signup WHERE user = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysqli_error());
        
        if(!$row=mysqli_fetch_array($query) or die(mysqli_error($con)))
        {
            NewUser($con);
        }
        else{
            $message = "You Have Already Registered";
        echo "<script type='text/javascript'>alert('$message');</script>";
        readfile("login.html");
        }

    }
    
}

if(isset($_POST['submit']))
{
    //echo "Signed Up";
    Signup($con);
    
}

?>