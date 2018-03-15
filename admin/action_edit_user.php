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
$user_id=test_input($_POST['user_id']);				
$Shippername=test_input($_POST['Shippername']);
$CShippername=test_input($_POST['CShippername']);
$Shipperemail=test_input($_POST['Shipperemail']);
$Shipperphone=test_input($_POST['Shipperphone']);
$Shippermobile=test_input($_POST['Shippermobile']);
$Shipperaddress=test_input($_POST['Shipperaddress']);
$fldstatus=test_input($_POST['fldstatus']);
$password=test_input($_POST['password']);

$message = '<html><body>';
$message .= '<center><table rules="all" style="border:0px solid #666;" border="0" cellpadding="3" cellspacing="3" width="600px" class="new_test">';
$message .= "<tr style='background: #eee;'><td colspan='2'><a href='http://www.logivalley.com/' target='_blank'>
<img src='http://logivalley.com/img/logo.png'  width='100%'></a>
<a href='http://logivalley.com/' target='_blank' style='text-decoration:none;'><strong><center>www.logivalley.com</center></strong> </a></td></tr>";
$message .= "<tr><td colspan='2' align='center'>&nbsp;</td></tr>";	
$message .= "<tr><td colspan='2' style='text-decoration:none;'>Login Details - www.logivalley.com/</td></tr>";	
$message .= "<tr><td colspan='2'>&nbsp;</td></tr>";			

$message .= "<tr><td  width='20%'><strong>Email ID </strong> </td><td width='80%'>".test_input($_POST['Shipperemail'])."</td></tr>";
$message .= "<tr><td  width='20%'><strong>Mobile No</strong> </td><td width='80%'>".test_input($_POST['password'])."</td></tr>";
$message .= "</table></center>";
$message .= "</body></html>";

$EmailTo = test_input($_POST['Shipperemail']);
$ser= "info@logivalley.com";
$headers = "info@logivalley.com\r\n";
$headers .= "Reply-To: info@logivalley.com\r\n";
$headers .= "Bcc: ". $ser. "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$Subject = "Login Details - www.logivalley.com";
// send email 
$success = mail($EmailTo, $Subject, $message, "From: $headers") or die(" not send");
 
 

$res=mysql_query("UPDATE `user_loging` SET `name` = '$Shippername',`comp_nm` = '$CShippername',`email_id` = '$Shipperemail',
`password` = '$password',`mobile` = '$Shippermobile',`phone` = '$Shipperphone',`address` = '$Shipperaddress',`fldstatus` = '$fldstatus' WHERE `user_loging`.`fld_id` =$user_id");

if($res){
	echo "<script>window.location='manage_users.php?suc=2'</script>";
	}
}
?>