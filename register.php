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
    
/*if (!empty($name) and !empty($email) and !empty($telephone) and !empty($address) and !empty($username) and !empty($password) and !empty($cpassword)) 
{
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
    //mysqli_query($connect, $sql1); 
      
 $rest1= mysqli_query($connect, $sql1); 
    
    

       
      //insert into users table
     $sql2= "INSERT INTO users( username, userpass, user_type) values ('$username', '$password', '$type')";
   // mysqli_query($connect, $sql2);
      $rest2=mysqli_query($connect, $sql2);

/*      if(mysqli_query($connect, $sql1)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql1 and $sql2. " . mysqli_error($connect);
}

  }
*/
//}
	if (rest1 && rest2)
    {
    echo "Form Submitted Succesfully";
    
    
   $to = "$email";
$subject = "RIWAMA REGISTRATION";
$message = "Hello " + $name + "\r\n";
$message = " To complete registration, follow the link provided below."; 

$headers = "From: admin@riwama.com";
//$query = mail($to,$subject,$message,$headers);
        mail($to,$subject,$message,$headers);
echo "Mail Sent.";

    }
    else {
	//	die("Query failed2");
	} 
    
 
    
      
 // }
    
//}

//else { echo "What the hell happened?"; }

//mysqli_close($connect); // Connection Closed
    
//header('Location: index.php');
   // print("<script language='javascript'>location.href = 'index.php#sec'</script>");
   // header('Location:'.$_SERVER['PHP_SELF']);
 
?>
