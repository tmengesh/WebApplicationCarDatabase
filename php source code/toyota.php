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
    <td height="391" rowspan="13">&nbsp;</td>
    <td height="46" colspan="10" bgcolor="#FFFFCC"><div align="center"><span class="style1">Vechicles Valuation Database </span></div></td>
    <td rowspan="13">&nbsp;</td>
  </tr>
  
  <tr>
    <td width="2%" height="391" rowspan="11">&nbsp;</td>
    <td width="16%">&nbsp;</td>
    <td height="21" colspan="8">&nbsp;</td>
  </tr>
  <tr>
    <td width="16%"><div align="center"><a href="#"><img src="images/car logo/toyota.gif" width="120" height="67" border="0" /></a></div></td>
    <td height="33" colspan="8"><span class="style6"><span class="style7">Welcome to Toyota Car Valuation Database </span></span></td>
  </tr>
  <form id="x" name="x" method="post" action="selectcar.php">
  <tr>
      <td height="21">&nbsp;</td>
    <td height="21">&nbsp;</td>
    <td width="10%" height="21">&nbsp;</td>
    <td height="21" colspan="2"><span class="style9">Model Type</span></td>
    <td height="21" colspan="2"><label>
      <select name="combomodel" id="combomodel">
        <option selected="selected" value="">None</option>
        <option value="4  RUNNER">4  RUNNER</option>
		<option value="CARINA">CARINA</option>
        <option value="COASTER">COASTER</option>
        <option value="COROLLA">COROLLA</option>
        <option value="CORONA">CORONA</option>						
        <option value="CRESSIDA">CRESSIDA</option>								
        <option value="CROWN">CROWN</option>						
        <option value="DYNA">DYNA</option>								
        <option value="HILUIX  PICK D/C">HILUIX  PICK D/C</option>								
		<option value="HILUIX  PICK S/CAB">HILUIX  PICK S/CAB</option>										
		<option value="HILUX">HILUX</option>										
		<option value="L/C">L/C</option>								
		<option value="L/C SINGLE CAB PICK">L/C SINGLE CAB PICK</option>								
		<option value="MINI BUS">MINI BUS</option>								
		<option value="PICK UP STOUT">PICK UP STOUT</option>								
        <option value="PRADO">PRADO</option>
        <option value="RAV  4">RAV  4</option>
        <option value="STARLET">STARLET</option>
		<option value="STOUT">STOUT</option>
		<option value="TERCEL">TERCEL</option>
		</select>
    </label></td>
    <td height="21" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td width="7%" height="20">&nbsp;</td>
    <td height="20">&nbsp;</td>
    <td height="21" colspan="2"><span class="style9">Year</span></td>
    <td height="21" colspan="2"><select name="comboyear" id="comboyear">
        <option selected="selected" value="ALL">ALL</option>
        <option value="1990">1990</option>
        <option value="1990">1990</option>
    </select></td>
    <td height="20" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td height="20">&nbsp;</td>
    <td height="20">&nbsp;</td>
    <td height="20" colspan="4"><span class="style10">Optional Attributes </span></td>
    <td height="20" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td height="21">&nbsp;</td>
    <td height="21">&nbsp;</td>
    <td height="20" colspan="2"><span class="style9">Model No </span></td>
    <td height="20" colspan="2"><select name="combomodelno" id="combomodelno" >
        <option selected="selected" value="ALL">ALL</option>
        <option value="AE101L">AE101L</option>
        <option value="AE101L">AE101L</option>
      </select>    </td>
    <td height="21" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td height="21">&nbsp;</td>
    <td height="21">&nbsp;</td>
    <td height="20" colspan="2"><span class="style9">C-C</span></td>
    <td height="20" colspan="2"><select name="combocc" id="combocc" >
        <option selected="selected" value="ALL">ALL</option>
        <option value="1600">1600</option>
        <option value="1600">1600</option>
    </select></td>
    <td height="21" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="20">&nbsp;</td>
    <td height="20" colspan="2">&nbsp;</td>
    <td width="7%">&nbsp;</td>
    <td width="8%"><input type="submit" name="submit" value="Next" /></td>
    <td width="7%" height="20"><input type="reset" name="reset" value="Clear" /></td>
    <td width="20%">&nbsp;</td>
    <td height="20" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="21" colspan="9">
	</form>
	</td>
  </tr>
  <tr>
    <td height="43" colspan="9">&nbsp;</td>
  </tr>
  <tr>
    <td height="43" colspan="9">&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td height="21">&nbsp;</td>
    <td height="21">&nbsp;</td>
    <td height="21" colspan="4">&nbsp;</td>
    <td height="21" colspan="2">&nbsp;</td>
    <td width="18%" height="21"><a href="car-index.php">Back to menu </a></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td colspan="10">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
