<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
$con=mysql_connect("localhost","root",NULL)or die ("Some Problems are there");
$db=mysql_select_db("railway",$con)or die(mysql_error());
$train_query = mysql_query("SELECT start_from_station  FROM `train_details`") or die(mysql_error());
$ls_query = mysql_query("SELECT last_station  FROM `train_details`") or die(mysql_error());
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Train Availableity</title>
</head>
<style>

form#tsearch {
	background-color:#4A84FF;
		color:#FFFFFF;
		padding: 0px;
		width: 700px;
		height:auto;
		float:left;
		margin-top:10px;
		margin-left:345px;
		-moz-border-radius: 10px;
		-webkit-border-radius: 10px;
		border-radius: 10px;
		
		}
		

	form#tsearch ol li {
		line-height:30px;
		padding: 2px 6px;
		list-style:none;
		margin-top:2px;
		
		}

	form#tsearch ol ol li {
		background-color:none;
		border:none;
		float:left;
		
		}
		
	form#tsearch label {
		float:left;
		font-size:16px;
		font-style:italic;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-weight:bold;
		width: 200px;

		}	
		
	 form#tsearch select {
	 	background: #ffffff;
		border: none;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		-khtml-border-radius: 5px;
		border-radius: 5px;
		font: italic Georgia, "Times New Roman", Times, serif;
		
		outline: none;
		padding: 5px;
		width: 210px;
	 	}
		form#tsearch date {
	 	background: #ffffff;
		border: none;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		-khtml-border-radius: 5px;
		border-radius: 5px;
		font: italic Georgia, "Times New Roman", Times, serif;
		outline: none;
		padding: 5px;
		width: 210px;
	 	}
		
	form#tsearch button {
		background-color:#FFCB0B;
		color:#000;
		float:left;
		margin-left:180px;
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
</style>
<body>
 <a href="http:\Reservation\index.php"><center><h2>Home</center></h2></a>
<P><H2><CENTER>Train Search</CENTER></H2></P>
<div id="container"></div>
<form id="tsearch" name="tsearch" action="train_search.php" method="post">
<ol>
<li><label for="station from">From Station</label></li>
 <?php
	$dataset = array();
 	while ($data = mysql_fetch_assoc($train_query))
 {
   $dataset[] = $data['start_from_station'];
 }
PRINT'<li><select name="list" id="text8">';
FOREACH($dataset AS $list=>$sf_list){
	
	PRINT '<option value="'. $sf_list .'">'. $sf_list .'</option>';
}
PRINT '</select></li>';
?>  
 <li><label for="station from"> To Station</label></li>

<?php

	$dataset1 = array();
 	while ($data1 = mysql_fetch_assoc($ls_query))
 {
   $dataset1[] = $data1['last_station'];
 }
PRINT'<li><select name="list1" id="text9">';
FOREACH($dataset1 AS $list1=>$ls_list){
	
	PRINT '<option value="'. $ls_list .'">'. $ls_list .'</option>';
}
PRINT '</select></li>';
?>
<li>
<label for ="Journey Date">Journey Date</label>
<input type="date" name="date" id="date">
</li>
<li>
<label for ="ticket">Ticket Type</label>
<select name="Ticket Type" id="Ticket Type">
<option value="First A.C">First A.C</option>
<option value="Second A.C">Second A.C</option>
<option value="Third A.C">Third A.C </option>
<option value="Sleeper">Sleeper</option>
<option value="Chair classes">Chair classes</option>
<option value="2S Class">2S Class</option>
<option value="Genral Class">Genral Class</option>
</li>
</select>
<li>
<button type ="Submit">Search</button>
</li>
</ol>
</form>
</div>




<?php
session_start();
	if(!isset($_POST["list"])||!isset($_POST["list1"]))
	{
	}
	else
	{
	$f_station=$_POST["list"];
	$l_station=$_POST["list1"];
	
	//echo ("hello");
	$con = mysql_connect("localhost","root",NULL) or die("Some Problem While Connectinng");
	$db =mysql_select_db("railway",$con) or die(mysql_error());
	$query = "SELECT  * from train_details where start_from_station = '$f_station' AND last_station='$l_station'"; 
	//echo "$query";
	
$result=mysql_query($query) or die("problem");
	//echo "$result";

	echo "<table border='1' align ='center'>";
	
	echo "<br><br><br><br><br><br><br><br>";
	echo "<br><br><br><br><br><br><br><br>";
	
	echo "<tr>";
	echo "<center><th>Train Name</th><th>Train Code</th><th>Train Schedule</th><th>Start from Station</th><th>Arrival Time</th><th>Departure Time</th>	          <th>Last Station</th></center>";
	echo " </tr>";
		
		while($rows = mysql_fetch_array($result))
		{
		//echo "$result";
		//echo "<tr>";
echo "<td>"  .$rows[1] .  "</td> <td>"  . $rows[0] . "</td> <td>" . $rows[2] .  "</td> <td>" . $rows[11] ."</td> <td>"  . $rows[12] . "</td> <td>" . $rows[13] . "</td> <td>" . $rows[15] . "</td>";
		}
		if(mysql_num_rows($result)<1)
		{
		
		echo "Sorry Data Is Not Available";
		
		}
		
		
		}
			echo"</tr>";
?>


</body>
</html>



