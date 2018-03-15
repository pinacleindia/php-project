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
     dateFormat:"yy-mm-dd"
  });
  });
  </script>
<script>
  $(function() {
    $("#datepicker2" ).datepicker({
     changeMonth:true,
     changeYear:true,
     yearRange:"-100:+0",
     dateFormat:"yy-mm-dd"
  });
  });
  </script>
  <script>
  $(function() {
    $("#datepicker3" ).datepicker({
     changeMonth:true,
     changeYear:true,
     yearRange:"-100:+0",
     dateFormat:"yy-mm-dd"
  });
  });
  </script>
  <script>
  $(function() {
    $("#datepicker4" ).datepicker({
     changeMonth:true,
     changeYear:true,
     yearRange:"-100:+0",
     dateFormat:"yy-mm-dd"
  });
  });
  </script>

<?PHP $ship_id=$_GET['ship_id'];
if($ship_id!=''){
$res_one=mysql_query("select * from mst_shipment where fld_id='$ship_id'");	
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
$Expected_del_Date=$rs_setting_one['Expected_del_Date'];
$invoice_value=$rs_setting_one['invoice_value'];
$oda_charges=$rs_setting_one['oda_charges'];
$Comments=$rs_setting_one['Comments'];
$Receipts=$rs_setting_one['Receipts'];
$fldstatus=$rs_setting_one['fldstatus'];
		}
?>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(function() {
    $( "#Shippername" ).autocomplete({
        source: "set1.php"
    });
});
</script>
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
          <td><h3 class="h3_head">Update Shipment</h3></td>
        </tr>
        <!--<tr>
      <td align="center" bgcolor="F9F5F5" class="Partext1">&nbsp;</td>
    </tr>-->
      </table>
      <form name="form_2" method="post" action="action_editshipment.php" enctype="multipart/form-data">
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
                      <TR>
                        <TD colspan="3" ALIGN="right" class="TrackMediumBlue"><div align="right" class="gentxt">
                            <div align="left" class="headtext13"><strong>Consiner : </strong></div>
                          </div></TD>
                      </TR>
                      <TR>
                        <TD width="132" ALIGN="right" class="TrackMediumBlue">Shipper Name   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Shippername" TYPE=TEXT id="Shippername" value="<?PHP echo $Shippername;?>" maxlength="100" SIZE=40>
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Phone   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Shipperphone" TYPE=TEXT id="Shipperphone" value="<?PHP echo $Shipperphone;?>" maxlength="13" SIZE=40></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Email   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Shipperemail" TYPE=TEXT id="Shipperemail" value="<?PHP echo $Shipperemail;?>" maxlength="50" SIZE=40></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Address   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><span class="REDLink">
                          <textarea name="Shipperaddress" cols="30" rows="2" id="Shipperaddress"><?PHP echo $Shipperaddress;?></textarea>
                          *</span></TD>
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
                        <TD><INPUT NAME="Receivername" TYPE=TEXT id="Receivername" value="<?PHP echo $Receivername;?>" maxlength="100" SIZE=40>
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Phone : </TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Receiverphone" TYPE=TEXT id="Receiverphone" value="<?PHP echo $Receiverphone;?>" maxlength="13" SIZE=40></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Email   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Receiveremail" TYPE=TEXT id="Receiveremail" value="<?PHP echo $Receiveremail;?>" maxlength="50" SIZE=40></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue"> Address: : </TD>
                        <TD>&nbsp;</TD>
                        <TD><span class="REDLink">
                          <textarea name="Receiveraddress" cols="30" rows="2" id="Receiveraddress"><?PHP echo $Receiveraddress;?></textarea>
                          *</span></TD>
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
                        <TD width="380"><INPUT NAME="ConsignmentNo" TYPE=TEXT id="ConsignmentNo" value="<?PHP echo $ConsignmentNo;?>"  maxlength="13" SIZE=40 >
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Type of Shipment  :</TD>
                        <TD>&nbsp;</TD>
                        <TD><SELECT id="Shiptype" name="Shiptype" style="width:53%;">
                            <OPTION value="">Select Type Of Shipment</OPTION>
                            <?PHP $one=mysql_query("select * from type_of_shipments where 1");
								while($rsone=mysql_fetch_array($one)){?>
                            <OPTION value="<?PHP echo $rsone['fld_id'];?>" <?PHP if($Shiptype==$rsone['fld_id']){?> selected<?PHP }?>><?PHP echo ucfirst($rsone['type_of_shipments']);?></OPTION>
                            <?PHP }?>
                          </SELECT></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Product  :</TD>
                        <TD>&nbsp;</TD>
                        <TD><select name="Product" id="Product"  style="width:53%;">
                            <OPTION value="">Select Product</OPTION>
                            <?PHP $three123=mysql_query("select * from tbl_products where 1");
								while($rsthree123=mysql_fetch_array($three123)){?>
                            <OPTION value="<?PHP echo $rsthree123['fld_id'];?>" <?PHP if($Product==$rsthree123['fld_id']){?> selected<?PHP }?>><?PHP echo ucfirst($rsthree123['product_stat']);?></OPTION>
                            <?PHP }?>
                          </select></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Mode : </TD>
                        <TD>&nbsp;</TD>
                        <TD><select name="Mode" id="Mode" style="width:53%;">
                            <OPTION value="">Select Transport Mode</OPTION>
                            <?PHP $three=mysql_query("select * from transport_modes where 1");
								while($rsthree=mysql_fetch_array($three)){?>
                            <OPTION value="<?PHP echo $rsthree['fld_id'];?>" <?PHP if($Mode==$rsthree['fld_id']){?> selected<?PHP }?>><?PHP echo ucfirst($rsthree['trans_mode']);?></OPTION>
                            <?PHP }?>
                          </select></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Actual Weight : </TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT id="Weight" value="<?PHP echo $Weight;?>" size="10" maxlength="10" name="Weight">
                          (kg)</TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Valuematic Weight : </TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT id="valuematic_weight" size="10" maxlength="10" name="valuematic_weight" value="<?PHP echo $valuematic_weight;?>">
                          (kg)</TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Chargeable Weight : </TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT id="chargeable_weight" size="10" maxlength="10" name="chargeable_weight" value="<?PHP echo $chargeable_weight;?>">
                          (kg)</TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">No of Pieces  :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Qnty" TYPE=TEXT id="Qnty"  value="<?PHP echo $Qnty;?>" maxlength="10" SIZE=20></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Packing Type :</TD>
                        <TD>&nbsp;</TD>
                        <TD><select name="Packages" id="Packages"  style="width:53%;">
                            <OPTION value="">Select Packing Type</OPTION>
                            <?PHP $three1234=mysql_query("select * from packing_type where 1");
								while($rsthree1234=mysql_fetch_array($three1234)){?>
                            <OPTION value="<?PHP echo $rsthree1234['fld_id'];?>" <?PHP if($Packages==$rsthree1234['fld_id']){?>
                         selected<?PHP }?>><?PHP echo ucfirst($rsthree1234['packing_type']);?></OPTION>
                            <?PHP }?>
                          </select></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Invoice no  :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Invoiceno" TYPE=TEXT id="Invoiceno" value="<?PHP echo $Invoiceno;?>" SIZE=40 maxlength="20" onKeyUp="check_phone('Invoiceno')"></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Invoice Value :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="invoice_value" TYPE=TEXT id="invoice_value"  style="cursor: text" value="<?PHP echo $invoice_value;?>"  maxlength="15" >
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Booking Mode :</TD>
                        <TD>&nbsp;</TD>
                        <TD><select name="Bookingmode" id="Bookingmode" style="width:53%;">
                            <OPTION value="">Select Booking Mode</OPTION>
                            <?PHP $two=mysql_query("select * from booking_modes where 1");
								while($rstwo=mysql_fetch_array($two)){?>
                            <OPTION value="<?PHP echo $rstwo['fld_id'];?>" <?PHP if($Bookingmode==$rstwo['fld_id']){?> selected<?PHP }?>><?PHP echo ucfirst($rstwo['booking_modes']);?></OPTION>
                            <?PHP }?>
                          </select></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Type of location :</TD>
                        <TD>&nbsp;</TD>
                        <TD><select name="type_of_location" id="type_of_location"  style="width:53%;">
                            <OPTION value="">Select Type of location</OPTION>
                            <?PHP $five=mysql_query("select * from location_type where 1");
								while($rsfive=mysql_fetch_array($five)){?>
                            <OPTION value="<?PHP echo $rsfive['fld_id'];?>" 
							<?PHP if($type_of_location==$rsfive['fld_id']){?> selected<?PHP }?>><?PHP echo ucfirst($rsfive['location_type']);?></OPTION>
                            <?PHP }?>
                          </select></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">ODA Charges :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="oda_charges" TYPE=TEXT id="oda_charges" style="cursor: text" value="<?PHP echo $oda_charges;?>"  maxlength="15" >
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue"><span class="TrackMediumBlue">Co-Carrier : </span></TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Carrier" TYPE=TEXT id="Carrier" value="<?PHP echo $Carrier;?>" maxlength="50" SIZE=40></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue"><span class="TrackMediumBlue">Co-Carrier-No : </span></TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Carrierno" TYPE=TEXT id="Carrierno" value="<?PHP echo $Carrierno;?>" maxlength="50" SIZE=40></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue">Origin : </TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Origin" TYPE=TEXT id="Origin" maxlength="50" value="<?PHP echo $Origin;?>" SIZE=40>
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR style="display:none;">
                        <TD ALIGN="right" class="TrackNormalBlue">Pincode : </TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="pincode" TYPE=TEXT id="pincode" maxlength="50" SIZE=40 value="<?PHP echo $pincode;?>">
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue">Destination :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Destination" TYPE=TEXT id="Destination" value="<?PHP echo $Destination;?>" maxlength="50" SIZE=40>
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR style="display:none;">
                        <TD ALIGN="right" class="TrackNormalBlue">Destination Pincode : </TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="destination_pincode" TYPE=TEXT id="destination_pincode" maxlength="50" SIZE=40 value="<?PHP echo $destination_pincode;?>">
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue">Pickup Date  :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Departure" type="text" value="<?PHP echo $Departure;?>" id="datepicker"  maxlength="15" >
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Dispatch Date :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="DispatchDate" TYPE=TEXT id="datepicker3" readonly style="cursor: text"  maxlength="15" value="<?PHP echo $DispatchDate;?>" >
                          <span class="REDLink">*</span></TD>
                      </TR>
                      
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Expected Dly Date :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Expected_del_Date" value="<?PHP echo $Expected_del_Date;?>" TYPE=TEXT id="datepicker2"  maxlength="15" >
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Status :</TD>
                        <TD>&nbsp;</TD>
                        <TD><select name="status" id="status" style="width:53%;">
                            <OPTION value="">Select Status</OPTION>
                            <?PHP $four=mysql_query("select * from master_status where 1");
								while($rsfour=mysql_fetch_array($four)){?>
                            <OPTION value="<?PHP echo $rsfour['fld_id'];?>" <?PHP if($status==$rsfour['fld_id']){?> selected<?PHP }?>><?PHP echo ucfirst($rsfour['main_status']);?></OPTION>
                            <?PHP }?>
                          </select></TD>
                      </TR>
                       <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Delivery  Date :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="ExpectedDate" value="<?PHP echo $ExpectedDate;?>" TYPE=TEXT id="datepicker4"  maxlength="15" >
                          <span class="REDLink">*</span></TD>
                      </TR>
                      
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Comments :</TD>
                        <TD>&nbsp;</TD>
                        <TD><textarea name="Comments" cols="30" rows="4" id="Comments"><?PHP echo $Comments;?></textarea></TD>
                      </TR>
                      <?PHP if($Receipts!=""){?>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Receipts :</TD>
                        <TD>&nbsp;</TD>
                        <TD><img src="receipts/<?PHP echo $Receipts;?>" class="magnify" data-magnifyby="2.5" style="width:200px;" /></TD>
                      </TR>
                      <?PHP }?>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Receipts :</TD>
                        <TD>&nbsp;</TD>
                        <TD><input type="file" name="prof_photo" class="md-input"></TD>
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
      </form></td>
  </tr>
 <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery.magnifier.js">

/***********************************************
* jQuery Image Magnify- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Please keep this notice intact
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>-->
  <?PHP include"includes/footer.php";?>
  <?php ob_end_flush(); ?>
</table>
</body>
</html>
