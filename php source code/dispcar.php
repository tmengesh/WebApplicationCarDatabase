<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<title>Calculated Valuation Price for Toyota Car</title>
<style type="text/css">
<!--
.style1 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 36px;
	color: #0000CC;}
.style2 {font-size: 20px}
-->
</style>
</head>
<body bgcolor="#FFFFCC">
<table width="100%" height="100%" border="0" bgcolor="#FFFFCC">
  <tr>
    <td width="9%" height="46">&nbsp;</td>
    <td width="76%"><img src="images/logo.gif" width="700" height="88" /></td>
    <td width="15%">&nbsp;</td>
  </tr>  
  <tr>
    <td rowspan="2">&nbsp;</td>
    <td>
	  <?php
	  $model1= $_POST['txtcar'];
	  $myear= $_POST['cmbyear'];
	print "<font color=\"Black\" size=\"5\"><b>Toyota $model1 with $myear Manufactured Year Valuation </b></font>";
	?>	     
	 </td>
    <td rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td></td>
  </tr>
  
	
  <?php
include("connectivity.php");
$model1= $_POST['txtcar'];
$myear= $_POST['cmbyear'];


$sql="SELECT * FROM `tab_toyota` 
WHERE `model_type` = '$model1' && `year` = '$myear' ";
$result = mysql_query($sql);
  $number_of_rows = mysql_num_rows($result);            
               if($number_of_rows>=1)                          
            { 
			
			print "<table border=1 align=center>";	
//while($row = mysql_fetch_array($result)){ 
		
		
		//$tpartial=$row['sum(partial_kg)'] + $tpartial;
	
	 print "<th> Model Type</th>";		
     print "<th> Model Number </th>";	
	 print "<th> Cylinder Capacity (C-C)</th>";		
     print "<th> Manufactured Year</th>";
	 print "<th> CIF (Cost Insurance Freight)</th>";		
     print "<th> Currency Type</th>";	 
	 print "<th> Duty Paying Value</th>";
	 print "<th> Customs Duty in USD</th>";		
     print "<th> Excise Tax in USD</th>";
	 print "<th> VAT in USD</th>";		
     print "<th> Surtax in USD</th>";
	 print "<th> With-Holding Tax in USD</th>";		
     print "<th> Total Tax in USD</th>";
	while($newArray = mysql_fetch_array($result))
		{
			
			
			$model = $newArray[model_type];
			$modelno= $newArray[model_no];
			$cc1= $newArray[c_c];
			$year = $newArray[year];
			$cif = $newArray[cif];
			$curr= $newArray[currency];
			$dpv= $newArray[dpv];
			$duty= $newArray[duty];
			$exise= $newArray[excise];
			$vat= $newArray[vat];
			$surtax= $newArray[surtax];
			$wtax= $newArray[w_holdtax];
			$ttax= $newArray[total_tax];

print "<tr>";	
print "<td> $model</td>";	
print "<td> $modelno </td>";	
print "<td> $cc1 </td>";	
print "<td> $year </td>";	
print "<td> $cif </td>";	
print "<td> $curr </td>";
print "<td> $dpv </td>";	
print "<td> $duty </td>";	
print "<td> $exise</td>";	
print "<td> $vat </td>";	
print "<td> $surtax </td>";	
print "<td> $wtax </td>";	
print "<td> $ttax </td>";	
print "</tr>";	
 

	}
	
	print "</table>";	
			?>	     
			<br />
</table>
<?php
	}
	 else
			{
		//	 session_start();
			echo "<p align=\"center\"><h3>Data didn't exitst, </h3></p><a href=\"car-index.php\"><h3>Go to Car Index </h3></a>";
			
			}
?>
<a href="toyota.php">Back to menu </a>
</body>
</html>