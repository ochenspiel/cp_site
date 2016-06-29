<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Parrish Wedding Registry</title>
<style type="text/css">
<!--
body {
	background-color: #00cccc;
}
body,td,th {
	color: #FFFFFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: small;
}
-->
</style></head>

<body>
<p><img src="weddingheader.jpg" width="1206" height="303" /></p>
<p>
  <?php
if($_GET['bought'] != ""){
	mysql_pconnect("mysql.tsnetworks.ca",bgoldring,g3gedqj);
	@mysql_select_db(bgoldring_db) or die("Unable to select database");
	mysql_query("UPDATE parrish SET Bought = 1 WHERE Id = " . $_GET['bought']);
	$rs = mysql_query("SELECT Name FROM parrish WHERE Id = " . $_GET['bought']);
	echo "<center>You have bought: " . mysql_result($rs, 0, 'Name');
    echo "</center>";

	mysql_close();
}
?>
</p>
<p align="center"><strong>IKEA</strong></p>
<p>
  <?php
mysql_pconnect("mysql.tsnetworks.ca",bgoldring,g3gedqj);
@mysql_select_db(bgoldring_db) or die("Unable to select database");
$rs = mysql_query("SELECT * FROM parrish WHERE store = 1");
echo '<table width="750" border="1" align="center" cellpadding="1" cellspacing="0">';
echo '<tr>
    <td><div align="center">Item Name</div></td>
    <td><div align="center">Description</div></td>
    <td><div align="center">Price</div></td>
    <td><div align="center">Bought?</div></td>
	</tr>';

if(mysql_numrows($rs) != 0){
	
	for($i=0; $i < mysql_numrows($rs); $i++){
		if($i % 2 == 1)
		    echo '<tr>';
	     else
    	 	echo '<tr bgcolor="#00bbbb">';
    	echo '<td>' . mysql_result($rs, $i, "Name") . '</td>';
       	echo '<td>' . mysql_result($rs, $i, "Desc") . '</td>';
       	echo '<td>$' . mysql_result($rs, $i, "Price") . '</td>';
      	echo '<td>';
        if(mysql_result($rs, $i, "Bought") == 1)
        	echo 'Bought';
        else
        	echo 'Not yet bought. <a href="buy.php?id=' . mysql_result($rs, $i, "Id") . '">Click here to buy!</a>';
        echo '</td>';
            echo '</tr>';
    }
}
mysql_close();
?>
</p>

  </table>
  <p align="center">
<strong>Canadian Tire</strong></p>

  <?php
mysql_pconnect("mysql.tsnetworks.ca",bgoldring,g3gedqj);
@mysql_select_db(bgoldring_db) or die("Unable to select database");
$rs = mysql_query("SELECT * FROM parrish WHERE store = 2");
echo '<table width="750" border="1" align="center" cellpadding="1" cellspacing="0">';
echo '<tr>
    <td><div align="center">Item Name</div></td>
    <td><div align="center">Description</div></td>
    <td><div align="center">Price</div></td>
    <td><div align="center">Bought?</div></td>
	</tr>';

if(mysql_numrows($rs) != 0){
	
	for($i=0; $i < mysql_numrows($rs); $i++){
		if($i % 2 == 1)
		    echo '<tr>';
	     else
    	 	echo '<tr bgcolor="#00bbbb">';
    	echo '<td>' . mysql_result($rs, $i, "Name") . '</td>';
       	echo '<td>' . mysql_result($rs, $i, "Desc") . '</td>';
       	echo '<td>$' . mysql_result($rs, $i, "Price") . '</td>';
      	echo '<td>';
        if(mysql_result($rs, $i, "Bought") == 1)
        	echo 'Bought';
        else
        	echo 'Not yet bought. <a href="buy.php?id=' . mysql_result($rs, $i, "Id") . '">Click here to buy!</a>';
        echo '</td>';
            echo '</tr>';
    }
}
mysql_close();
?>
</table>

<p align="center"><strong>Other</strong></p>

  <?php
mysql_pconnect("mysql.tsnetworks.ca",bgoldring,g3gedqj);
@mysql_select_db(bgoldring_db) or die("Unable to select database");
$rs = mysql_query("SELECT * FROM parrish WHERE store = 3");
echo '<table width="750" border="1" align="center" cellpadding="1" cellspacing="0">';
echo '<tr>
    <td><div align="center">Item Name</div></td>
    <td><div align="center">Description</div></td>
    <td><div align="center">Price</div></td>
    <td><div align="center">Bought?</div></td>
	</tr>';

if(mysql_numrows($rs) != 0){
	
	for($i=0; $i < mysql_numrows($rs); $i++){
		if($i % 2 == 1)
		    echo '<tr>';
	     else
    	 	echo '<tr bgcolor="#00bbbb">';
    	echo '<td>' . mysql_result($rs, $i, "Name") . '</td>';
       	echo '<td>' . mysql_result($rs, $i, "Desc") . '</td>';
       	echo '<td>$' . mysql_result($rs, $i, "Price") . '</td>';
      	echo '<td>';
        if(mysql_result($rs, $i, "Bought") == 1)
        	echo 'Bought';
        else
        	echo 'Not yet bought. <a href="buy.php?id=' . mysql_result($rs, $i, "Id") . '">Click here to buy!</a>';
        echo '</td>';
            echo '</tr>';
    }
}
mysql_close();
?>
</table>
</body>
</html>
