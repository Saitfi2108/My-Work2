<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Login</title>
</head>
<style>

form#login {
	background-color:#4A84FF;
			display: block;
		position: relative;
		color:#FFFFFF;
		padding: 0px;
		width: 500px;
		height:300px;
		float:left;
		margin-top:80px;
		margin-left:390px;
		-moz-border-radius: 30px;
		-webkit-border-radius: 30px;
		border-radius: 30px;
		
		}
		
		
		

	form#login ol li {
		line-height:30px;
		padding: 10px 150px;
		list-style:none;
		margin-top:2px;
		-moz-border-radius: 10px;
		-webkit-border-radius: 10px;
		border-radius:10px;
		
		
		}

	form#login ol ol li {
		background-color:none;
		border:none;
		float:left;
		
		}
		
	form#login input:not([type=radio]), form#detail textarea{
		background: #ffffff;
		border: none;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		-khtml-border-radius: 5px;
		border-radius: 5px;
		font: italic 13px Georgia, "Times New Roman", Times, serif;
		outline: none;
		padding: 5px;
		width: 200px;
		}
	form#login button {
		background-color:#FFCB0B;
		color:#000;
		float:left;
		margin-left:0px;
		margin-bottom:20px;
		padding: 5px;
		border:none;
		-moz-border-radius: 30px;
		-webkit-border-radius: 30px;
		border-radius: 30px;
		width:210px;
		font-size:20px;
		font-family:"Times New Roman", Times, serif;
		}
		img{float:left;
		margin-left:20px}
</style>

<body>

<!--<?php
//$username=$_GET["username"];
//$pass=$_GET["password"];
//if($username='admin'||$pass='admin')
//{
	//header("location:train_detail.php");
	
	
//}
//else
//{
	//echo "Invalid UserName and Password";
//}


//?>-->



<div id="login">
<form id="login" name="login" action="train_detail.php" method="get">


<p><h2><center>ADMIN LOGIN</center></h2></p>
<img src="http:\\localhost\Reservation\image\ad.jpg">

<ol>
 <li>
 <label for="Username"></label>
 <input type="text" name="username" id="username" required="" placeholder="username"/>
 </li>
 
 <li> 
 <label for="Password"></label>
 <input type="password" name="password" id="password" required="" placeholder="password"/>
 </li>
 
<li>
<button type="submit">Login</button>
 </li>
 </ol>
 </form>
</div>
</html>