<?PHP 
ob_start();
	session_start();
	require_once 'dbconnect.php';

	
	$error = false;
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	
if($_POST['submit']){
				
$Shippername=test_input($_POST['Shippername']);
$Shipperphone=test_input($_POST['Shipperphone']);
$Shipperemail=test_input($_POST['Shipperemail']);
$Shipperaddress=test_input($_POST['Shipperaddress']);
$Receivername=test_input($_POST['Receivername']);
$Receiverphone=test_input($_POST['Receiverphone']);
$Receiveremail=test_input($_POST['Receiveremail']);
$Receiveraddress=test_input($_POST['Receiveraddress']);
$ConsignmentNo=test_input($_POST['ConsignmentNo']);
$Shiptype=test_input($_POST['Shiptype']);
$Weight=test_input($_POST['Weight']);
$valuematic_weight=test_input($_POST['valuematic_weight']);
$chargeable_weight=test_input($_POST['chargeable_weight']);
$Courier=test_input($_POST['Courier']);
$Packages=test_input($_POST['Packages']);
$Invoiceno=test_input($_POST['Invoiceno']);
$Product=test_input($_POST['Product']);
$Qnty=test_input($_POST['Qnty']);
$Bookingmode=test_input($_POST['Bookingmode']);
$type_of_location=test_input($_POST['type_of_location']);
$Mode=test_input($_POST['Mode']);
$Carrier=test_input($_POST['Carrier']);
$Carrierno=test_input($_POST['Carrierno']);
$Depttime=test_input($_POST['Depttime']);
$Origin=test_input($_POST['Origin']);
$pincode=test_input($_POST['pincode']);
$Destination=test_input($_POST['Destination']);
$destination_pincode=test_input($_POST['destination_pincode']);
$Departure=test_input($_POST['Departure']);
$timeHours=test_input($_POST['timeHours']);
$timeMins=test_input($_POST['timeMins']);
$status=test_input($_POST['status']);
$DispatchDate=test_input($_POST['DispatchDate']);
$ExpectedDate=test_input($_POST['ExpectedDate']);
$Expected_del_Date=test_input($_POST['Expected_del_Date']);
$invoice_value=test_input($_POST['invoice_value']);
$oda_charges=test_input($_POST['oda_charges']);
$Comments=test_input($_POST['Comments']);


$raw_material=mysql_query("select * from `mst_shipment` where fldstatus='1' order by fld_id DESC limit 0,1");
$cum_mng=mysql_fetch_array($raw_material);

$Shippername_stat=$cum_mng['Shippername_stat'];
$Shipperphone_stat=$cum_mng['Shipperphone_stat'];
$Shipperemail_stat=$cum_mng['Shipperemail_stat']; 
$Shipperaddress_stat=$cum_mng['Shipperaddress_stat'];
$Receivername_stat=$cum_mng['Receivername_stat'];
$Receiverphone_stat=$cum_mng['Receiverphone_stat'];
$Receiveremail_stat=$cum_mng['Receiveremail_stat'];
$Receiveraddress_stat=$cum_mng['Receiveraddress_stat'];
$ConsignmentNo_stat=$cum_mng['ConsignmentNo_stat'];
$Shiptype_stat=$cum_mng['Shiptype_stat'];
$Product_stat =$cum_mng['Product_stat'];
$Mode_stat=$cum_mng['Mode_stat'];
$Weight_stat =$cum_mng['Weight_stat'];
$valuematic_weight_stat=$cum_mng['valuematic_weight_stat'];
$chargeable_weight_stat=$cum_mng['chargeable_weight_stat'];
$Qnty_stat=$cum_mng['Qnty_stat'];
$Packages_stat=$cum_mng['Packages_stat'];
$Invoiceno_stat=$cum_mng['Invoiceno_stat'];
$invoice_value_stat =$cum_mng['invoice_value_stat'];
$Bookingmode_stat=$cum_mng['Bookingmode_stat'];
$type_of_location_stat=$cum_mng['type_of_location_stat'];
$oda_charges_stat=$cum_mng['oda_charges_stat'];
$Carrier_stat=$cum_mng['Carrier_stat'];
$Carrierno_stat=$cum_mng['Carrierno_stat'];
$Origin_stat=$cum_mng['Origin_stat'];
$pincode_stat=$cum_mng['pincode_stat'];
$Destination_stat=$cum_mng['Destination_stat'];
$Departure_stat=$cum_mng['Departure_stat'];
$DispatchDate_stat=$cum_mng['DispatchDate_stat'];
$status_stat=$cum_mng['status_stat'];
$Expected_del_Date_stat=$cum_mng['Expected_del_Date_stat'];
$ExpectedDate_stat=$cum_mng['ExpectedDate_stat'];
$Comments_stat=$cum_mng['Comments_stat'];
$Receipts_stat=$cum_mng['Receipts_stat'];



$res=("INSERT INTO `mst_shipment` (`fld_id`, `Shippername`, `Shipperphone`, `Shipperemail`, `Shipperaddress`, `Receivername`, `Receiverphone`, `Receiveremail`, `Receiveraddress`, `ConsignmentNo`, `Shiptype`, `Weight`, `valuematic_weight`, `chargeable_weight`, `Courier`, `Packages`, `Invoiceno`, `Product`, `Qnty`, `Bookingmode`, `type_of_location`, `Mode`, `Carrier`, `Carrierno`, `Depttime`, `Origin`, `pincode`, `Destination`, `destination_pincode`, `Departure`, `timeHours`, `timeMins`, `status`, `dispatch_date`, `ExpectedDate`, `Expected_del_Date`, `Comments`, `invoice_value`, `oda_charges`, `Receipts`, `fldstatus`, `Shippername_stat`, `Shipperphone_stat`, `Shipperemail_stat`, `Shipperaddress_stat`, `Receivername_stat`, `Receiverphone_stat`, `Receiveremail_stat`, `Receiveraddress_stat`, `ConsignmentNo_stat`, `Shiptype_stat`, `Product_stat`, `Mode_stat`, `Weight_stat`, `valuematic_weight_stat`, `chargeable_weight_stat`, `Qnty_stat`, `Packages_stat`, `Invoiceno_stat`, `invoice_value_stat`, `Bookingmode_stat`, `type_of_location_stat`, `oda_charges_stat`, `Carrier_stat`, `Carrierno_stat`, `Origin_stat`, `pincode_stat`, `Destination_stat`, `Departure_stat`, `DispatchDate_stat`, `status_stat`, `Expected_del_Date_stat`, `ExpectedDate_stat`, `Comments_stat`, `Receipts_stat`) VALUES (NULL, '$Shippername', '$Shipperphone', '$Shipperemail', '$Shipperaddress', '$Receivername', '$Receiverphone', '$Receiveremail', '$Receiveraddress', '$ConsignmentNo', '$Shiptype', '$Weight', '$valuematic_weight', '$chargeable_weight', '$Courier', '$Packages', '$Invoiceno', '$Product', '$Qnty', '$Bookingmode', '$type_of_location', '$Mode', '$Carrier', '$Carrierno', '$Depttime', '$Origin', '', '$Destination', '', '$Departure', '', '', '$status', '$DispatchDate', '$ExpectedDate', '$Expected_del_Date', '$Comments', '$invoice_value', '$oda_charges', '', '1', '$Shippername_stat', '$Shipperphone_stat', '$Shipperemail_stat', '$Shipperaddress_stat', '$Receivername_stat', '$Receiverphone_stat', '$Receiveremail_stat', '$Receiveraddress_stat', '$ConsignmentNo_stat', '$Shiptype_stat', '$Product_stat', '$Mode_stat', '$Weight_stat', '$valuematic_weight_stat', '$chargeable_weight_stat', '$Qnty_stat', '$Packages_stat', '$Invoiceno_stat', '$invoice_value_stat', '$Bookingmode_stat', '$type_of_location_stat', '$oda_charges_stat', '$Carrier_stat', '$Carrierno_stat', '$Origin_stat', '$pincode_stat', '$Destination_stat', '$Departure_stat', '$DispatchDate_stat', '$status_stat', '$Expected_del_Date_stat', '$ExpectedDate_stat', '$Comments_stat', '$Receipts_stat')");
mysql_query($res);




/*$res=mysql_query("INSERT INTO `mst_shipment` (`fld_id` ,`Shippername` ,`Shipperphone` ,`Shipperemail` ,`Shipperaddress` ,`Receivername` ,
`Receiverphone` ,`Receiveremail` ,`Receiveraddress` ,`ConsignmentNo` ,`Shiptype` ,`Weight` ,`Courier` ,`Packages` ,`Invoiceno` ,`Product` ,
`Qnty` ,`Bookingmode` ,`Totalfreight` ,`Mode` ,`Carrier` ,`Carrierno` ,`Depttime` ,`Origin` ,`Destination` ,`Departure` ,`timeHours` ,
`timeMins` ,`status` ,`ExpectedDate` ,`Comments` ,`fldstatus`)VALUES (NULL , '$Shippername', '$Shipperphone', '$Shipperemail', '$Shipperaddress', '$Receivername', '$Receiverphone', '$Receiveremail', '$Receiveraddress', '$ConsignmentNo', '$Shiptype', '$Weight', '$Courier', '$Packages', '$Invoiceno', '$Product', '$Qnty', '$Bookingmode', '$Totalfreight', '$Mode', '$Carrier', '$Carrierno', '$Depttime', '$Origin', '$Destination', '$Departure', '$timeHours', '$timeMins', '$status', '$ExpectedDate', '$Comments','1')");*/


if($res){
	echo "<script>window.location='manage_shipment.php?suc=1'</script>";
	}
}
?>