<?PHP error_reporting(E_ERROR | E_PARSE);
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}?>
<?php
/*$SQL="select v.cat_nm,p.subcat_nm,t.prd_nm,t.prd_height,t.prd_width,t.prd_thick,t.prd_qty,t.prd_wgts,t.prd_ltrs,t.prd_pairs,t.prd_mtrs

from tbl_curr_stocks t

left join tbl_category v

on t.cat_nm = v.fld_id

left join tbl_subcategory p

  on t.subcat_nm=p.fld_id";*/
  
  /*
  ul.comp_nm, v.Shippername, v.Shipperphone, v.Shipperemail, v.Shipperaddress, v.Receivername, v.Receiverphone, v.Receiveremail, v.Receiveraddress,v.ConsignmentNo,t.type_of_shipments,p.product_stat,tm.trans_mode,v.Weight,v.valuematic_weight,v.chargeable_weight,pt.packing_type,
v.Invoiceno,v.invoice_value,b.booking_modes,lt.location_type,v.oda_charges,v.Carrier,v.Carrierno,v.Origin,v.Destination,
v.Departure,v.dispatch_date,v.ExpectedDate,m.main_status,v.ExpectedDate,v.Comments
  */
  $a=array();
	$condi="ul.comp_nm";
	array_push($a,$condi);
	
	$condi="v.Shippername";
	array_push($a,$condi);

	$condi="v.Shipperphone";
	array_push($a,$condi);
	
	$condi="v.Shipperemail";
	array_push($a,$condi);

	$condi="v.Shipperaddress";
	array_push($a,$condi);

	$condi="v.Receivername";
	array_push($a,$condi);

	$condi="v.Receiverphone";
	array_push($a,$condi);

	$condi="v.Receiveremail";
	array_push($a,$condi);

	$condi="v.Receiveraddress";
	array_push($a,$condi);

	$condi="v.ConsignmentNo";
	array_push($a,$condi);

	$condi="t.type_of_shipments";
	array_push($a,$condi);

	$condi="p.product_stat";
	array_push($a,$condi);

	$condi="tm.trans_mode";
	array_push($a,$condi);

	$condi="v.Weight";
	array_push($a,$condi);

	$condi="v.valuematic_weight";
	array_push($a,$condi);

	$condi="v.chargeable_weight";
	array_push($a,$condi);

	$condi="pt.packing_type";
	array_push($a,$condi);

	$condi="v.Invoiceno";
	array_push($a,$condi);

	$condi="v.invoice_value";
	array_push($a,$condi);

	$condi="b.booking_modes";
	array_push($a,$condi);

	$condi="lt.location_type";
	array_push($a,$condi);

	$condi="v.oda_charges";
	array_push($a,$condi);

	$condi="v.Carrier";
	array_push($a,$condi);
	

	$condi="v.Carrierno";
	array_push($a,$condi);

	$condi="v.Origin";
	array_push($a,$condi);

	$condi="v.Destination";
	array_push($a,$condi);

	$condi="v.Departure";
	array_push($a,$condi);

	$condi="v.dispatch_date";
	array_push($a,$condi);

	$condi="v.Expected_del_Date";
	array_push($a,$condi);
	
	$condi="m.main_status";
	array_push($a,$condi);

	$condi="v.ExpectedDate";
	array_push($a,$condi);

	$condi="v.Comments";
	array_push($a,$condi);

$condi2=implode(",",$a);  

$SQL="SELECT ".$condi2."
FROM mst_shipment v 
left join type_of_shipments t
on t.fld_id=v.Shiptype
left join booking_modes b
on v.Bookingmode=b.fld_id
left join tbl_products p
on p.fld_id=v.Product
left join packing_type pt
on pt.fld_id=v.Packages
left join location_type lt
on lt.fld_id=v.type_of_location
left join master_status m
on m.fld_id=v.status
left join transport_modes tm
on tm.fld_id=v.Mode 
left join user_loging ul
on v.Shipperemail=ul.email_id
 where v.fldstatus='1'";
$header = '';
$result ='';
$exportData = mysql_query ($SQL ) or die ( "Sql error : " . mysql_error( ) );
 
$fields = mysql_num_fields ( $exportData );
 
$ab=array();

	$condi9="Company Name";
	array_push($ab,$condi9);
	
	$condi9="Shippername";
	array_push($ab,$condi9);
	
	$condi9="Shipper Phone";
	array_push($ab,$condi9);
	
	$condi9="Shipper Email";
	array_push($ab,$condi9);

	$condi9="Shipper Address";
	array_push($ab,$condi9);

	$condi9="Receiver Name";
	array_push($ab,$condi9);

	$condi9="Receiver Phone";
	array_push($ab,$condi9);

	$condi9="Receiver Email";
	array_push($ab,$condi9);

	$condi9="Receiver Address";
	array_push($ab,$condi9);

	$condi9="Consignment No";
	array_push($ab,$condi9);

	$condi9="Type Of Shipments";
	array_push($ab,$condi9);

	$condi9="Product Status";
	array_push($ab,$condi9);

	$condi9="Trans Mode";
	array_push($ab,$condi9);

	$condi9="Weight";
	array_push($ab,$condi9);

	$condi9="Valuematic Weight";
	array_push($ab,$condi9);

	$condi9="Chargeable Weight";
	array_push($ab,$condi9);

	$condi9="Packing Type";
	array_push($ab,$condi9);

	$condi9="Invoice No";
	array_push($ab,$condi9);

	$condi9="Invoice Value";
	array_push($ab,$condi9);

	$condi9="Booking Modes";
	array_push($ab,$condi9);

	$condi9="Location Type";
	array_push($ab,$condi9);

	$condi9="Oda Charges";
	array_push($ab,$condi9);

	$condi9="Carrier";
	array_push($ab,$condi9);

	$condi9="Carrier No";
	array_push($ab,$condi9);

	$condi9="Origin";
	array_push($ab,$condi9);

	$condi9="Destination Status";
	array_push($ab,$condi9);

	$condi9="Departure Status";
	array_push($ab,$condi9);

	$condi9="Dispatch Date";
	array_push($ab,$condi9);

	$condi9="Expected Del Date";
	array_push($ab,$condi9);
	
	$condi9="Main Status";
	array_push($ab,$condi9);

	$condi9="Expected Date";
	array_push($ab,$condi9);

	$condi9="Comments";
	array_push($ab,$condi9);
											

$header.=implode("\t",$ab);
 
/*for( $i = 0; $i < $fields; $i++ )
{
    $header .= mysql_field_name( $exportData , $i ) . "\t";
}*/
 
while( $row = mysql_fetch_row( $exportData ) )
{
    $line = '';
    foreach( $row as $value )
    {                                            
        if ( ( !isset( $value ) ) || ( $value == "" ) )
        {
            $value = "\t";
        }
        else
        {
            $value = str_replace( '"' , '""' , $value );
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
    }
    $result .= trim( $line ) . "\n";
}
$result = str_replace( "\r" , "" , $result );
 
if ( $result == "" )
{
    $result = "\nNo Record(s) Found!\n";                        
}
 $today = date("d/m/Y");
 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$today."_export_details.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$result";
 
?>