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

	
if(isset($_POST['submit'])){
$ship_id=test_input($_POST['ship_id']);				
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


$prof_photo=$_FILES["prof_photo"]["name"];

if($prof_photo!=''){
		if(($_FILES["prof_photo"]["type"] == "image/gif")|| ($_FILES["prof_photo"]["type"]== "image/jpeg")|| ($_FILES["prof_photo"]["type"]== "image/png" )|| ($_FILES["prof_photo"]["type"] == "image/JPG" ) || ($_FILES["prof_photo"]["type"] == "image/jpg" )){
		   
			move_uploaded_file($_FILES["prof_photo"]["tmp_name"],
			"receipts/" . $_FILES["prof_photo"]["name"]);
			}


$res=mysql_query("UPDATE `mst_shipment` SET `Shippername` = '$Shippername', `Shipperphone` = '$Shipperphone', `Shipperemail` = '$Shipperemail', `Shipperaddress` = '$Shipperaddress', `Receivername` = '$Receivername', `Receiverphone` = '$Receiverphone', `Receiveremail` = '$Receiveremail', `Receiveraddress` = '$Receiveraddress', `ConsignmentNo` = '$ConsignmentNo', `Shiptype` = '$Shiptype', `Weight` = '$Weight', `valuematic_weight` = '$valuematic_weight', `Courier` = '$Courier', `Packages` = '$Packages', `Invoiceno` = '$Invoiceno', `Product` = '$Product', `Qnty` = '$Qnty', `Bookingmode` = '$Bookingmode', `type_of_location` = '$type_of_location', `Mode` = '$Mode', `Carrier` = '$Carrier', `Carrierno` = '$Carrierno', `Depttime` = '$Depttime', `Origin` = '$Origin', `pincode` = '$pincode', `Destination` = '$Destination', `destination_pincode` = '$destination_pincode', `Departure` = '$Departure', `timeHours` = '$timeHours', `timeMins` = '$timeMins', `status` = '$status', `dispatch_date` = '$DispatchDate', `ExpectedDate` = '$ExpectedDate', `Expected_del_Date` = '$Expected_del_Date', `Comments` = '$Comments', `invoice_value` = '$invoice_value', `oda_charges` = '$oda_charges', `Receipts` = '$prof_photo', `fldstatus` = '1' WHERE `mst_shipment`.`fld_id` = $ship_id");


}else{
	$res=mysql_query("UPDATE `mst_shipment` SET `Shippername` = '$Shippername', `Shipperphone` = '$Shipperphone', `Shipperemail` = '$Shipperemail', `Shipperaddress` = '$Shipperaddress', `Receivername` = '$Receivername', `Receiverphone` = '$Receiverphone', `Receiveremail` = '$Receiveremail', `Receiveraddress` = '$Receiveraddress', `ConsignmentNo` = '$ConsignmentNo', `Shiptype` = '$Shiptype', `Weight` = '$Weight', `valuematic_weight` = '$valuematic_weight', `Courier` = '$Courier', `Packages` = '$Packages', `Invoiceno` = '$Invoiceno', `Product` = '$Product', `Qnty` = '$Qnty', `Bookingmode` = '$Bookingmode', `type_of_location` = '$type_of_location', `Mode` = '$Mode', `Carrier` = '$Carrier', `Carrierno` = '$Carrierno', `Depttime` = '$Depttime', `Origin` = '$Origin', `pincode` = '$pincode', `Destination` = '$Destination', `destination_pincode` = '$destination_pincode', `Departure` = '$Departure', `timeHours` = '$timeHours', `timeMins` = '$timeMins', `status` = '$status', `dispatch_date` = '$DispatchDate', `ExpectedDate` = '$ExpectedDate',`Expected_del_Date` = '$Expected_del_Date', `Comments` = '$Comments', `invoice_value` = '$invoice_valu', `oda_charges` = '$oda_charges', `fldstatus` = '1' WHERE `mst_shipment`.`fld_id` = $ship_id");
	}
if($res){
	echo "<script>window.location='manage_shipment.php?suc=2'</script>";
	}
}
?>