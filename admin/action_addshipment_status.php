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
	
	$Shippername_stat=$_POST['Shippername_stat'];
$Shipperphone_stat=$_POST['Shipperphone_stat'];
$Shipperemail_stat=$_POST['Shipperemail_stat'];
$Shipperaddress_stat=$_POST['Shipperaddress_stat'];
$Receivername_stat=$_POST['Receivername_stat'];
$Receiverphone_stat=$_POST['Receiverphone_stat'];
$Receiveremail_stat=$_POST['Receiveremail_stat'];
$Receiveraddress_stat=$_POST['Receiveraddress_stat'];
$ConsignmentNo_stat=$_POST['ConsignmentNo_stat'];
$Shiptype_stat=$_POST['Shiptype_stat'];
$Product_stat=$_POST['Product_stat'];
$Mode_stat=$_POST['Mode_stat'];
$Weight_stat=$_POST['Weight_stat'];
$valuematic_weight_stat=$_POST['valuematic_weight_stat'];
$chargeable_weight_stat=$_POST['chargeable_weight_stat'];
$Qnty_stat=$_POST['Qnty_stat'];
$Packages_stat=$_POST['Packages_stat'];
$Invoiceno_stat=$_POST['Invoiceno_stat'];
$invoice_value_stat=$_POST['invoice_value_stat'];
$Bookingmode_stat=$_POST['Bookingmode_stat'];
$type_of_location_stat=$_POST['type_of_location_stat'];
$oda_charges_stat=$_POST['oda_charges_stat'];
$Carrier_stat=$_POST['Carrier_stat'];
$Carrierno_stat=$_POST['Carrierno_stat'];
$Origin_stat=$_POST['Origin_stat'];
$pincode_stat=$_POST['pincode_stat'];
$Destination_stat=$_POST['Destination_stat'];
$Departure_stat=$_POST['Departure_stat'];
$DispatchDate_stat=$_POST['DispatchDate_stat'];
$status_stat=$_POST['status_stat'];
$Expected_del_Date_stat=$_POST['Expected_del_Date_stat'];
$ExpectedDate_stat=$_POST['ExpectedDate_stat'];
$Comments_stat=$_POST['Comments_stat'];
$Receipts_stat=$_POST['Receipts_stat'];

$res=("UPDATE `mst_shipment` SET `Shippername_stat` = '$Shippername_stat', `Shipperphone_stat` = '$Shipperphone_stat', `Shipperemail_stat` = '$Shipperemail_stat', `Shipperaddress_stat` = '$Shipperaddress_stat', `Receivername_stat` = '$Receivername_stat', `Receiverphone_stat` = '$Receiverphone_stat', `Receiveremail_stat` = '$Receiveremail_stat', `Receiveraddress_stat` = '$Receiveraddress_stat', `ConsignmentNo_stat` = '$ConsignmentNo_stat', `Shiptype_stat` = '$Shiptype_stat', `Product_stat` = '$Product_stat', `Mode_stat` = '$Mode_stat', `Weight_stat` = '$Weight_stat', `valuematic_weight_stat` = '$valuematic_weight_stat', `chargeable_weight_stat` = '$chargeable_weight_stat', `Qnty_stat` = '$Qnty_stat', `Packages_stat` = '$Packages_stat', `Invoiceno_stat` = '$Invoiceno_stat', `invoice_value_stat` = '$invoice_value_stat', `Bookingmode_stat` = '$Bookingmode_stat', `type_of_location_stat` = '$type_of_location_stat', `oda_charges_stat` = '$oda_charges_stat', `Carrier_stat` = '$Carrier_stat', `Carrierno_stat` = '$Carrierno_stat', `Origin_stat` = '$Origin_stat', `pincode_stat` = '$pincode_stat', `Destination_stat` = '$Destination_stat', `Departure_stat` = '$Departure_stat', `DispatchDate_stat` = '$DispatchDate_stat', `status_stat` = '$status_stat', `Expected_del_Date_stat` = '$Expected_del_Date_stat', `ExpectedDate_stat` = '$ExpectedDate_stat', `Comments_stat` = '$Comments_stat', `Receipts_stat` = '$Receipts_stat' where 1");
mysql_query($res);
if($res){
	echo "<script>window.location='manage_settings.php?suc=2'</script>";
	}
	}
?>