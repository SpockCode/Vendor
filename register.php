<?php
session_start();





$host="localhost";
$user="root";
$pass="root";
$db="riwama";

//$connect= mysqli_connect("localhost", "root", "root", "riwama") or die ("Please, Check Your Server Connection."); //Connect to server
$connection= mysqli_connect("$host", "$user", "$pass", "$db") or die ("Please, Check Your Server Connection."); //Connect to server
/*
 $ID=$_POST['RG00034'];
    $name=$_POST['Naheem Investments'];
	$email=$_POST['mutetha.eng@mail.com'];
	$telephone= $_POST['080000000000'];
	$address= $_POST['No 5 Nzimiro Street; Old GRA'];
	$username= $_POST['naheem'];
	$pass= $_POST['naheem'];
	$password= sha1($pass);
  	$cpassword= $_POST['naheem'];
    $type='vendor';

*/ 
/*
if (isset($_POST['submit'])) {
     register();
}
else {die;}

function register(){
    include('/../../connect.php');
 */   
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
    

      $sql1 = "INSERT INTO vendor(vendorID, vendor_name, vendor_email, vendor_phone, vendor_add) VALUES ('$ID','$name','$email','$telephone','$address')";
    
    if($result2=$connection->query($sql1)){ 
        
     $sql2= "INSERT INTO users( username, userpass, user_type) values ('$username','$password','$type')";
      $result=$connection->query($sql2);
        
       $lastID= mysqli_insert_id($connection);
        
        $sql3="UPDATE vendor SET userID='$lastID' WHERE vendorID ='$ID'";
   $result3= $connection->query($sql3);
     
    
    }  /*
} */
/*
    if(($result) && ($result3))
    {
       $feeds= "SELECT vendor_email FROM vendor WHERE userID=LAST_INSERT_ID()";
       $feeds2= "SELECT username FROM users WHERE userID=LAST_INSERT_ID()";
       $feed=$connection->query($feeds);
       $feed2=$connection->query($feeds2);
       $display=mysqli_fetch_assoc($feed);
       $display2=mysqli_fetch_assoc($feed2);
       //echo json_encode($display);
       //echo json_encode($display2);
        
        // Display Form Submitted
    } else
     {
        echo $connection->error;
     }
die;
*/
//mysqli_select_db($connect, "riwama"); // makes use of the database

    

//if (isset($_POST['submit'])) {

  /*  $name=$_POST['companyname'];
	$email=$_POST['companyemail'];
	$telephone= $_POST['telephone'];
	$address= $_POST['address'];
	$username= $_POST['username'];
	$password= $_POST['password'];
  	$cpassword= $_POST['cpassword'];

/*
$name=mysqli_real_escape_string($connect, $_POST['companyname']);
$email=mysqli_real_escape_string($connect, $_POST['companyemail']);
$telephone=mysqli_real_escape_string($connect, $_POST['telephone']);
$address=mysqli_real_escape_string($connect, $_POST['address']);
$username=mysqli_real_escape_string($connect, $_POST['username']);
$password=mysqli_real_escape_string($connect, $_POST['password']);
$cpassword=mysqli_real_escape_string($connect, $_POST['cpassword']);
*/

   // $type= "vendor";
    
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
/*$sql1 = "INSERT INTO vendor(VendorID, userID, vendor_name, vendor_email, vendor_phone, vendor_add) 
            VALUES ('RT003949','5','Ricja', 'Rickaha@jdifid.com', '05888888455', 'No. 4 kdfkdjkfjk', 'kjdfjkdjkd')" ;
          //  VALUES ('RT003949','5','$name', '$email', '$telephone', '$address', '$username')" ;
    mysqli_query($connect, $sql1); 
      
 $rest1= mysqli_query($connect, $sql1); 
    
    

       
      //insert into users table
     $sql2= "INSERT INTO users(userID,username, userpass, user_type) values ('5','username', sha1('password'),'usertype')";
    // $sql2= "INSERT INTO users( username, userpass, user_type) values ('$username', sha1('$password'))";
    mysqli_query($connect, $sql2);
      $rest2=mysqli_query($connect, $sql2);

/*      if(mysqli_query($connect, $sql1)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql1 and $sql2. " . mysqli_error($connect);
}

  }
*/
//}
/*
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
    
 
    */
      
 // }
    
//}

//else { echo "What the hell happened?"; }

//mysqli_close($connect); // Connection Closed
    
//header('Location: index.php');
   // print("<script language='javascript'>location.href = 'index.php#sec'</script>");
   // header('Location:'.$_SERVER['PHP_SELF']);
 
?>
