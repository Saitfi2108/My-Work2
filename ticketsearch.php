<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
#form1 {
		background-color:#FFFFFF;
		padding:30px;
		width:750px; 
		height:200px;
		float:left;
		margin-top:30px;
		margin-left:300px;
		border:#FF0000 solid 3px;
		-moz-border-radius: 10px;
		-webkit-border-radius: 10px;
		border-radius: 10px;
		}

	#form1 ol li {
		background-color:white;
		border:none;
		list-style:none;
		float:left;
		margin-left:30px;
		
		}
		
	#form1 label {
		float:left;
		list-style:none;
		font-size:14px;
		font-style:italic;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-weight:bold;
		color:black;
		width: 500px;

		}	
		
	#form1 input:not([type=radio]),form#form1 textarea{
		background:#CC6699
		border:none;
		-moz-border-radius: 10px;
		-webkit-border-radius: 10px;
		-khtml-border-radius: 10px;
		border-radius: 10px;
		font: italic 12px Georgia,"Times New Roman", Times, serif;
		outline:5px;
		padding:5px;
		width: 250px;
		}	
	 	
	#form1 button {
		background-color:#9999CC;
		color:#000;
		float:left;
		margin-left:100px;
		margin-bottom:20px;
		padding:8px;
		border:none;
		-moz-border-radius: 30px;
		-webkit-border-radius: 30px;
		border-radius: 30px;
		width:180px;
		font-size:20px;
		font-family:"Times New Roman", Times, serif;
		}
 </style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ticket Search </title>
</head>
<body>
<form name ="form1" id="form1" method="post" action="ticket.php">
<ol>
<li><label for="name">PLEASE ENTER HERE TICKET ID</label></li>
<li><input type="text" name="bkid" id="bkid" /></li>
</ol>
<lo>
<th><center><button type="button" name="Submit">Search</button></center></th>
</ol>
</form>
</body>
</html>
