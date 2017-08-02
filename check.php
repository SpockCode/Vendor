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

$connect= mysqli_connect("$host", "$user", "$pass", "$db") or die ("Please, Check Your Server Connection."); //Connect to server

//mysqli_select_db($connect, "riwama"); // makes use of the database


if (isset($_POST['username'])) {
    //code here....

 $user= $_POST['username'];

$query=mysqli_query($connect, "SELECT * FROM users WHERE username ='$user'");
  
$check = mysqli_num_rows($query);

    
    if($check>0) {
        //response==0;
        echo "Username is Not available"; 
    }
    
    else {
        echo "Correct";
        //response==1
    }
 exit();
    }


if (isset($_POST['companyname'])) {
    //code here....

 $cname= $_POST['companyname'];

$query1=mysqli_query($connect, "SELECT * FROM vendor WHERE vendor_name ='$cname'");

  
$check1 = mysqli_num_rows($query1);
    
 
  
    if($check1>0) {
        
         echo "This Company Name is Already Registered!";
               // response==0;
    }
    
    else{
    echo "Correct";
       //  response==1;
    }
     exit();
}


if (isset($_POST['RegNo'])) {
    //code here....

 $reg= $_POST['RegNo'];
/*
sql1 = "SELECT * FROM vendor WHERE vendorID ='$reg'";

  $query2=$connect->query(sql1);
 */   
   
$query2=mysqli_query($connect, "SELECT * FROM vendor WHERE vendorID ='$reg'");
    
$check2 = mysqli_num_rows($query2);
    
 
  
    if($check2>0) {
        
         echo "This Company Name is Already Registered!";
               // response==0;
    }
    
    else{
    echo "Correct";
       //  response==1;
    }
     exit();
}

/*

if (isset($_POST['RegNo'])) {

    //code here....

 $regno= $_POST['RegNo'];
    
$sql1= "SELECT * FROM vendor WHERE vendorID ='$regno'";

//$query2=mysqli_query($connect, "SELECT * FROM vendor WHERE vendorID ='$regno'");
$query2=$connect->query(sql1);

  
$check2 = mysqli_num_rows($query2);
      
  
    if($check2>0) {
        
         echo "A company is registered with this Number!";
               // response==0;
    }
    
    else{
    echo "Correct";
       //  response==1;
    }
     exit();
}


*/

?>