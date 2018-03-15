<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<?PHP include"all_scripts.php";?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery.magnifier.js">

/***********************************************
* jQuery Image Magnify- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Please keep this notice intact
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>
<?PHP 
if($_POST['track']){
$track=$_POST['track'];
$res_one=mysql_query("select * from mst_shipment where ConsignmentNo='$track'");

if(mysql_num_rows($res_one)>0){	
$rs_setting_one=mysql_fetch_array($res_one);	

$Shippername=$rs_setting_one['Shippername'];
$Shipperphone=$rs_setting_one['Shipperphone'];
$Shipperemail=$rs_setting_one['Shipperemail'];
$Shipperaddress=$rs_setting_one['Shipperaddress'];
$Receivername=$rs_setting_one['Receivername'];
$Receiverphone=$rs_setting_one['Receiverphone'];
$Receiveremail=$rs_setting_one['Receiveremail'];
$Receiveraddress=$rs_setting_one['Receiveraddress'];
$ConsignmentNo=$rs_setting_one['ConsignmentNo'];
$Shiptype=$rs_setting_one['Shiptype'];
$Weight=$rs_setting_one['Weight'];
$valuematic_weight=$rs_setting_one['valuematic_weight'];
$chargeable_weight=$rs_setting_one['chargeable_weight'];
$Courier=$rs_setting_one['Courier'];
$Packages=$rs_setting_one['Packages'];
$Invoiceno=$rs_setting_one['Invoiceno'];
$Product=$rs_setting_one['Product'];
$Qnty=$rs_setting_one['Qnty'];
$Bookingmode=$rs_setting_one['Bookingmode'];
$type_of_location=$rs_setting_one['type_of_location'];
$Mode=$rs_setting_one['Mode'];
$Carrier=$rs_setting_one['Carrier'];
$Carrierno=$rs_setting_one['Carrierno'];
$Depttime=$rs_setting_one['Depttime'];
$Origin=$rs_setting_one['Origin'];
$pincode=$rs_setting_one['pincode'];
$Destination=$rs_setting_one['Destination'];
$destination_pincode=$rs_setting_one['destination_pincode'];
$Departure=$rs_setting_one['Departure'];
$timeHours=$rs_setting_one['timeHours'];
$timeMins=$rs_setting_one['timeMins'];
$status=$rs_setting_one['status'];
$DispatchDate=$rs_setting_one['dispatch_date'];
$ExpectedDate=$rs_setting_one['ExpectedDate'];
$Expected_del_Date=$rs_setting_one["Expected_del_Date"];
$invoice_value=$rs_setting_one['invoice_value'];
$oda_charges=$rs_setting_one['oda_charges'];
$Comments=$rs_setting_one['Comments'];
$Receipts=$rs_setting_one['Receipts'];
$nww=$rs_setting_one['Shipperemail'];
			$set_nmmm2=mysql_query("select * from user_loging where email_id='$nww'");
			$set_total2=mysql_fetch_assoc($set_nmmm2);
}else{
	echo "<script>window.location='search_shipment.php?err=1'</script>";
	exit();
	}
		}
?>
<body>
<table width="780"  border="0" align="center" cellpadding="0" cellspacing="0">
  <?PHP include"includes/header.php";?>
  <tr>
    <td bgcolor="#FFFFFF"><style type="text/css">

.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}

.ds_tbl {
	background-color: #FFF;
}

.ds_head {
	background-color: #333;
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	text-align: center;
	letter-spacing: 2px;
}

.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}

.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	padding: 5px;
	cursor: pointer;
}

.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */

</style>
      <link href="css/style.css" rel="stylesheet" type="text/css">
      <link type="text/css" rel="stylesheet" href="style.css">
      <style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
      
      <body>
      <table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
        <tr>
          <td id="ds_calclass"></td>
        </tr>
      </table>
      <table width="80%"  border="0" align="center">
        <!--<tr>
      <td align="center" bgcolor="F9F5F5" class="Partext1">&nbsp;</td>
    </tr>-->
        <tr>
          <td><h3 class="h3_head">View Shipment</h3></td>
        </tr>
        <!--<tr>
      <td align="center" bgcolor="F9F5F5" class="Partext1">&nbsp;</td>
    </tr>-->
      </table>
      <form name="form_2" method="post" action="action_editshipment.php">
        <input type="hidden" name="ship_id" id="ship_id" value="<?PHP echo $ship_id;?>"/>
        <table width="75%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="18"><img src="images/boxtopleftcorner.gif" alt="" width="18" height="13" /></td>
            <td width="734"  background="images/boxtopBG.gif"></td>
            <td width="18"><img src="images/boxtoprightcorner.gif" alt="" width="18" height="13" /></td>
          </tr>
          <tr>
            <td background="images/boxleftBG.gif"></td>
            <td><table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="4" colspan="2"></td>
                </tr>
                <tr >
                  <td height="18" >&nbsp;</td>
                </tr>
                <tr>
                  <td><TABLE width="100%" align="center" cellpadding="2" cellspacing="2" class="Partext1">
                  <?PHP 
					  $comp_nm=$set_total2['comp_nm'];
					  if($comp_nm!=""){
                      ?>
                      <TR>
                        <TD colspan="3" ALIGN="right" class="TrackMediumBlue"><div align="right" class="gentxt">
                            <div align="left" class="headtext13"><strong>Company Name - <?PHP echo $comp_nm;?></strong></div></div></TD>
                       
                      </TR><tr><td colspan="3">&nbsp;</td></tr>
                       <?PHP } ?>
                      <TR>
                        <TD colspan="3" ALIGN="right" class="TrackMediumBlue"><div align="right" class="gentxt">
                            <div align="left" class="headtext13"><strong>Consiner : </strong></div>
                          </div></TD>
                      </TR>
                      <TR>
                        <TD width="132" ALIGN="right" class="TrackMediumBlue">Shipper Name   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $Shippername;?> <span class="REDLink"></span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Phone   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $Shipperphone;?></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Email   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $Shipperemail;?></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Address   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><span class="REDLink"> <?PHP echo $Shipperaddress;?> </span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">&nbsp;</TD>
                        <TD>&nbsp;</TD>
                        <TD>&nbsp;</TD>
                      </TR>
                      <TR>
                        <TD colspan="3" ALIGN="right" class="TrackMediumBlue"><div align="left" class="headtext13"><strong>Consignee : </strong></div></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Receiver Name : </TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $Receivername;?> <span class="REDLink"></span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Phone : </TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $Receiverphone;?></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Email   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $Receiveremail;?></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue"> Address: : </TD>
                        <TD>&nbsp;</TD>
                        <TD><span class="REDLink"> <?PHP echo $Receiveraddress;?> </span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">&nbsp;</TD>
                        <TD>&nbsp;</TD>
                        <TD>&nbsp;</TD>
                      </TR>
                      <TR>
                        <TD colspan="3" ALIGN="right" class="TrackMediumBlue"><div align="left" class="headtext13"><strong>Shipment  info : </strong></div></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Consignment No  : </TD>
                        <TD width="6">&nbsp;</TD>
                        <TD width="380"><?PHP echo $ConsignmentNo;?> <span class="REDLink"></span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Type of Shipment  :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP $one=mysql_query("select * from type_of_shipments where fld_id='$Shiptype'");
								while($rsone=mysql_fetch_array($one)){?>
                          <?PHP echo ucfirst($rsone['type_of_shipments']);?>
                          <?PHP }?></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Product  :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $Product;?>
                          <?PHP $three123=mysql_query("select * from tbl_products where fld_id=$Product");
								while($rsthree123=mysql_fetch_array($three123)){?>
                          <?PHP echo ucfirst($rsthree123['product_stat']);?>
                          <?PHP }?></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Mode : </TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP $three=mysql_query("select * from transport_modes where fld_id='$Mode'");
								while($rsthree=mysql_fetch_array($three)){?>
                          <?PHP echo ucfirst($rsthree['trans_mode']);?>
                          <?PHP }?></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Actual Weight : </TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $Weight;?> (kg)</TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Valuematic Weight : </TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $valuematic_weight;?> (kg)</TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Chargeable Weight : </TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $chargeable_weight;?> (kg)</TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">No of Pieces  :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $Qnty;?></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Packing Type :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP $three1234=mysql_query("select * from packing_type where fld_id=$Packages");
								while($rsthree1234=mysql_fetch_array($three1234)){
									echo ucfirst($rsthree1234['packing_type']);?>
                          <?PHP }?>
                          </select>
                          <?PHP echo $Packages;?></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Invoice no  :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $Invoiceno;?></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Invoice Value :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $invoice_value;?> <span class="REDLink"></span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Booking Mode :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP $two=mysql_query("select * from booking_modes where fld_id='$Bookingmode'");
								while($rstwo=mysql_fetch_array($two)){?>
                          <?PHP echo ucfirst($rstwo['booking_modes']);?>
                          <?PHP }?></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Type of location :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP $five=mysql_query("select * from location_type where 1");
								while($rsfive=mysql_fetch_array($five)){?>
                          <?PHP echo ucfirst($rsfive['location_type']);?>
                          <?PHP }?>
                          </select></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">ODA Charges :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $oda_charges;?> <span class="REDLink"></span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue"><span class="TrackMediumBlue">Co-Carrier : </span></TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $Carrier;?></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue"><span class="TrackMediumBlue">Co-Carrier-No : </span></TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $Carrierno;?></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue">Origin : </TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $Origin;?> <span class="REDLink"></span></TD>
                      </TR>
                      <TR style="display:none;">
                        <TD ALIGN="right" class="TrackNormalBlue">Pincode : </TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $pincode;?> <span class="REDLink"></span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue">Destination :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $Destination;?> <span class="REDLink"></span></TD>
                      </TR>
                      <TR style="display:none;">
                        <TD ALIGN="right" class="TrackNormalBlue">Destination Pincode : </TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $destination_pincode;?> <span class="REDLink"></span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue">Pickup Date  :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $Departure;?> <span class="REDLink"></span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Dispatch Date :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $DispatchDate;?> <span class="REDLink"></span></TD>
                      </TR>
                       <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Expected Dly Date :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $Expected_del_Date;?> <span class="REDLink"></span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Status :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP $four=mysql_query("select * from master_status where fld_id='$status'");
								while($rsfour=mysql_fetch_array($four)){?>
                          <?PHP echo ucfirst($rsfour['main_status']);?>
                          <?PHP }?></TD>
                      </TR>
                        <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Delivery Date :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $ExpectedDate;?> <span class="REDLink"></span></TD>
                      </TR>
                     
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Comments :</TD>
                        <TD>&nbsp;</TD>
                        <TD><?PHP echo $Comments;?></TD>
                      </TR>
                      <?PHP if($Receipts!=""){?>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Receipts :</TD>
                        <TD>&nbsp;</TD>
                        <TD><img src="receipts/<?PHP echo $Receipts;?>" class="magnify" data-magnifyby="2.5" style="width:200px;" /></TD>
                      </TR>
                      <?PHP }?>
                    </TABLE></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
            <td background="images/boxrightBG.gif"></td>
          </tr>
          <tr>
            <td width="18"><img src="images/boxbtmleftcorner.gif" alt="" width="18" height="12" /></td>
            <td width="734"  background="images/boxbtmBG.gif"></td>
            <td width="18"><img src="images/boxbtmrightcorner.gif" alt="" width="18" height="12" /></td>
          </tr>
        </table>
        <br>
      </form></td>
  </tr>
  <?PHP include"includes/footer.php";?>
  <?php ob_end_flush(); ?>
</table>
</body>
</html>
