<?php

require('config.php');

function Feedback($con)
{
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Feedback = $_POST['feed'];

    
      
    
        $query = "INSERT INTO feedback   (name,email,feedback) VALUES('$Name','$Email','$Feedback')";
    
    $data = mysqli_query($con,$query) or die(mysqli_error($con));
  
        $message = "Sucessfully Submitted Feedback";
        echo "<script type='text/javascript'>alert('$message');</script>";
      readfile("index.html");

    
   
}



if(isset($_POST['submit']))
{
    //echo "Signed Up";
    Feedback($con);
    
}

?>