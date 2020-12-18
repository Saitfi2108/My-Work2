<?php
	
	session_start();
	if(!isset($_POST["username"]) || !isset($_POST["password"]))
	{
	return;	
	}
	else
	{
	$loginName=$_POST['username'];
	$Password=$_POST['password'];
	
	
		$con=mysql_connect("localhost","root",NULL) or die("Some Problem While Connectinng");
	$db=mysql_selectdb("railway",$con) or die(mysql_error());
	$query="Select * from signup where user_name ='".$loginName."' and Password='".$Password."' ";
    echo $query;
	$result=mysql_query($query) or die("some error");
		
		if(mysql_num_rows($result)==1)
		{
		$loginPass=$loginName.":".$Password;
		setcookie($loginName,$loginPass,time()+86400,"","localhost");
		echo "HELLO!";
		$_SESSION["MySession"]=$loginName;
		$_SESSION["pass"]=$Password;
		header("location:booking.htm);
		}
		else
		{
		echo "<center><font color=red>Some Problem in Login Id or Password</font></center>";
	return;	
		}	
	}
	?>
