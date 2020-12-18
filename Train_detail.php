<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css" media="screen">

form#detail {
		display: block;
		position: relative;
		color:#FFFFFF;
		padding: 0px;
		width: 800px;
		height:auto;
		float:left;
		margin-top:10px;
		margin-left:245px;
		-moz-border-radius: 10px;
		-webkit-border-radius: 10px;
		border-radius: 10px;
		
		}
		form#detail::before {
  content: "";
  background-image:url("http://localhost/Reservation/image/train.jpg");
  opacity: 0.4;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: -1;   
}

	form#detail ol li {
		line-height:30px;
		padding: 2px 6px;
		list-style:none;
		margin-top:2px;
		
		}

	form#detail ol ol li {
		background-color:none;
		border:none;
		float:left;
		
		}
		
	form#detail label {
		float:left;
		font-size:16px;
		font-style:italic;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-weight:bold;
		width: 200px;

		}	
		
	form#detail input:not([type=radio]),form#detail textarea{
		background: #ffffff;
		border: none;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		-khtml-border-radius: 5px;
		border-radius: 5px;
		font: italic 13px Georgia,"Times New Roman", Times, serif;
		outline: none;
		padding: 5px;
		width: 200px;
}
	
	form#detail input:[type=checkbox])
	{
		background: #ffffff;
		border: none;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		-khtml-border-radius: 5px;
		border-radius: 5px;
		font: italic 13px Georgia, "Times New Roman", Times, serif;
		outline: none;
		padding: 5px;
		width: 100px;
	}
	 form#detail select {
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
		
	form#detail button {
		background-color:#F13B0A;
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

<title>Train Details|Entry of Train Details</title>
</head>
<?php  
$con=mysql_connect("localhost","root",NULL)or die ("Some Problems are there");
$db=mysql_select_db("railway",$con)or die(mysql_error());
$res1 ="SELECT MAX(t_code) FROM train_details";
//echo $res1;
$ress1 = mysql_query($res1);
$data1 = mysql_fetch_array($ress1);
//echo $ress1;
$inc = $data1[0] + 1 ;
?>
<body>
 <a href="http:\Reservation\index.php"><center><h2>Home</center></h2></a>
<div id="box">
<p align="center"><h1 style="margin-left:4.5in; color:#FF9F55">Train Detail Entry</h1></p>
<form id="detail" name="detail" action="Train_details.php" method="post">
			
	<ol>
		<li>
			<label for="fname">Train Code</label>
			<input id="tcode" name="tcode" type="text" required="" autofocus=""  value="<?php echo $inc?>"/> 
		</li>
		<li>
			<label for="tname">Train Name</label>
			<input id="tname" name="tname" placeholder="Type Your Last Name Here!" required="" autofocus=""  type="text" />
		</li>
		<li>
			<label for="tshedule">Train Shedule</label>
			<select id="tshedule" name="tshedule">
			<option value="Daily">Daily</option>
			<option value="Mon,Tue,Wed">Mon,Tue,Wed</option>
			<option value="Thus,Fri,Sat">Thus,Fri,Sat</option>
			<option value="Sat,Sun">Sat,Sun</option>
			</select>
		</li>
		<li>
			<label for="ttype">Train Type</label>
			<select id="ttype" name="ttype">
			<option value="Express Mail">Express Mail</option>
			<option value="Mail">Mail</option>
			<option value="Stabadi Mail">Stabadi Mail</option>
			<option value="Stabadi Express">Stabadi Express</option>
			</select>
			</li>
			<li>
		
			<label for="zone">Zone</label>
			<select id="zone" name="zone">
			<option value="North West Train">North West Train</option>
			<option value="North East Train">North East Train</option>
			<option value="North South Train">North South Train</option>
			<option value="south West Train">South West Train</option>
			</select>
		</li>
		<li>
			<label for="Facilities">Facilities</label>
			<select id="facilities" name="facilities" multiple="multiple">
			<option value="wi-fi">Wi-fi</option>
			<option value="Cafeteria">Cafeteria</option>
			<option value="Canteen">Canteen</option>
			<option value="Medical Treatments">Medical Treatments</option>
			</select>
	
		</li>
		<li>
			<label for="Staff Number">Number of Staff</label>
			<input id="staff" name="staff" placeholder="Type Here Number of staff!" required="" autofocus=""  type="text" />
		</li>
		<li>
			<label for="Tot_num_boggies">Number of Boggies</label>
			<input id="total_num" name="t_boggies" placeholder="Type here Number of Boggies!" required="" autofocus=""  type="text" />
		</li>
		<li>
			<label for="Tot_num_AC boggies">A.C.Boggies</label>
			 <input id="t_ac_boggies" name="t_ac_boggies" placeholder="Type Here AC Boggies!" required="" autofocus=""  type="text" />
		</li>

		<li>
			<label for="Tot_num_Non_AC boggies">Sleeper Boggies</label>
			<input id="t_sl_boggies" name="t_sl_boggies" placeholder="Type Here number of Sleeper boggies!" required="" autofocus=""  type="text" />
		</li>
		<li>
			<label for="Tot_num_Gen_boggies">General Boggies</label>
			 <input id="t_gen_boggies" name="t_gen_boggies" placeholder="Type Here Number of General Boggiese!" required="" autofocus=""  type="text" />
		</li>
		<li>
			<label for="Start from Station">Start From Station</label>
			 <input id="start_station" name="start_station" placeholder="Type Here Station Name!" required="" autofocus=""  type="text" />
		</li>
		<li>
			<label for="Arrival time">Arrival time</label>
			 <input id="arrival_time" name="arrival_time"  required="" autofocus=""  type="time" />
		</li>
		<li>
			<label for="Departure time">Departure Time</label>
			 <input id="departure_time" name="departure_time" required="" autofocus=""  type="time" />
		</li>
		<li>
		<label for="important Statons">important Stations</label>
			 
		<textarea rows="4" cols="10" name="impstation" id="impstation" placeholder="Type Here Station Name!" required="" autofocus="" ></textarea>
		</li>
		<li>
			<label for="Last Destination">Last Destination</label>
			<input id="l_station" name="l_station" placeholder="Type Here Last Station Name!" required="" autofocus=""  type="text" />
		</li>
		<li>
			 <label for="Total in Km">Total In KM</label>
			 <input id="km" name="km" placeholder="Type Here Last Station Name!" required="" autofocus=""  type="text" />
		</li>
		<li>
			<label for="Running Hour">Running Hour</label>
			 <input id="rhour" name="rhour"  required="" autofocus=""  type="text" />
		</li>
</ol>
<button type="submit">Submit</button>
</form>
</ul>
</p>
</div>
</div>
</body>
</html>
