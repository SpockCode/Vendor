<!DOCTYPE html>
<html>
<head>
<Title> Vendor Registration Process.</Title>    



<?php
session_start();

$host="localhost";
$user="root";
$pass="root";
$db="riwama";

$connect= mysqli_connect("localhost", "root", "root", "riwama") or die ("Please, Check Your Server Connection."); //Connect to server

mysqli_select_db($connect, "riwama"); // makes use of the database

    

//if (isset($_POST['submit'])) {

    $name=$_POST['companyname'];
	$email=$_POST['companyemail'];
	$telephone= $_POST['telephone'];
	$address= $_POST['address'];
	$username= $_POST['username'];
	$password= $_POST['password'];
	$cpassword= $_POST['cpassword'];
   
    $type= "vendor";
    

   /*   $sql= "SELECT * FROM users WHERE username ='$name'";
	$query= mysqli_query($connect, $sql);
	$result= mysqli_num_rows($query);
	
	//if username is taken  ... but this if construct  is not working rather, it moces to the else statement. will look at it later... 
	if ($result = 1){
		echo "Username <em><strong>already</strong></em> taken!";
	}
  else{ */
      
      //insert into Vendor table
     $sql1 = "INSERT INTO vendor(vname, vemail, vphone, vaddress, username) 
            VALUES ('$name', '$email', '$telephone', '$address', '$username')" ;
      
  mysqli_query($connect, $sql1); 
    
    

       
      //insert into users table
     $sql2= "INSERT INTO users( username, userpass, user_type) values ('$username', '$password', '$type')";
      mysqli_query($connect, $sql2);

/*      if(mysqli_query($connect, $sql1)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql1 and $sql2. " . mysqli_error($connect);
}

  }
*/

	echo "Form Submitted Succesfully";
      
 // }
    
//}

//else { echo "What the hell happened?"; }

mysqli_close($connect); // Connection Closed

  
?>
</head>
<body>
</body>
</html>