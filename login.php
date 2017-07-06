<?php

session_start();

$host="localhost";
$user="root";
$pass="root";
$db="riwama";

$connect= mysqli_connect("localhost", "root", "root", "riwama") or die ("Please, Check Your Server Connection."); //Connect to server

mysqli_select_db($connect, "riwama"); // makes use of the database

/*
if(empty($_POST)===false)
{
    $username= $_POST['username'];
    $password= $_POST['password'];
     $mytype= $_POST['usertype'];
        
        if(empty($username)===true || empty($password)===true)
        {
            $_SESSION['flag']=1;
             header('location:index.php?#login');
            exit;
        }
    
        else {
            header('location:dashboard.php');
        }

}
 */

/*
$myusername= $_POST['username'];
$mypassword= $_POST['password'];
     $mytype= $_POST['usertype'];


 $sql1 = "SELECT * FROM users WHERE username = '$myusername' and userpass = '$mypassword'";

$result = mysqli_fetch_row( $connect->query($sql1));

 $usertype = $result[3];
 //$result2 = mysqli_query($connect,$usertype);$result2 = $connect->query($usertype);




if (($result) &&($usertype==$mytype)) {
    
  // echo "success";
 //echo "OK, logged in, good to go.";
  //  echo $usertype;
       header("location:dashboard.php");
   
 
} else {
    
  $message = "Username and/or Password incorrect. \\n Try again.";
   
    
         // echo $message;
    //echo    $myusername;
//echo $mypassword;
  //  echo mysqli_num_rows($result);
    //echo $result;
     //echo $result2;
          

};



*/

$myusername= $_POST['username'];
   $password= $_POST['password'];
   $mypassword= sha1($password);
   $mytype= $_POST['usertype'];
        

    
   $sql1="SELECT * FROM users WHERE username='$myusername' AND userpass='$mypassword'";
    $result = mysqli_query($connect,$sql1);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
        
       // echo json_encode($row);
 
    $result2 = mysqli_fetch_row($connect->query($sql1));
   $usertype = $result2[3];
     //echo json_encode($result2);


if (($result)&&($usertype==$mytype)) {
     header("location:dashboard.php");
    
   // $message1="You have been redirected to your dashboard.";
   //  echo json_encode($message1);
} else {    
$message2="Username and/or Password is incorrect.";
     echo json_encode($message2);

};



?>