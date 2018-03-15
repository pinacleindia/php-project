<?PHP
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE); 
ob_start();
	session_start();
	require_once 'dbconnect.php';

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	function random_password( $length = 6 ) {
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
if(isset($_POST['submit'])){
	
//$ship_id=test_input($_POST['ship_id']);				
$Shippername=test_input($_POST['Shippername']);
$CShippername=test_input($_POST['CShippername']);
$Shipperemail=test_input($_POST['Shipperemail']);
$Shipperphone=test_input($_POST['Shipperphone']);
$Shippermobile=test_input($_POST['Shippermobile']);
$Shipperaddress=test_input($_POST['Shipperaddress']);
$fldstatus=test_input($_POST['fldstatus']);
if($Shippername!=''){
$res_one=mysql_query("select * from user_loging where name='$Shippername'");
$rest_one_two=mysql_num_rows($res_one);	
if($rest_one_two>0){
	echo "<script>window.location='add_users.php?err=1'</script>";
	exit();
	}
}
if($Shipperemail!=''){
$res_one_2=mysql_query("select * from user_loging where email_id='$Shipperemail'");
$rest_one_two_2=mysql_num_rows($res_one_2);	
if($rest_one_two_2>0){
	echo "<script>window.location='add_users.php?err=2'</script>";
	exit();
	}
}

$password=random_password(6);

$message = '<html><body>';
$message .= '<center><table rules="all" style="border:0px solid #666;" border="0" cellpadding="3" cellspacing="3" width="600px" class="new_test">';
$message .= "<tr style='background: #eee;'><td colspan='2'><a href='http://www.logivalley.com/' target='_blank'>
<img src='http://logivalley.com/img/logo.png'  width='100%'></a>
<a href='http://logivalley.com/' target='_blank' style='text-decoration:none;'><strong><center>www.logivalley.com</center></strong> </a></td></tr>";
$message .= "<tr><td colspan='2' align='center'>&nbsp;</td></tr>";	
$message .= "<tr><td colspan='2' style='text-decoration:none;'>Login Details - www.logivalley.com/</td></tr>";	
$message .= "<tr><td colspan='2'>&nbsp;</td></tr>";			

$message .= "<tr><td  width='20%'><strong>Email ID </strong> </td><td width='80%'>".test_input($_POST['Shipperemail'])."</td></tr>";
$message .= "<tr><td  width='20%'><strong>Mobile No</strong> </td><td width='80%'>".$password."</td></tr>";
$message .= "</table></center>";
$message .= "</body></html>";

$EmailTo = $_POST['Shipperemail'];
$ser= "info@logivalley.com";
$headers = "info@logivalley.com\r\n";
$headers .= "Reply-To: info@logivalley.com\r\n";
$headers .= "Bcc: ". $ser. "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$Subject = "Login Details - www.logivalley.com";
// send email 
$success = mail($EmailTo, $Subject, $message, "From: $headers") or die(" not send");

$res=mysql_query("INSERT INTO `user_loging` (`fld_id` ,`name` ,`comp_nm` ,`email_id` ,`password` ,`mobile` ,`phone` ,
`address` ,`fldstatus`)VALUES (NULL , '$Shippername', '$CShippername', '$Shipperemail', '$password', '$Shippermobile', '$Shipperphone', '$Shipperaddress', '$fldstatus')");

if($res){
	echo "<script>window.location='manage_users.php?suc=1'</script>";
	}
}
?>