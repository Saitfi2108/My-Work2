<html>
<head>
<link type="text/css" rel="stylesheet" href="external.css" media="screen">
<?php
$traincode="";
$trainname="";
$con=mysql_connect("localhost","root",NULL)or die ("Some Problems are there");
$db=mysql_select_db("railway",$con)or die(mysql_error());
$train_query = mysql_query("SELECT t_code  FROM `train_details`") or die(mysql_error());
?>
</head>
<body background="image\background.jpg">
<form name="form1" id="form1" method="post" action="onlinebooking.php">
 <tr>
 <a href="http:\Reservation\index.php"><center><h2>Home</center></h2></a>
<ol>
 	<li><label for="train code">Train Code</label></li>
	
	<?php
	$dataset = array();
 	while ($data = mysql_fetch_assoc($train_query))
 {
   $dataset[] = $data['t_code'];
 }
PRINT'<li><select name="tcode" id="text1">';
FOREACH($dataset AS $list=>$sf_list){
	
	PRINT '<option value="'. $sf_list .'">'.$sf_list.'</option>';
}
PRINT '</select></li>';
?>
		
	<li><!--<button type ="submit">Search</button>-->
	
	<input type="submit" name="search" class="button" value="Search">
	</li>
	</ol>
	<ol>
 	<li><label for="train Code">Train Name</label></li>
	<?php
	if(!isset($_POST["tcode"]))
	{
	//return;
	}
	else
	{
	$tcode=$_POST["tcode"];
	$con=mysql_connect("localhost","root",NULL)or die ("Some Problems are there");
	$db=mysql_select_db("railway",$con)or die(mysql_error());
	$query="SELECT * from train_details where t_code ='$tcode'";
	//echo $query;
	$result=mysql_query($query) or die(mysql_error());
	//echo $result;
	$res=mysql_fetch_array($result);
	$traincode=$res["t_code"];
	$trainname=$res["t_name"];
	}
	?>
 	<li><input type="text" id="text2" name="tname" value="<?php if(isset($_POST['search'])) echo $res["t_name"]?>"readonly></li>
	</ol> </tr>
 <br><br><br>
 <hr>
</form>
<form name="form1" id="form1" method="post" action="booking.php?traincode=<?php echo $traincode;?>&trainname=<?php echo $trainname;?>">
<tr>
 	<ol>
	<li><label for="doj">Date Of Journey</label></li>
	<li><input type="Date" id="text3" name="doj" reqiured=""/></li>
	</ol>
	<ol>
  <li>
    <label for="Boarding">Boarding From</label>
  </li>
  <li><input type="text" id="text4" name="boardfrom" reqiured="" /></li>
  </ol>
</tr>

<tr>
<ol>
	<li><label for="Up to Place">Up To Place</label></li>
	<li><input type="text" id="text5" name="uptoplace" reqiured="" /></li>
</ol>
<br>
<ol>
	<li><label for="train name">Class</label></li>
 	<li><select name="pclass" id="text6" />
	<option value="None">None</option>
 	<option value="Sleeper">Sleeper</option>
 	<option value="AC Class">AC Class</option>
 	<option value="Two Tier">Two Tier</option>
 	<option value="Three Tier">Three Class</option>
 	</select>
	</li>
 </ol>
</tr>
<tr> 
 <ol>
	<li><label for="No of Pass">No of Passengers</label></li>
 	<li><select name="numpass" id="text7" />
 	<option value="1">1</option>
 	<option value="2">2</option>
 	<option value="3">3</option>
 	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
 	</select></li>
 </ol>

 </tr>

<br /><br /><br /><br /><br />

<table border="0" align="center">
<tr>
<th>Passenger Name</th><th>Age</th><th>Gender</th><th>Sr. Citizen Ship</th><th>Fare</th></tr>

<td><input type="text" id="text1" name="pass1"></td>
<td><input type="text" id="text2" name="age1"></td>

<td align="center"><select name="gen1" id="gender">
<option value="None">None</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select></td>

<td align="center"><select name="citi1" id="citizen">
<option value="None">None</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select></td>
<td><input type="text" id="text3" name="fare1"></td>
</tr>
<tr>
<td><input type="text" id="text4" name="pass2"></td>
<td><input type="text" id="text5" name="age2"></td>
<td align="center"><select name="gen2" id="gender">
<option value="None">None</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select></td>
<td align="center"><select name="citi2" id="citizen">
<option value="None">None</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select></td>
<td><input type="text" id="text6" name="fare2"></td>
</tr>

<tr>
<td><input type="text" id="text10" name="pass3"></td>
<td><input type="text" id="text11" name="age3"></td>

<td align="center"><select name="gen3" id="gender">
<option value="None">None</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select></td>

<td align="center"><select name="citi3" id="citizen">
<option value="None">None</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select></td>
<td><input type="text" id="text8" name="fare3"></td>
</tr>
<tr>
<td><input type="text" id="text9" name="pass4"></td>
<td><input type="text" id="text10" name="age4"></td>
<td align="center"><select name="gen4" id="gender">
<option value="None">None</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select></td>
</td><td align="center"><select name="citi4" id="citizen">
<option value="None">None</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select></td>
<td><input type="text" id="text11" name="fare4"></td>
</tr>
<tr>
<td><input type="text" id="text12" name="pass5"></td>
<td><input type="text" id="text13" name="age5"></td>
<td align="center"><select name="gen5" id="gender">
<option value="None">None</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select></td>
</td>
<td align="center"><select name="citi5" id="citizen">
<option value="None">None</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select></td>
<td><input type="text" id="text14" name="fare5"></td>
</tr>
<tr>
<td><input type="text" id="text15" name="pass6"></td>
<td><input type="text" id="text16" name="age6"></td>
<td align="center"><select name="gen6" id="gender">
<option value="None">None</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select></td>
<td align="center"><select name="citi6" id="citizen">
<option value="None">None</option>
<option value="Yes">Yes</option>
<option value="No">No</option>
</select></td>
<td><input type="text" id="text17" name="fare6"></td>
</tr>
<th><input type="submit" name="submit" id="submit" value="BOOK NOW"></th>
<th>Total Fare</th>
<th><input type="text" id="text18" name="tfare">
</th>
</table>
</form>
</body>
</html>

