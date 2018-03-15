<?PHP  error_reporting(E_ERROR | E_PARSE);
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}?>
<?php
$Shippername = $_GET['Shippername'];
    
    //get matched data from skills table
	$query =mysql_query("SELECT * FROM mst_shipment WHERE Shippername LIKE '%".$Shippername."%' ORDER BY Shippername ASC limit 0,5");
	while($row=mysql_fetch_assoc($query)){
		$data[] = $row['Shippername'];
		}

    
    //return json data
    echo json_encode($data);
?>	