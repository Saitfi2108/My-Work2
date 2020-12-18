<html>
<head>

<script src="jquery-1.11.2.js" type="text/javascript"> </script>
<script type="text/javascript">
        {
            var i = 1;
            function showslide() {
                $('#img1').attr('src', 'image/s' + i + '.jpg');
                i++;
                if (i == 4)
                    i = 1;
                setTimeout("showslide()", 3000);
            }
            $(document).ready(function () {
                showslide();
            });
        }
    </script>
<style type="text/css">
        
        #img1
        {
            height:450px;
            width:85%;
            border-style:solid;
            border-color:#2F00B5;
            border-width:5px;
			margin-top:0px;
			margin-left:65px;
        }
	div{
	float:left;
	margin-left:65px;
	margin-top:0px;
	height:160px;
	width:300px;
	border:0px solid black;
	border-radius:10px;

}

	form#login {
		background-color:#4A84FF;
		color:#FFFFFF;
		padding: 0px;
		width:300px;
		height:160px;
		float:left;
		margin-top:0px;
		margin-left:0px;
		-moz-border-radius: 10px;
		-webkit-border-radius: 10px;
		border-radius:10px
		
	}
	
	form#login ol li {
		line-height:30px;
		padding: 2px 6px;
		list-style:none;
		margin-top:2px;
	}
		form#login ol ol li {
		background-color:none;
		border:none
		
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
		width: 150px;
}
		form#login button {
		background-color:#FFCB0B;
		color:#000;
		float:left;
		margin-left:25px;
		margin-bottom:20px;
		padding:5px;
		border:none;
		-moz-border-radius: 30px;
		-webkit-border-radius: 30px;
		border-radius: 30px;
		width:110px;
		font-size:15px;
		font-family:"Times New Roman", Times, serif;
		color:white
		}
		
		
	#menu {
		width: 1100px;
		margin-left:65px;
		
		margin-top:-20px;
		border: 1px solid #222;
		
		background-image: linear-gradient(#2F00B5, #111);
		border-radius: 20px;
		box-shadow: 0 1px 1px #777;
		}
#menu:before,
#menu:after {
    content: "";
    display:table;
}

#menu:after {
    clear: both;
}

#menu {
    zoom:1;
}
#menu li {
    float: left;
    border-right: 1px solid #222;
    box-shadow: 1px 0 0 #444;
    position: relative;
}

#menu a {
    float: left;
    padding: 12px 30px;
    color: #999;
    text-transform: uppercase;
    font: bold 12px Arial, Helvetica;
    text-decoration: none;
    text-shadow: 0 1px 0 #000;
}

#menu li:hover > a {
    color:"red";
}

*html #menu li a:hover { /* IE6 only */
    color: #fafafa;
}
#menu ul {
    margin: 20px 0 0 0;
    _margin: 0; /*IE6 only*/
    opacity: 0;
    visibility: hidden;
    position: absolute;
    top: 38px;
    left: 0;
    z-index: 1;    
    background: #444;   
    
    box-shadow: 0 -1px 0 rgba(255,255,255,.3);  
    border-radius: 3px;
    transition: all .2s ease-in-out;
}

#menu li:hover > ul {
    opacity: 1;
    visibility: visible;
    margin: 0;
}

#menu ul ul {
    top: 0;
    left: 150px;
    margin: 0 0 0 20px;
    _margin: 0; /*IE6 only*/
    box-shadow: -1px 0 0 rgba(255,255,255,.3);      
}

#menu ul li {
    float: none;
    display: block;
    border: 0;
    _line-height: 0; /*IE6 only*/
    box-shadow: 0 1px 0 #111, 0 2px 0 #666;
}

#menu ul li:last-child {   
    box-shadow: none;    
}

#menu ul a {    
    padding: 8px;
    width: 130px;
    _height: 10px; /*IE6 only*/
    display: block;
    white-space: nowrap;
    float: none;
    text-transform: none;
}

#menu ul a:hover {
    background-color: #0186ba;
    background-image: linear-gradient(#04acec, #0186ba);
}

	#matter{
		background-color:#4A84FF;
		padding: 0px;
		width:300px;
		height:160px;
		float:left;
		margin-top:0px;
		margin-left:150px;
		
		text-align:center;
		color:white;
		-moz-border-radius: 10px;
		-webkit-border-radius: 10px;
		border-radius:10px
	}

	h1{
		padding:5px;
		font-family:arial;
		color:blue;
		background:yellow;
		margin-top:-8px
		}
		form#signup{
		background-color:#4A84FF;
		color:#FFFFFF;
		padding:0px;
		width:300px;
		height:170px;
		float:left;
		margin-top:0px;
		margin-left:40px;
		-moz-border-radius:10px;
		-webkit-border-radius:10px;
		border-radius:10px
		
	}
	form#signup ol li {
		line-height:30px;
		padding: 0px 30px;
		list-style:none;
		margin-top:0px;
	}
		form#signup ol ol li {
		background-color:none;
		border:none
		
		}
		
		form#signup input:not([type=radio]), form#detail textarea{
		background: #ffffff;
		border: none;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		-khtml-border-radius: 5px;
		border-radius: 5px;
		font:italic 13px Georgia, "Times New Roman", Times, serif;
		outline: none;
		padding: 5px;
		width: 150px;
}
		form#signup button {
		background-color:#FFCB0B;
		color:#000;
		float:left;
		margin-left:25px;
		margin-bottom:20px;
		padding:5px;
		border:none;
		-moz-border-radius: 30px;
		-webkit-border-radius: 30px;
		border-radius: 30px;
		width:110px;
		font-size:15px;
		font-family:"Times New Roman", Times, serif;
		color:white
		}

</style>
</head>

<?php
//session_start();
if(!isset($_POST["fname"])||!isset($_POST["email"])||!isset($_POST["username"])||!isset($_POST["password"]))
{
}
else
{
$fname = $_POST["fname"];
$email = $_POST["email"];
$username = $_POST["username"];
$password =  $_POST["password"];

$con=mysqli_connect("localhost","root",NULL)or die ("Some Problems are there");
$db=mysqli_select_db("railway",$con)or die(mysql_error());

$query = "INSERT INTO signup(name,email_id,user_name,password,login_date)values('". $fname ."','". $email . "','" . $username . "','" . $password . "', CURDATE())";
//echo $query;
$result = mysql_query($query)or die(mysql_error()); 
if(mysql_affected_rows()==1)
{
echo"<center>RECORD HAS BEEN SAVED</center>";
}
else
{
echo"<center>record not saved></center>";
}
}
?>
<body>
<p><h1><center>Railway Passenger System</h1></p></center>
<ul id="menu">
    <li><a href="#">Home</a></li>
    <li><a href="#">SMS Service</a></li>
    <li><a href="onlinebooking.php">On Line Ticket Booking</a></li>
    <li><a href="train_search.php">Train Availibility</a></li>
    <li><a href="ticketprint.htm">Ticket Print</a></li>
    <li><a href="train_detail.php">Admin</a></li>
    <li><a href="#">About</a></li>
    <li><a href="contact.htm">Contact</a></li>
	
	
</ul>


<form id="form1">
      <img id="img1" alt="" src="image/s1.jpg"/>
</form>

	
<div id="login">
<form id="login" name="login" action="book.php">
<ol>
<li>
 <label for="Username"></label>
 <input type="text" name="username1" id="username" required="" placeholder="username"/>
</li>
 
<li> 
 <label for="Password"></label>
 <input type="password" name="password1" id="password" required="" placeholder="password"/>
 </li>
 
<li>
<button type="submit">Login</button>
 </li>
 </ol>
 </form>
</div>

<div id="matter">
<h2>TOLL FREE NUMBER</h2>
<h2>0129-6999963</h2>
</div>

<div id="signup">
<form id="signup" name="signup" method="post" action="index.php">

<ol>
<li>
 <label for="fname"></label>
 <input type="text" name="fname" id="fname" required="" placeholder="First Name"/>
 <label for="email"></label>
 <input type="email" name="email" id="email" required="" placeholder="Email ID"/>
 <label for="Username"></label>
 <input type="text" name="username" id="username" required="" placeholder="username"/>
 <label for="Password"></label>
 <input type="password" name="password" id="password" required="" placeholder="password"/>
 </li>
 
<li>
<button type="submit">SignUp</button>
 </li>
 </ol>
 </form>
</div>
</body>
</html>

