<?php

    // Inialize session

    session_start();
    // Include database connection settings
    $hostname = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost',        so you're NOT necessary to change this even this script has already     online on the   internet.
    $dbname   = 'railway'; // Your database name.
    $username = 'root';             // Your database username.
    $password = '';                 // Your database password. If your database has no           password, leave it empty.

     // Let's connect to host
     mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed,        perhaps the service is down!');
     // Select the database
      mysql_select_db($dbname) or DIE('Database name is not available!');


      // Retrieve username and password from database according to user's input
     $userName=$_POST['username1']; 
     $password=$_POST['password1']; 
     

       //*********retrieving data from Database**********

      $query = "SELECT * FROM signup WHERE user_name='$userName' and Password='$password'";
//$login = mysqli_query("SELECT user_name,Password FROM 'signup' WHERE user_name= $_post['username1'] AND Password= $_post['password1']");
       // Check username and password match
      $res = mysql_query($query);

      $rows = mysql_num_rows($res);
                   echo $query;
 if ($rows==1) {
      // Set username session variable

      $_SESSION['userName'] = $_POST['username1'];
 
     // Jump to secured page
session_write_close();
	 header("Location: booking.htm");
exit();    
	}
	 
     else {
     // Jump to login page
     echo "username and password not found";
     }
     exit;
     ?>
