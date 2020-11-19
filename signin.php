<?php
       $servername = "localhost";
        $user_name = "root";
        $pass_word = "";
        $dbname = "online_bus_registration_system";
$link = mysqli_connect($servername, $user_name, $pass_word, $dbname);
 if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['user_name']);
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['psw']); 
      
      $search = mysql_query("SELECT id FROM admin WHERE username = '$myemail' and passcode = '$mypassword' AND active='1'") or die(mysql_error()); 
                $match  = mysql_num_rows($search);

                if($match > 0){
                  echo "SUCCESS";                   
                }else{
                    $msg = 'Login Failed!<br /> Please make sure that you enter the correct details and that you have activated your account.';
                }
            }
      }
?>
