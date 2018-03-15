<?php error_reporting(E_ERROR | E_PARSE);
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Admin</title>
<link href="mystyle.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="tracking_style.css">
<style type="text/css">
.style1 {
	font-size: 15px;
	font-weight: bold;
	color: #003399;
}
-->
</style>


</head>