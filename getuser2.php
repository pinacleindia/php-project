<style>
table {
    margin: 20px 10px;
    border: 1px solid #cecece;
    border-radius: 5px;
    box-shadow: 5px 5px 5px 2px #cecece;
	font-family: 'Roboto', sans-serif;
}
td, th {
    display: table-cell;
    vertical-align: inherit;
	padding:1% !important;
}
.magnify{ top:620px !important;}
</style>
<script type="text/javascript" src="jquery.magnifier.js">

/***********************************************
* jQuery Image Magnify- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Please keep this notice intact
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>

<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">--><?php
require_once 'admin/dbconnect.php';

$q = $_POST['content'];
if($q!=""){
$sql_in=mysql_query("SELECT * FROM `mst_shipment` where ConsignmentNo='$q'");

$cum_to_know=mysql_num_rows($sql_in);
if($cum_to_know>0){
$r=mysql_fetch_array($sql_in);
$status=$r['status'];

$sql_in2=mysql_query("SELECT * FROM `master_status` where fld_id='$status'");

$r2=mysql_fetch_array($sql_in2);
?>
<table width="100%" align="center" style="margin:auto;" border="1">

<tr><td align="right" width="30%;">WayBill No</td><td align="center" width="10%;">  : </td><td align="left" width="60%;"><?PHP echo $r['ConsignmentNo'];?></td></tr>
<?PHP if($r['Departure']!=""){?>
<tr><td align="right">Pickup Date</td><td align="center">  : </td><td align="left"><?PHP echo $r['Departure'];?></td></tr><?PHP }?>

<?PHP if($r['Origin']!=""){?>
<tr><td align="right">From</td><td align="center">  : </td><td align="left"><?PHP echo $r['Origin'];?></td></tr><?PHP }?>

<?PHP if($r['Destination']!=""){?>
<tr><td align="right">To</td><td align="center">  : </td><td align="left"><?PHP echo $r['Destination'];?></td></tr><?PHP }?>

<?PHP if($r['main_status']!=""){?>
<tr><td align="right">Status</td><td align="center">  : </td><td align="left"><?PHP echo $r2['main_status'];?></td></tr><?PHP }?>

<?PHP if($r['Expected_del_Date']!=""){?>
<tr><td align="right">Expected Delivery Date</td><td align="center">  : </td><td align="left"><?PHP echo $r['Expected_del_Date'];?></td></tr><?PHP }?>

<?PHP if($r['ExpectedDate']!=""){?>
<tr><td align="right">Date Of Delivery</td><td align="center">  : </td><td align="left"><?PHP echo $r['ExpectedDate'];?></td></tr><?PHP }?>

<?PHP if($r['Comments']!=""){?>
<tr><td align="right">Comments</td><td align="center">  : </td><td align="left"><?PHP echo $r['Comments'];?></td></tr><?PHP }?>

<?PHP if($r['Receipts']!=""){?>

<tr><td align="right" width="30%;">Receipts </td><td align="center" width="10%;">  : </td><td align="left" width="60%;"><img src="admin/receipts/<?PHP echo $r['Receipts'];?>" class="magnify" data-magnifyby="2.5" style="width:200px; top:250px !important;" />
</td></tr>

<?PHP }?>

</table>
<?PHP }else{?>

<table width="100%" align="center" style="margin:auto;" border="1">
<tr><td colspan="3" align="center"> No Record found in databse.</td></tr>
</table>

<?PHP }}?>