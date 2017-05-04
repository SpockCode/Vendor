<?php


if (isset($_POST['username'])) {
    //code here....

 $user= $_POST['username'];

$query=mysqli_query($connect, "SELECT * FROM users WHERE username ='$user'");
  
$check = mysqli_num_rows($query);

    
    if($check=0) {
        //response==0;
        echo "Username is incorrect"; 
    }
    
    else {
        echo "Correct";
        //response==1
    }
 exit();
    }




?>