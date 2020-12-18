<?php
if(!isset($_POST["tname"])||!isset($_POST["tcode"])||!isset($_POST["doj"])||!isset($_POST["boardfrom"])||!isset($_POST["uptoplace"])||
!isset($_POST["pclass"])||!isset($_POST["numpass"])||!isset($_POST["tfare"]))
{
//return;
}

{
//echo "ello";

//$tname="";
//$tcode ="";

$train_name = $_POST["tname"];
$train_code = $_POST["tcode"];
$doj = $_POST["doj"];
$boardfrom = $_POST["boardfrom"];
$uptoplace = $_POST["uptoplace"];
$pclass = $_POST["pclass"];
$numpass = $_POST["numpass"];
$tfare = $_POST["tfare"];
//echo "h";
$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];
$pass3 = $_POST["pass3"];
$pass4 = $_POST["pass4"];
$pass5 = $_POST["pass5"];
$pass6 = $_POST["pass6"];

$age1 = $_POST["age1"];
$age2 = $_POST["age2"];
$age3 = $_POST["age3"];
$age4 = $_POST["age4"];
$age5 =  $_POST["age5"];
$age6 = $_POST["age6"];

$fare1 = $_POST["fare1"];
$fare2 = $_POST["fare2"];
$fare3 = $_POST["fare3"];
$fare4 = $_POST["fare4"];
$fare5 = $_POST["fare5"];
$fare6 =  $_POST["fare6"];

$gen1 = $_POST["gen1"];
$gen2 = $_POST["gen2"];
$gen3 = $_POST["gen3"];
$gen4 = $_POST["gen4"];
$gen5 = $_POST["gen5"];
$gen6 = $_POST["gen6"];

$citi1 = $_POST["citi1"];
$citi2 = $_POST["citi2"];
$citi3 = $_POST["citi3"];
$citi4 = $_POST["citi4"];
$citi5 = $_POST["citi5"];
$citi6 = $_POST["citi6"];

$passengername=array("$pass1","$pass2","$pass3","$pass4","$pass5","$pass6");
$passengerage=array("$age1","$age2","$age3","$age4","$age4","$age5","$age6");
$passengerfare=array("$fare1","$fare2","$fare3","$fare4","$fare5","$fare6");
$passengerciti=array("$citi1","$citi2","$citi3","$citi4","$citi5","$citi6");
$passengergen=array("$gen1","$gen2","$gen3","$gen4","$gen5","$gen6");

$pass_name=implode(",",$passengername);
$pass_age=implode(",",$passengerage);
$pass_fare=implode(",",$passengerfare);
$pass_citi=implode(",",$passengerciti);
$pass_gen=implode(",",$passengergen);

$con=mysql_connect("localhost","root",NULL) or die("some Problems are there");
$db=mysql_select_db("railway",$con)or die(mysql_error());
//echo "ndt"; 
$sql="INSERT INTO pass_booking(train_code,train_name,doj,boarding_from,up_to,p_class,no_of_pass,pass_name,pass_age,gender,sr_citizen,fare,total_fare,booking_date)
values('".$_GET["traincode"]."','".$_GET["trainname"]."','".$doj."','".$boardfrom."','".$uptoplace."','".$pclass."',".$numpass.",'".$pass_name."','".$pass_age."','".$pass_gen."','".$pass_citi."','".$pass_fare."','".$tfare."',CURDATE())";
	
//echo "$sql";
	
	
	$query=mysql_query($sql) or die(mysql_error());
    
    if(mysql_affected_rows()==1)
{
echo"<center>BOOKING SUCCEFULL COMPLETE</center> <br><br><br>";
}
else
{
echo"<center>RECORD NOT SAVED</center>";
}

}

$query= "SELECT bk_id from pass_booking order by bk_id desc limit 1";
 
$result=mysql_query($query) or die(mysql_error());

while ($rows = mysql_fetch_array($result))
{ 
echo "<center>Dear Customer Your Ticket ID is:$rows[0]</center>";
}
?>
<html>   
<body>
<p align="center">Do you Want to Print The Ticket: <a href="ticketprint.htm">Yes</a> And <a href="#">NO</a></p>
</body>
</html>
