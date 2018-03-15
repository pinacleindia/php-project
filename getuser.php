<?php
require_once 'admin/dbconnect.php';
if(isSet($_POST['content']))
{
$content=$_POST['content'];

$sql_in=mysql_query("SELECT * FROM `mst_shipment` where ConsignmentNo='$content'");
//$sql_in= mysql_query("SELECT msg,msg_id FROM messages order by msg_id desc");
$r=mysql_fetch_array($sql_in);
$status=$r['status'];

$sql_in2=mysql_query("SELECT * FROM `master_status` where fld_id='$status'");
//$sql_in= mysql_query("SELECT msg,msg_id FROM messages order by msg_id desc");
$r2=mysql_fetch_array($sql_in2);

}
?>
<table width="80%" align="center" style="margin:auto; display:block;">
<tr><td align="right">WayBill No</td><td align="center">  : </td><td align="left"><?PHP echo $r['ConsignmentNo'];?></td></tr>
<tr><td align="right">Pickup Date</td><td align="center">  : </td><td align="left"><?PHP echo $r['Departure'];?></td></tr>
<tr><td align="right">From</td><td align="center">  : </td><td align="left"><?PHP echo $r['Origin'];?></td></tr>
<tr><td align="right">To</td><td align="center">  : </td><td align="left"><?PHP echo $r['Destination'];?></td></tr>
<tr><td align="right">Status</td><td align="center">  : </td><td align="left"><?PHP echo $r2['main_status'];?></td></tr>
<tr><td align="right">Date Of Delivery</td><td align="center">  : </td><td align="left"><?PHP echo $r['ExpectedDate'];?></td></tr>
<tr><td align="right">Time Of Delivery</td><td align="center">  : </td><td align="left"><?PHP echo $r['timeHours'];?> : <?PHP echo $r['timeMins'];?></td></tr>
<tr><td align="right">Recipient</td><td align="center">  : </td><td align="left"><?PHP echo $r['Receivername'];?></td></tr>
</table>