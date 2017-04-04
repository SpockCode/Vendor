<?php
/* if($query){
     echo "worked";
exit;
}else{
echo "failed ".mysqli_error($connect);
exit;
}

*/
$host="localhost";
$user="root";
$pass="root";
$db="riwama";

$connect= mysqli_connect("localhost", "root", "root", "riwama") or die ("Please, Check Your Server Connection."); //Connect to server

//mysqli_select_db($connect, "riwama"); // makes use of the database


if (isset($_POST['username'])) {
    //code here....

 $user= $_POST['username'];

$query=mysqli_query($connect, "SELECT * FROM users WHERE username ='$user'");
  
$check = mysqli_num_rows($query);
    
    if($check==0) {
        echo "Username is Available"; 
    }
    
    else if($check==1){
        echo "Username is Not available";
    }


    }


if (isset($_POST['companyname'])) {
    //code here....

 $cname= $_POST['companyname'];

$query=mysqli_query($connect, "SELECT * FROM vendor WHERE vname ='$cname'");

  
$check1 = mysqli_num_rows($query);
    
   
    if($check1==0) {
         echo "Company Name Available";
    }
    
    else if($check1==1){
        echo "This Company Name is Already registered!";
    }
}





?>