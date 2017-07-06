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
    
 
 
      $sql1 = "INSERT INTO vendor(VendorID , vendor_name, vendor_email, vendor_phone, vendor_add) VALUES ('$ID','$name','$email','$telephone','$address')";
    
    if($result2=$connection->query($sql1)){ 
    
    
     $sql2= "INSERT INTO users( username, userpass, user_type) values ('$username','$password','$type')";
     $result= $connection->query($sql2);
        
       $lastID= mysqli_insert_id($connection);;
        
        $sql3="UPDATE vendor SET userID='$lastID' WHERE vendorID ='$ID'";
         $result3= $connection->query($sql3);
     
    
    }
 
    if(($result) && ($result3))
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
        

    
   $sql1="SELECT * FROM users WHERE username='$myusername' AND userpass='$mypassword'";
    $result = mysqli_query($connection,$sql1);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
        
        echo json_encode($row);
 
    $result2 = mysqli_fetch_row($connection->query($sql1));
   $usertype = $result2[3];
     //echo json_encode($result2);


if (($result)&&($usertype==$mytype)) {
     //header("location:dashboard.php");
    
    $message1="You have been redirected to your dashboard.";
     echo json_encode($message1);
} else {    
$message2="Username and/or Password is incorrect.";
     echo json_encode($message2);

};

    
    
    
}

?>