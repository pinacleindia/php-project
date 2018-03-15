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
<script>
function validateForm() {
    var aa = document.forms["form_two"]["Shippername"].value;
	var bb = document.forms["form_two"]["Shipperaddress"].value;
	var cc = document.forms["form_two"]["Receivername"].value;
	var dd = document.forms["form_two"]["Receiveraddress"].value;
	var ee = document.forms["form_two"]["ConsignmentNo"].value;
	var ff = document.forms["form_two"]["oda_charges"].value;
	var gg = document.forms["form_two"]["Origin"].value;
	var hh = document.forms["form_two"]["invoice_value"].value;
	var ii = document.forms["form_two"]["Destination"].value;
	var jj = document.forms["form_two"]["destination_pincode"].value;
	var kk = document.forms["form_two"]["datepicker"].value;
	var ll = document.forms["form_two"]["datepicker3"].value;
	var mm = document.forms["form_two"]["datepicker2"].value;
	
    if (aa == "") {
        alert("Shipper Name must be filled out");
		document.forms["form_two"]["Shippername"].focus() ;
        return false;
    }
	if (bb == "") {
        alert("Shipper Address must be filled out");
		document.forms["form_two"]["Shipperaddress"].focus() ;
        return false;
    }
	if (cc == "") {
        alert("Receiver Name must be filled out");
		document.forms["form_two"]["Receivername"].focus() ;
        return false;
    }
	if (dd == "") {
        alert("Receiver Address must be filled out");
		document.forms["form_two"]["Receiveraddress"].focus() ;
        return false;
    }
	if (ee == "") {
        alert("Consignment No must be filled out");
		document.forms["form_two"]["ConsignmentNo"].focus() ;
        return false;
    }
	if (hh == "") {
        alert("Invoice Value must be filled out");
		document.forms["form_two"]["invoice_value"].focus() ;
        return false;
    }
	if(ff == "") {
        alert("Oda Charges must be filled out");
		document.forms["form_two"]["oda_charges"].focus() ;
        return false;
    }
	if(gg == "") {
        alert("Origin must be filled out");
		document.forms["form_two"]["Origin"].focus() ;
        return false;
    }
	if(ii == "") {
        alert("Destination must be filled out");
		document.forms["form_two"]["Destination"].focus() ;
        return false;
    }
	
	if(kk == "") {
        alert("Pickup Date must be filled out");
		document.forms["form_two"]["datepicker"].focus() ;
        return false;
    }
	if(ll == "") {
        alert("Dispatch Date must be filled out");
		document.forms["form_two"]["datepicker3"].focus() ;
        return false;
    }
	if(mm == "") {
        alert("Expected Dly Date must be filled out");
		document.forms["form_two"]["datepicker2"].focus() ;
        return false;
    }
	
} 
</script>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<body>
<table width="780"  border="0" align="center" cellpadding="0" cellspacing="0">
  <?PHP include"includes/header.php";?>
  <tr>
    <td bgcolor="#FFFFFF">
	<style type="text/css">

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
      <script  type="text/javascript">
 var frmvalidator = new Validator("form_two");
 frmvalidator.addValidation("FirstName","req","Please enter your First Name");
 frmvalidator.addValidation("FirstName","maxlen=20",
        "Max length for FirstName is 20");
 
 frmvalidator.addValidation("LastName","req");
 frmvalidator.addValidation("LastName","maxlen=20");
 
 frmvalidator.addValidation("Email","maxlen=50");
 frmvalidator.addValidation("Email","req");
 frmvalidator.addValidation("Email","email");
 
 frmvalidator.addValidation("Phone","maxlen=50");
 frmvalidator.addValidation("Phone","numeric");
 
 frmvalidator.addValidation("Address","maxlen=50");
 frmvalidator.addValidation("Country","dontselect=000");
</script>
      <body>
      <table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
        <tr>
          <td id="ds_calclass"></td>
        </tr>
      </table>
      <table width="80%"  border="0" align="center">
        <tr>
          <td><h3 class="h3_head">Add Shipment</h3></td>
        </tr>
        <!--<tr>
      <td align="center" bgcolor="F9F5F5" class="Partext1">&nbsp;</td>
    </tr>-->
      </table>
      <form  name="form_two" id="form_two" method="post" action="action_addshipment.php" onsubmit="return validateForm()">
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
                  <tr><td width="132" ALIGN="right" class="TrackMediumBlue">Company Name: &nbsp;&nbsp;&nbsp;&nbsp;
                 		<TD>&nbsp;</TD>
                        <TD><select name="users" id="users" onchange="showUser(this.value)" style="width:52%;">
                              <option value="">Select a Company:</option>
                              <?PHP $res_one=mysql_query("select * from user_loging where 1");
                                    while($raw_set_mngf=mysql_fetch_array($res_one)){?>
                              <option value="<?PHP echo $raw_set_mngf['fld_id'];?>"><?PHP echo ucfirst($raw_set_mngf['comp_nm']);?></option>
                              
                              <?PHP }?>
                              </select></td></tr>
                   <tr  ><td colspan="3">
                        <table width="100%" id="txtHint">
                      <TR>
                        <TD colspan="3" ALIGN="right" class="TrackMediumBlue"><div align="right" class="gentxt">
                            <div align="left" class="headtext13"><strong>Consiner : </strong></div>
                          </div></TD>
                      </TR>
                      <TR>
                        <TD width="26%" ALIGN="right" class="TrackMediumBlue">Shipper Name   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Shippername" TYPE=TEXT id="Shippername" maxlength="100" SIZE=40>
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Phone   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Shipperphone" TYPE=TEXT id="Shipperphone" maxlength="13" SIZE=40></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Email   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Shipperemail" TYPE=TEXT id="Shipperemail" maxlength="50" SIZE=40></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Address   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><span class="REDLink">
                          <textarea name="Shipperaddress" cols="30" rows="2" id="Shipperaddress"></textarea>
                          *</span></TD>
                      </TR>
                      </table>
                          
                          </td></tr>     
                   
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
                        <TD><INPUT NAME="Receivername" TYPE=TEXT id="Receivername" maxlength="100" SIZE=40>
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Phone : </TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Receiverphone" TYPE=TEXT id="Receiverphone" maxlength="13" SIZE=40></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Email   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Receiveremail" TYPE=TEXT id="Receiveremail" maxlength="50" SIZE=40></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue"> Address: : </TD>
                        <TD>&nbsp;</TD>
                        <TD><span class="REDLink">
                          <textarea name="Receiveraddress" cols="30" rows="2" id="Receiveraddress"></textarea>
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
                        <TD width="380"><INPUT NAME="ConsignmentNo" TYPE=TEXT id="ConsignmentNo" maxlength="13" SIZE=40 >
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Type of Shipment  :</TD>
                        <TD>&nbsp;</TD>
                        <TD><SELECT id="Shiptype" name="Shiptype" style="width:53%;">
                            <OPTION value="">Select Type Of Shipment</OPTION>
                            <?PHP $one=mysql_query("select * from type_of_shipments where 1");
								while($rsone=mysql_fetch_array($one)){?>
                            <OPTION value="<?PHP echo $rsone['fld_id'];?>"><?PHP echo ucfirst($rsone['type_of_shipments']);?></OPTION>
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
                            <OPTION value="<?PHP echo $rsthree123['fld_id'];?>"><?PHP echo ucfirst($rsthree123['product_stat']);?></OPTION>
                            <?PHP }?>
                          </select></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Mode : </TD>
                        <TD>&nbsp;</TD>
                        <TD><select name="Mode" id="Mode"  style="width:53%;">
                            <OPTION value="">Select Transport Mode</OPTION>
                            <?PHP $three=mysql_query("select * from transport_modes where 1");
								while($rsthree=mysql_fetch_array($three)){?>
                            <OPTION value="<?PHP echo $rsthree['fld_id'];?>"><?PHP echo ucfirst($rsthree['trans_mode']);?></OPTION>
                            <?PHP }?>
                          </select></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Actual Weight : </TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT id="Weight" size="10" maxlength="10" name="Weight">
                          (kg)</TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Valuematic Weight : </TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT id="valuematic_weight" size="10" maxlength="10" name="valuematic_weight">
                          (kg)</TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Chargeable Weight : </TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT id="chargeable_weight" size="10" maxlength="10" name="chargeable_weight">
                          (kg)</TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">No of Pieces  :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Qnty" TYPE=TEXT id="Qnty" maxlength="10" SIZE=20></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Packing Type :</TD>
                        <TD>&nbsp;</TD>
                        <TD><select name="Packages" id="Packages"  style="width:53%;">
                            <OPTION value="">Select Packing Type</OPTION>
                            <?PHP $three1234=mysql_query("select * from packing_type where 1");
								while($rsthree1234=mysql_fetch_array($three1234)){?>
                            <OPTION value="<?PHP echo $rsthree1234['fld_id'];?>"><?PHP echo ucfirst($rsthree1234['packing_type']);?></OPTION>
                            <?PHP }?>
                          </select></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Invoice no  :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Invoiceno" TYPE=TEXT id="Invoiceno" SIZE=40 maxlength="20" onKeyUp="check_phone('Invoiceno')"></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Invoice Value :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="invoice_value" TYPE=TEXT id="invoice_value"  style="cursor: text"  maxlength="15" >
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Booking Mode :</TD>
                        <TD>&nbsp;</TD>
                        <TD><select name="Bookingmode" id="Bookingmode"  style="width:53%;">
                            <OPTION value="">Select Booking Mode</OPTION>
                            <?PHP $two=mysql_query("select * from booking_modes where 1");
								while($rstwo=mysql_fetch_array($two)){?>
                            <OPTION value="<?PHP echo $rstwo['fld_id'];?>"><?PHP echo ucfirst($rstwo['booking_modes']);?></OPTION>
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
                            <OPTION value="<?PHP echo $rsfive['fld_id'];?>"><?PHP echo ucfirst($rsfive['location_type']);?></OPTION>
                            <?PHP }?>
                          </select></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">ODA Charges :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="oda_charges" TYPE=TEXT id="oda_charges"  style="cursor: text"  maxlength="15" >
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue"><span class="TrackMediumBlue">Co-Carrier : </span></TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Carrier" TYPE=TEXT id="Carrier" maxlength="50" SIZE=40></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue"><span class="TrackMediumBlue">Co-Carrier-No : </span></TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Carrierno" TYPE=TEXT id="Carrierno" maxlength="50" SIZE=40></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue">Origin : </TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Origin" TYPE=TEXT id="Origin" maxlength="50" SIZE=40>
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR style="display:none;">
                        <TD ALIGN="right" class="TrackNormalBlue">Pincode : </TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="pincode" TYPE=TEXT id="pincode" maxlength="50" SIZE=40>
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue">Destination :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Destination" TYPE=TEXT id="Destination" maxlength="50" SIZE=40>
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR style="display:none;">
                        <TD ALIGN="right" class="TrackNormalBlue">Destination Pincode : </TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="destination_pincode" TYPE=TEXT id="destination_pincode" maxlength="50" SIZE=40>
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackNormalBlue">Pickup Date  :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Departure" TYPE=TEXT id="datepicker" readonly style="cursor: text" onClick="ds_sh(this);" maxlength="15" >
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Dispatch Date :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="DispatchDate" TYPE=TEXT id="datepicker3" readonly style="cursor: text"  maxlength="15" >
                          <span class="REDLink">*</span></TD>
                      </TR>
                       <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Expected Dly Date :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Expected_del_Date" TYPE=TEXT id="datepicker2" readonly style="cursor: text"  maxlength="15" >
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Status :</TD>
                        <TD>&nbsp;</TD>
                        <TD><select name="status" id="status"  style="width:53%;">
                            <OPTION value="">Select Status</OPTION>
                            <?PHP $four=mysql_query("select * from master_status where 1");
								while($rsfour=mysql_fetch_array($four)){?>
                            <OPTION value="<?PHP echo $rsfour['fld_id'];?>"><?PHP echo ucfirst($rsfour['main_status']);?></OPTION>
                            <?PHP }?>
                          </select></TD>
                      </TR>
                       <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Delivery  Date :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="ExpectedDate" TYPE=TEXT id="datepicker4" readonly style="cursor: text"  maxlength="15" >
                          <span class="REDLink">*</span></TD>
                      </TR>
                     
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Comments :</TD>
                        <TD>&nbsp;</TD>
                        <TD><textarea name="Comments" cols="30" rows="4" id="Comments"></textarea></TD>
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
  <?PHP include"includes/footer.php";?>
  <?php ob_end_flush(); ?>
</table>
</body>
</html>
