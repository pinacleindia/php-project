<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<?PHP include"all_scripts.php";?>
<link rel="stylesheet" href="cal/css/jquery-ui.css">
  <script src="cal/js/jquery-1.9.1.js"></script>
   <script src="cal/js/jquery-ui.js"></script>

 <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->

  <script>
  $(function() {
    $("#datepicker" ).datepicker({
     changeMonth:true,
     changeYear:true,
     yearRange:"-100:+0",
     dateFormat:"dd-mm-yy"
  });
  });
  </script>
  <?PHP 
$res_one=mysql_query("select * from mst_shipment where 1 ORDER BY fld_id DESC limit 0,1");	
$rs_setting_one=mysql_fetch_array($res_one);	
$Shippername_stat=$rs_setting_one['Shippername_stat'];
$Shipperphone_stat=$rs_setting_one['Shipperphone_stat'];
$Shipperemail_stat=$rs_setting_one['Shipperemail_stat'];
$Shipperaddress_stat=$rs_setting_one['Shipperaddress_stat'];
$Receivername_stat=$rs_setting_one['Receivername_stat'];
$Receiverphone_stat=$rs_setting_one['Receiverphone_stat'];
$Receiveremail_stat=$rs_setting_one['Receiveremail_stat'];
$Receiveraddress_stat=$rs_setting_one['Receiveraddress_stat'];
$ConsignmentNo_stat=$rs_setting_one['ConsignmentNo_stat'];
$Shiptype_stat=$rs_setting_one['Shiptype_stat'];
$Product_stat=$rs_setting_one['Product_stat'];
$Mode_stat=$rs_setting_one['Mode_stat'];
$Weight_stat=$rs_setting_one['Weight_stat'];
$valuematic_weight_stat=$rs_setting_one['valuematic_weight_stat'];
$chargeable_weight_stat=$rs_setting_one['chargeable_weight_stat'];
$Qnty_stat=$rs_setting_one['Qnty_stat'];
$Packages_stat=$rs_setting_one['Packages_stat'];
$Invoiceno_stat=$rs_setting_one['Invoiceno_stat'];
$invoice_value_stat=$rs_setting_one['invoice_value_stat'];
$Bookingmode_stat=$rs_setting_one['Bookingmode_stat'];
$type_of_location_stat=$rs_setting_one['type_of_location_stat'];
$oda_charges_stat=$rs_setting_one['oda_charges_stat'];
$Carrier_stat=$rs_setting_one['Carrier_stat'];
$Carrierno_stat=$rs_setting_one['Carrierno_stat'];
$Origin_stat=$rs_setting_one['Origin_stat'];
$pincode_stat=$rs_setting_one['pincode_stat'];
$Destination_stat=$rs_setting_one['Destination_stat'];
$Departure_stat=$rs_setting_one['Departure_stat'];
$DispatchDate_stat=$rs_setting_one['DispatchDate_stat'];
$status_stat=$rs_setting_one['status_stat'];
$Expected_del_Date_stat=$rs_setting_one['Expected_del_Date_stat'];
$ExpectedDate_stat=$rs_setting_one['ExpectedDate_stat'];
$Comments_stat=$rs_setting_one['Comments_stat'];
$Receipts_stat=$rs_setting_one['Receipts_stat'];

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
      <?PHP if($_GET['suc']=="1"){?>
      <table width="80%"  border="0" align="center">
        <!--<tr>
      <td align="center" bgcolor="F9F5F5" class="Partext1">&nbsp;</td>
    </tr>-->
        <tr>
          <td><h3 class="h3_head">Add Shipment Sucessfully</h3></td>
        </tr>
        <!--<tr>
      <td align="center" bgcolor="F9F5F5" class="Partext1">&nbsp;</td>
    </tr>-->
      </table>
      <?PHP }?>
      <?PHP if($_GET['suc']=="2"){?>
      <table width="80%"  border="0" align="center">
        <!--<tr>
      <td align="center" bgcolor="F9F5F5" class="Partext1">&nbsp;</td>
    </tr>-->
        <tr>
          <td><h3 class="h3_head">Update Shipment Sucessfully</h3></td>
        </tr>
        <!--<tr>
      <td align="center" bgcolor="F9F5F5" class="Partext1">&nbsp;</td>
    </tr>-->
      </table>
      <?PHP }?>
      <?PHP if($_GET['suc']=="3"){?>
      <table width="80%"  border="0" align="center">
        <!--<tr>
      <td align="center" bgcolor="F9F5F5" class="Partext1">&nbsp;</td>
    </tr>-->
        <tr>
          <td><h3 class="h3_head">Delete Shipment Sucessfully</h3></td>
        </tr>
        <!--<tr>
      <td align="center" bgcolor="F9F5F5" class="Partext1">&nbsp;</td>
    </tr>-->
      </table>
      <?PHP }?>
    <form  name="form_two" method="post" action="action_addshipment_status.php">
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
                      <TR>
                        <TD colspan="3" ALIGN="right" class="TrackMediumBlue"><div align="right" class="gentxt">
                            <div align="left" class="headtext13"><strong>Consiner : </strong></div>
                          </div></TD>
                      </TR>
                      <TR>
                        <TD width="132" ALIGN="right" class="TrackMediumBlue">Shipper Name   :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                         <input type="radio" name="Shippername_stat" value="1" <?PHP if($Shippername_stat=="1"){?> checked<?PHP }?>>Show
                        <input type="radio" name="Shippername_stat" value="0"  <?PHP if($Shippername_stat=="0"){?> checked<?PHP }?>>Hide
                          </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Phone   :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                        <input type="radio" name="Shipperphone_stat" value="1" <?PHP if($Shipperphone_stat=="1"){?> checked<?PHP }?>>Show
                        <input type="radio" name="Shipperphone_stat" value="0"  <?PHP if($Shipperphone_stat=="0"){?> checked<?PHP }?>>Hide
                          
                        </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Email   :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                         <input type="radio" name="Shipperemail_stat" value="1" <?PHP if($Shipperemail_stat=="1"){?> checked<?PHP }?>>Show
                        <input type="radio" name="Shipperemail_stat" value="0"  <?PHP if($Shipperemail_stat=="0"){?> checked<?PHP }?>>Hide
                        
                        </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Address   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><span class="REDLink">
                      <input type="radio" name="Shipperaddress_stat" value="1" <?PHP if($Shipperaddress_stat=="1"){?> checked<?PHP }?>>Show
                 <input type="radio" name="Shipperaddress_stat" value="0"  <?PHP if($Shipperaddress_stat=="0"){?> checked<?PHP }?>>Hide
                          
                         </TD>
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
                        <TD>
                        <input type="radio" name="Receivername_stat" value="1" <?PHP if($Receivername_stat=="1"){?> checked<?PHP }?>>Show
                        <input type="radio" name="Receivername_stat" value="0"  <?PHP if($Receivername_stat=="0"){?> checked<?PHP }?>>Hide
                          </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Phone : </TD>
                        <TD>&nbsp;</TD>
                        <TD>
                         <input type="radio" name="Receiverphone_stat" value="1" <?PHP if($Receiverphone_stat=="1"){?> checked<?PHP }?>>Show
                        <input type="radio" name="Receiverphone_stat" value="0"  <?PHP if($Receiverphone_stat=="0"){?> checked<?PHP }?>>Hide
                       </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Email   :</TD>
                        <TD>&nbsp;</TD>
                        <TD>  
                      <input type="radio" name="Receiveremail_stat" value="1" <?PHP if($Receiveremail_stat=="1"){?> checked<?PHP }?>>Show
                      <input type="radio" name="Receiveremail_stat" value="0"  <?PHP if($Receiveremail_stat=="0"){?> checked<?PHP }?>>Hide
                        </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue"> Address: : </TD>
                        <TD>&nbsp;</TD>
                        <TD><span class="REDLink">
                     <input type="radio" name="Receiveraddress_stat" value="1" <?PHP if($Receiveraddress_stat=="1"){?> checked<?PHP }?>>Show
                      <input type="radio" name="Receiveraddress_stat" value="0"  <?PHP if($Receiveraddress_stat=="0"){?> checked<?PHP }?>>Hide
                       </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">&nbsp;</TD>
                        <TD>&nbsp;</TD>
                        <TD>&nbsp;</TD>
                      </TR>
                      <TR>
                        <TD colspan="3" ALIGN="right" class="TrackMediumBlue"><div align="left" class="headtext13"><strong>Shipment   info : </strong></div></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Consignment No  : </TD>
                        <TD width="6">&nbsp;</TD>
                        <TD width="380">
                        <input type="radio" name="ConsignmentNo_stat" value="1" <?PHP if($ConsignmentNo_stat=="1"){?> checked<?PHP }?>>Show
                      <input type="radio" name="ConsignmentNo_stat" value="0"  <?PHP if($ConsignmentNo_stat=="0"){?> checked<?PHP }?>>Hide
                      </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Type of Shipment  :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                         <input type="radio" name="Shiptype_stat" value="1" <?PHP if($Shiptype_stat=="1"){?> checked<?PHP }?>>Show
                      <input type="radio" name="Shiptype_stat" value="0"  <?PHP if($Shiptype_stat=="0"){?> checked<?PHP }?>>Hide
                      </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Product  :</TD>
                        <TD>&nbsp;</TD>
                        <TD> 
                        <input type="radio" name="Product_stat" value="1" <?PHP if($Product_stat=="1"){?> checked<?PHP }?>>Show
                      <input type="radio" name="Product_stat" value="0"  <?PHP if($Product_stat=="0"){?> checked<?PHP }?>>Hide
                      </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Mode : </TD>
                        <TD>&nbsp;</TD>
                        <TD>
                        <input type="radio" name="Mode_stat" value="1" <?PHP if($Mode_stat=="1"){?> checked<?PHP }?>>Show
                      <input type="radio" name="Mode_stat" value="0"  <?PHP if($Mode_stat=="0"){?> checked<?PHP }?>>Hide
                      
                       </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Actual Weight : </TD>
                        <TD>&nbsp;</TD>
                        <TD>
                         <input type="radio" name="Weight_stat" value="1" <?PHP if($Weight_stat=="1"){?> checked<?PHP }?>>Show
                      <input type="radio" name="Weight_stat" value="0"  <?PHP if($Weight_stat=="0"){?> checked<?PHP }?>>Hide
                      </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Valuematic Weight : </TD>
                        <TD>&nbsp;</TD>
                        <TD>
                         <input type="radio" name="valuematic_weight_stat" value="1" <?PHP if($valuematic_weight_stat=="1"){?> checked<?PHP }?>>Show
                      <input type="radio" name="valuematic_weight_stat" value="0"  <?PHP if($valuematic_weight_stat=="0"){?> checked<?PHP }?>>Hide
                       </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Chargeable Weight : </TD>
                        <TD>&nbsp;</TD>
                        <TD>
                         <input type="radio" name="chargeable_weight_stat" value="1" <?PHP if($chargeable_weight_stat=="1"){?> checked<?PHP }?>>Show
                      <input type="radio" name="chargeable_weight_stat" value="0"  <?PHP if($chargeable_weight_stat=="0"){?> checked<?PHP }?>>Hide
                     </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">No of Pieces  :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                         <input type="radio" name="Qnty_stat" value="1" <?PHP if($Qnty_stat=="1"){?> checked<?PHP }?>>Show
                      <input type="radio" name="Qnty_stat" value="0"  <?PHP if($Qnty_stat=="0"){?> checked<?PHP }?>>Hide
                     </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Packing Type :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                          <input type="radio" name="Packages_stat" value="1" <?PHP if($Packages_stat=="1"){?> checked<?PHP }?>>Show
                      <input type="radio" name="Packages_stat" value="0"  <?PHP if($Packages_stat=="0"){?> checked<?PHP }?>>Hide
                      
                       </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Invoice no  :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                         <input type="radio" name="Invoiceno_stat" value="1" <?PHP if($Invoiceno_stat=="1"){?> checked<?PHP }?>>Show
                      <input type="radio" name="Invoiceno_stat" value="0"  <?PHP if($Invoiceno_stat=="0"){?> checked<?PHP }?>>Hide
                      </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Invoice Value :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                        <input type="radio" name="invoice_value_stat" value="1" <?PHP if($invoice_value_stat=="1"){?> checked<?PHP }?>>Show
                      <input type="radio" name="Iinvoice_value_stat" value="0"  <?PHP if($invoice_value_stat=="0"){?> checked<?PHP }?>>Hide
                      </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Booking Mode :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                          <input type="radio" name="Bookingmode_stat" value="1" <?PHP if($Bookingmode_stat=="1"){?> checked<?PHP }?>>Show
                      <input type="radio" name="Bookingmode_stat" value="0"  <?PHP if($Bookingmode_stat=="0"){?> checked<?PHP }?>>Hide
                     </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Type of location :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                        <input type="radio" name="type_of_location_stat" value="1" <?PHP if($type_of_location_stat=="1"){?> checked<?PHP }?>>Show
                      <input type="radio" name="type_of_location_stat" value="0"  <?PHP if($type_of_location_stat=="0"){?> checked<?PHP }?>>Hide
                    
                        </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">ODA Charges :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
            <input type="radio" name="oda_charges_stat" value="1" <?PHP if($oda_charges_stat=="1"){?> checked<?PHP }?>>Show
            <input type="radio" name="oda_charges_stat" value="0"  <?PHP if($oda_charges_stat=="0"){?> checked<?PHP }?>>Hide
                        </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue"><span class="TrackMediumBlue">Co-Carrier : </span></TD>
                        <TD>&nbsp;</TD>
                        <TD>
                        <input type="radio" name="Carrier_stat" value="1" <?PHP if($Carrier_stat=="1"){?> checked<?PHP }?>>Show
            <input type="radio" name="Carrier_stat" value="0"  <?PHP if($Carrier_stat=="0"){?> checked<?PHP }?>>Hide
                        
                        </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue"><span class="TrackMediumBlue">Co-Carrier-No : </span></TD>
                        <TD>&nbsp;</TD>
                        <TD>
                        <input type="radio" name="Carrierno_stat" value="1" <?PHP if($Carrierno_stat=="1"){?> checked<?PHP }?>>Show
            <input type="radio" name="Carrierno_stat" value="0"  <?PHP if($Carrierno_stat=="0"){?> checked<?PHP }?>>Hide
                       </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue">Origin : </TD>
                        <TD>&nbsp;</TD>
                        <TD>
                         <input type="radio" name="Origin_stat" value="1" <?PHP if($Origin_stat=="1"){?> checked<?PHP }?>>Show
            <input type="radio" name="Origin_stat" value="0"  <?PHP if($Origin_stat=="0"){?> checked<?PHP }?>>Hide
                       </TD>
                      </TR>
                       <TR style="display:none;">
                        <TD ALIGN="right" class="TrackNormalBlue">Pincode : </TD>
                        <TD>&nbsp;</TD>
                        <TD>
                        <input type="radio" name="pincode_stat" value="1" <?PHP if($pincode_stat=="1"){?> checked<?PHP }?>>Show
            <input type="radio" name="pincode_stat" value="0"  <?PHP if($pincode_stat=="0"){?> checked<?PHP }?>>Hide
                     </TD>
                      </TR>
                     
                     
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue">Destination :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                        <input type="radio" name="Destination_stat" value="1" <?PHP if($Destination_stat=="1"){?> checked<?PHP }?>>Show
            <input type="radio" name="Destination_stat" value="0"  <?PHP if($Destination_stat=="0"){?> checked<?PHP }?>>Hide
            
                       </TD>
                      </TR>
                      
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue">Pickup Date  :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                        <input type="radio" name="Departure_stat" value="1" <?PHP if($Departure_stat=="1"){?> checked<?PHP }?>>Show
            <input type="radio" name="Departure_stat" value="0"  <?PHP if($Departure_stat=="0"){?> checked<?PHP }?>>Hide
            
                       </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Dispatch Date :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                        <input type="radio" name="DispatchDate_stat" value="1" <?PHP if($DispatchDate_stat=="1"){?> checked<?PHP }?>>Show
            <input type="radio" name="DispatchDate_stat" value="0"  <?PHP if($DispatchDate_stat=="0"){?> checked<?PHP }?>>Hide
                        
                      </TD>
                      </TR>
                        <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Expected Delivery Date :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                         <input type="radio" name="Expected_del_Date_stat" value="1" <?PHP if($Expected_del_Date_stat=="1"){?> checked<?PHP }?>>Show
            <input type="radio" name="Expected_del_Date_stat" value="0"  <?PHP if($Expected_del_Date_stat=="0"){?> checked<?PHP }?>>Hide
            </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Status :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                        <input type="radio" name="status_stat" value="1" <?PHP if($status_stat=="1"){?> checked<?PHP }?>>Show
            <input type="radio" name="status_stat" value="0"  <?PHP if($status_stat=="0"){?> checked<?PHP }?>>Hide
            
                        </TD>
                      </TR>
                     
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Date Of Delivery :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                         <input type="radio" name="ExpectedDate_stat" value="1" <?PHP if($ExpectedDate_stat=="1"){?> checked<?PHP }?>>Show
            <input type="radio" name="ExpectedDate_stat" value="0"  <?PHP if($ExpectedDate_stat=="0"){?> checked<?PHP }?>>Hide
            </TD>
                      </TR>
                      
                      
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Comments :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                        <input type="radio" name="Comments_stat" value="1" <?PHP if($Comments_stat=="1"){?> checked<?PHP }?>>Show
            <input type="radio" name="Comments_stat" value="0"  <?PHP if($Comments_stat=="0"){?> checked<?PHP }?>>Hide
                        </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Receipts :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                        <input type="radio" name="Receipts_stat" value="1" <?PHP if($Receipts_stat=="1"){?> checked<?PHP }?>>Show
            <input type="radio" name="Receipts_stat" value="0"  <?PHP if($Receipts_stat=="0"){?> checked<?PHP }?>>Hide
                        </TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right">&nbsp;</TD>
                        <TD>&nbsp;</TD>
                        <TD><input type="submit" name="submit" value="submit"></TD>
                      </TR>
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
      </form>
    
      </td>
  </tr>
  <?PHP include"includes/footer.php";?>
  <?php ob_end_flush(); ?>
</table>
</body>
</html>
