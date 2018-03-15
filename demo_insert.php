<?php
require_once 'admin/dbconnect.php';
$content=$_POST['content'];
if(isSet($_POST['content']))
{
$content=$_POST['content'];
$sql_in=mysql_query("SELECT * FROM `mst_shipment` where ConsignmentNo='$content' limit 0,1");
//$sql_in= mysql_query("SELECT msg,msg_id FROM messages order by msg_id desc");
if(mysql_num_rows($sql_in)>0){
$r=mysql_fetch_array($sql_in);
$status=$r['status'];

$sql_in2=mysql_query("SELECT * FROM `master_status` where fld_id='$status'");
//$sql_in= mysql_query("SELECT msg,msg_id FROM messages order by msg_id desc");
$r2=mysql_fetch_array($sql_in2);


?><style>
table {
     margin: 20px 10px;
    border: 1px solid #cecece;
    border-radius: 5px;
    box-shadow: 5px 5px 5px 2px #cecece;
}
</style>
<table width="100%" border="1">
<tr><td align="right">WayBill No</td><td align="center">  : </td><td align="left"><?PHP echo $r['ConsignmentNo'];?></td></tr>
<tr><td align="right">Pickup Date</td><td align="center">  : </td><td align="left"><?PHP echo $r['Departure'];?></td></tr>
<tr><td align="right">From</td><td align="center">  : </td><td align="left"><?PHP echo $r['Origin'];?></td></tr>
<tr><td align="right">To</td><td align="center">  : </td><td align="left"><?PHP echo $r['Destination'];?></td></tr>
<tr><td align="right">Status</td><td align="center">  : </td><td align="left"><?PHP echo $r2['main_status'];?></td></tr>
<tr><td align="right">Date Of Delivery</td><td align="center">  : </td><td align="left"><?PHP echo $r['ExpectedDate'];?></td></tr>
<tr><td align="right">Time Of Delivery</td>
<td align="center">  : </td><td align="left"><?PHP echo $r['timeHours'];?> : <?PHP echo $r['timeMins'];?></td></tr>
<tr><td align="right">Recipient</td><td align="center">  : </td><td align="left"><?PHP echo $r['Receivername'];?></td></tr>
</table>
<?PHP } }?>