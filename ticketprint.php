<style>
#tick{border:#0000FF solid 4px;
border-radius:30px;
margin-left:50px;
margin-right:50px;
margin-top:30px;
height:auto}
td{
	display: table-cell;
    vertical-align: inherit;
    font-weight: bold;
    text-align: center;
	text-transform:uppercase

}
table, th, td {
    border: 1px solid black;
	margin-left:350px
	}
</style>
<?php
//session_start();
	if(!isset($_POST["bkid"]))
	{
	return;
	}
	else
	{
	$t_id=$_POST["bkid"];
	//echo $name;
	$con=mysql_connect("localhost","root",NULL) or die("Some Problem While Connectinng");
	$db=mysql_selectdb("railway",$con) or die(mysql_error());
	$query= "SELECT * from pass_booking where bk_id ='$t_id'";
	
	//echo "$query";
	$result=mysql_query($query) or die(mysql_error());

	while ($rows = mysql_fetch_array($result))
		{
		//echo "<tr>";
	
	echo "<div id=tick>";
	echo "<div id=head>";
	
	echo "</div>";
	echo "<center><th><h2>THANKS FOR VISIT OUR PORTAL</center></th></h2>";
	echo "<center><th><h3>WISH U VERY HAPPY JOURNEY</center></th></h3>";
	echo "<center><th><h1>E-TICKET</center></th></h1>";
	
	echo "<table>";
		
	echo "<center><th>TRAIN CODE : </th><td>". $rows[1] ."</td><th>TRAIN NAME : </th><td>". $rows[2] ."</td>
	</tr></center>";
	echo "<tr>";
	echo "<center><th>DATE OF JOURNEY: </th><td>".$rows[3]."</td><th>NUMBER OF PASSENGER : </th><td>".$rows[7]."</td></center>";
	echo "</tr>";
	echo "<br>";
	echo "<tr>";
	echo "<center><th>PASSENGER NAME: </th><td>".$rows['pass_name']."</td><th>ASSENGER AGE : </th><td>".$rows['pass_age']."</td></center>";
	echo "</tr>";
	echo "<br>";
	echo "<center><th>FROM STATION : </th><td>". $rows[4] ."</td><th>DESTINATION STATION: </th><td>" . $rows[5] ."</td></center>";
	echo "<tr>";
	echo "<center><th>TOTAL FARE : </th><td>" . $rows[13] ."</td><th>BOOKING DATE: </th><td>" . $rows[14] ."</td></center></tr>";
	echo "</table>";
	
	}
	}
	echo "</tr>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<center><th><input type=button value =PRINT></th></center>";
	
	echo "<center><p>Dear Customer if u want to Again booking Please Click</p><a href=http:\\railway\onlinebooking.php>BOOKING NOW</a></center>";
	
?>