<?php
	
	$tcode = $_GET['val'];
	$tcode = $tcode."%";
	$con=mysql_connect("localhost","root",NULL)or die ("Some Problems are there");
	$db=mysql_select_db("railway",$con)or die(mysql_error());
	$query="SELECT t_name from train_details where t_code like '".$tcode."' limit 2 ";
	//$query="SELECT t_name from train_details where t_code = '12005'";
	$result=mysql_query($query) or die(mysql_error());
	$res=mysql_fetch_array($result);
	
	while ($rows = mysql_fetch_row($result))
	
		{
		echo "<tr>";
		echo "<td>".$rows["0"]."</td>";
		echo "<br>";
		
		echo "<input type=text name=tname value='$rows[0]'>";
		echo "</tr>";
		}
	
?>
