
<?php
//session_start();

$tcode = $_POST["tcode"];
//echo "$tcode";
$tname = $_POST["tname"];
$tshedule = $_POST["tshedule"];
$zone =  $_POST["zone"];
$ttype=$_POST["ttype"];
$fac =  $_POST["facilities"];
$staff =  $_POST["staff"];
$t_boggies =  $_POST["t_boggies"];
$t_ac_boggies =  $_POST["t_ac_boggies"];
$t_sl_boggies =  $_POST["t_sl_boggies"];
$t_gen_boggies =  $_POST["t_gen_boggies"];
$start_station =  $_POST["start_station"];
$arrival_time =  $_POST["arrival_time"];
$departure_time =  $_POST["departure_time"];
$impstation =  $_POST["impstation"];
$l_station =  $_POST["l_station"];
$km =  $_POST["km"];
$rhour =  $_POST["rhour"];
//echo "fbd";
$con=mysql_connect("localhost","root",NULL)or die("Some Problems are there");
$db=mysql_select_db("railway",$con)or die(mysql_error());
//echo "fbd1";
$sql = "INSERT INTO train_details
(t_code,t_name,t_shedule,t_type,zone,facilities,no_of_staff,num_of_tot_boggies,ac_boggies,sleeper_boggies,gen_boggies,start_from_station,arrival_time,
departure_time,imp_station,last_station,km,running_hours)values('". $tcode . "','". $tname ."','" .$tshedule. "','" .$ttype. "','" . $zone . "',
'". $fac ."','$staff','$t_boggies','$t_ac_boggies','$t_sl_boggies','$t_gen_boggies','" .$start_station."','".$arrival_time ."','".$departure_time."','".$impstation."','". $l_station ."',$km,'".$rhour."')";


$result = mysql_query($sql)or die(mysql_error());
if(mysql_affected_rows()==1)
{
echo"<center>RECORD HAS BEEN SAVED</center>";
}
else
{
echo "<center>record not saved></center>";
}

?>


<center><a href="http://localhost/reservation/index.php">BACK</a></center>

