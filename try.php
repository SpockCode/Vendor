<?php
$name = "John";
$address = "123 Main St.";
print <<<HERE
<table style = "border: 1px solid black">
<tr>
<td>name</td>
<td>$name</td>
</tr>
<tr>
<td>address</td>
<td>$address</td>
</tr>
</table>
HERE;






<?php
    
    
/*
        <?php
        
        //session_start();
        
        if(isset($_SESSION['flag']))
        {
            if ($_SESSION ['flag']==1)
            {
                $my=1;
                unset($_SESSION['flag']);
            }
        }
        
        ?>
        
        <script type="text/javascript">
             
            var myvar=<?php echo json_encode($my); ?>;
                
            if(myvar==1)
                {
                    return false;
                    $(document).ready(function()
                                    {
                        $("#msg1").show();
                    });
                     
                    
                }
        </script>
        
        */





/*
if (isset($_POST['username'])) {
    //code here....

 $user= $_POST['username'];
   $myusername = mysqli_real_escape_string($connect,$_POST['username']);
      $mypassword = mysqli_real_escape_string($connect,$_POST['password']); 
      $mytype = mysqli_real_escape_string($connect,$_POST['usertype']); 

$query=mysqli_query($connect, "SELECT user_type FROM users WHERE username ='$myusername' and userpass = '$mypassword'");
  
$check = mysqli_num_rows($query);

    
    if($check=0) {
        //response==0;
        echo "Check User TYpe"; 
    }
    
  //  else {
  //      echo "Correct";
        //response==1
  //  }
 exit();
    }



if (isset($_POST['password'])) {
    //code here....

 $pass= $_POST['password'];

$query=mysqli_query($connect, "SELECT * FROM users WHERE Upass ='$pass'");
  
$check = mysqli_num_rows($query);

    
    if($check=0) {
        //response==0;
        echo "Password is Incorrect"; 
    }
    
  //  else {
  //      echo "Correct";
        //response==1
  //  }
 exit();
    }

*/

/*
session_start();

$host="localhost";
$user="root";
$pass="root";
$db="riwama";

$connect= mysqli_connect("localhost", "root", "root", "riwama") or die ("Please, Check Your Server Connection."); //Connect to server

mysqli_select_db($connect, "riwama"); // makes use of the database

    */
   session_start();

include("connect.php");

 
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
            
      $myusername = mysqli_real_escape_string($connect,$_POST['username']);
      $mypassword = mysqli_real_escape_string($connect,$_POST['password']); 
      $mytype = mysqli_real_escape_string($connect,$_POST['usertype']); 
      
      $sql = "SELECT userID FROM users WHERE username = '$myusername' and userpass = '$mypassword'";
      $result = mysqli_query($connect,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
       
       $usertype = "SELECT user_type FROM users WHERE username = '$myusername' and userpass = '$mypassword'";
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		 
        
        if ($mytype!=$usertype){
            $error = "Your User Type is invalid.";
       } 
    else if($count == 0) {
            $error = "Your Login Name or Password is invalid.";
    
      }

       else {
         session_register("myusername");
         $_SESSION['username'] = $myusername;
         header("location:dashboard.php");
      }
   }

?>





?>