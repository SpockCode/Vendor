<?php
require_once('../../connect.php');


$authType = $_POST['authType'];
 
if ($authType == 'login'){
   login();
    
}

else if  ($authType == 'register'){
    register();
  
}

else{
    echo 'Invalid Authentication Type';
}




function register(){
 include('/../../connect.php');
    
   // global $connection;
    $salt="5xe74fe8sdf";
    $ID=$_POST['RegNo'];
    $name=$_POST['companyname'];
	$email=$_POST['companyemail'];
	$telephone= $_POST['telephone'];
	$address= $_POST['address'];
	$username= $_POST['username'];
	$pass= $_POST['password'];
	$password= sha1($pass);
  	$cpassword= $_POST['cpassword'];
    $type='vendor';
    
 
    
     $sql1= "INSERT INTO users( username, userpass, user_type) values ('$username','$password','$type')";
     $result= $connection->query($sql1);
    
      $sql2 = "INSERT INTO vendor(VendorID ,userID , vendor_name, vendor_email, vendor_phone, vendor_add) VALUES ('$ID',LAST_INSERT_ID(),'$name','$email','$telephone','$address')";
     $result2=$connection->query($sql2);
  
 
    if(($result) && ($result2))
    {
       $feeds= "SELECT vendor_email FROM vendor WHERE userID=LAST_INSERT_ID()";
       $feeds2= "SELECT username FROM users WHERE userID=LAST_INSERT_ID()";
       $feed=$connection->query($feeds);
       $feed2=$connection->query($feeds2);
       $display=mysqli_fetch_assoc($feed);
       $display2=mysqli_fetch_assoc($feed2);
       echo json_encode($display);
       echo json_encode($display2);
    } else
     {
        echo $connection->error;
     }
    
}



function login(){
    include('/../../connect.php');
    
   $myusername= $_POST['username'];
   $password= $_POST['password'];
   $mypassword= sha1($password);
   $mytype= $_POST['usertype'];
    
/*
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
  */    
    

    
   $sql1="SELECT userID FROM users WHERE username='$myusername' AND userpass='$mypassword'";
    $result = mysqli_query($connection,$sql1);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
    
 //$sql1="SELECT userID FROM users WHERE username='$myusername' and userpass='$mypassword'";
 //  $view=$connection->query($sql1);
        echo json_encode($row);
 
  /*  $result = mysqli_fetch_row($connection->query($sql1));
  $usertype = $result[3];
     echo json_encode($result);


if (($result)&&($usertype==$mytype)) {
    echo json_encode($result);
    //header("location:dashboard.php");
} else {    
 echo "Username and/or Password is incorrect. \n Try again.";

};
*/

    
    
    
}

?>