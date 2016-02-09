<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Toyota Car Valuation Database</title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 36px;
	color: #0000CC;
}
.style6 {font-size: 30px}
.style7 {
	color: #0000CC;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 25px;
}
.style9 {color: #0000CC; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 18px; }
.style10 {
	font-size: 20px;
	font-weight: bold;
}
-->
</style>
</head>

<body onLoad="document.x.comboyear.disabled=true ; document.x.combomodelno.disabled=true ; document.x.combocc.disabled=true"  bgcolor="#FFFFCC">

<table width="100%" height="100%" border="0" bgcolor="#FFFFCC">
  <tr>
    <td width="1%" height="21">&nbsp;</td>
    <td colspan="10"><div align="center"><img src="images/logo.gif" width="700" height="88" /></div></td>
    <td width="1%">&nbsp;</td>
  </tr>
  <tr>
    <td height="391" rowspan="10">&nbsp;</td>
    <td height="46" colspan="10" bgcolor="#FFFFCC"><div align="center"><span class="style1">Vechicles Valuation Database </span></div></td>
    <td rowspan="10">&nbsp;</td>
  </tr>
  
  <tr>
    <td width="2%" height="391" rowspan="8">&nbsp;</td>
    <td width="16%"><div align="center"><a href="#"><img src="images/car logo/toyota.gif" width="120" height="67" border="0" /></a></div></td>
	
    <td height="33" colspan="8">
	<?php
	$model1= $_POST['combomodel'];
	
	print "<font color=\"Black\" size=\"5\"><b>Welcome to Toyota $model1 Valuation Database </b></font>";
	?>	</td>
  </tr>
  <form id="x" name="x" method="post" action="dispcar.php">
  <tr>
      <td height="21">&nbsp;</td>
    <td height="21">&nbsp;</td>
    <td width="10%" height="21">&nbsp;</td>
    <td height="21" colspan="2"><span class="style9">Model Type</span></td>
    <td height="21" colspan="2">
	<?php
	$model1= $_POST['combomodel'];
	?>
	<input name="txtcar" type="text" id="txtcar"  onfocus="blur();" value="<?php echo "$model1" ; ?>" size="20" maxlength="20"/>	</td>
    <td height="21" colspan="2">&nbsp;</td>
  </tr>
 
  <tr>
    <td height="24">&nbsp;</td>
    <td width="7%" height="24">&nbsp;</td>
    <td height="24">&nbsp;</td>
    <td height="24" colspan="2"><span class="style9">Year</span></td>
    <td height="24" colspan="2">
	
	     <?
include("connectivity.php");
$query = "SELECT * FROM `tab_toyota` 
WHERE `model_type` = '$model1' ";

$Result = @mysql_query($query);

  echo "<SELECT NAME='cmbyear'>";

  while ($Row = mysql_fetch_array($Result))
  {
    
	
	echo "<OPTION VALUE='" . $Row["year"] . "'>" . $Row["year"] . "</OPTION>";
  }

  echo "</SELECT>";

  mysql_free_result($Result);  

?>	</td>
<tr>
    <td height="20">&nbsp;</td>
    <td height="20" colspan="2">&nbsp;</td>
    <td width="7%">&nbsp;</td>
    <td width="8%"><input type="submit" name="submit" value="Search" /></td>
    <td width="7%" height="20"><input type="reset" name="reset" value="Clear" /></td>
    <td width="20%">&nbsp;</td>
    <td height="20" colspan="2">&nbsp;</td>
  </tr>
    <td height="24" colspan="2">&nbsp;</td>
  </tr>
  
  <tr>
    <td height="21">&nbsp;</td>
    <td height="21">&nbsp;</td>
    <td height="21">&nbsp;</td>
    <td height="21" colspan="2">&nbsp;</td>
    <td height="21" colspan="2">&nbsp;</td>
    <td height="21" colspan="2"><a href="car-index.php">Back to menu </a></td>
  </tr>
  
  
  <tr>
    <td height="2" colspan="9">
  </form>
	</td>
  </tr>
  <tr>
    <td height="21" colspan="9">&nbsp;</td>
  </tr>
  
  <tr>
    <td height="21">&nbsp;</td>
    <td height="21">&nbsp;</td>
    <td height="21">&nbsp;</td>
    <td height="21" colspan="4">&nbsp;</td>
    <td height="21" colspan="2">&nbsp;</td>
    <td width="18%" height="21">&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td colspan="10">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
