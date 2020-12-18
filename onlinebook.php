<html>
<head>
<link type="text/css" rel="stylesheet" href="external.css" media="screen">
<script src="jquery-1.11.2 (1).js" type="text/javascript"></script>

	<script language="javascript">

var xhr = null;
function showtname(str) {
  if (str =="")
   {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } 
	else 
	{ 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","tsearch.php?val="+str,true);
        xmlhttp.send();
    }
}
 </script>

</head>
<form name="form1" id="form1" method="post">
 <tr>
<ol>
 	<li><label for="train code">Train Code</label></li>
	<li><input type="text" name="tcode" value="" onKeyDown="showtname(this.value)"></li>
	<div id="txtHint"></div>
</ol>
	<ol>
 	</ol> </tr>
<br><br><br>
 <hr>
</form>
<form name="form1" id="form1" method="post" action="booking.php">
  
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

