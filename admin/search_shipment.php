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
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<script type="text/javascript" src="jquery.magnifier.js">

/***********************************************
* jQuery Image Magnify- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Please keep this notice intact
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>
<?PHP $ship_id=$_GET['user_id'];
if($ship_id!=''){
$res_one=mysql_query("select * from user_loging where fld_id='$ship_id'");	
$rs_setting_one=mysql_fetch_array($res_one);	
$Shippername=$rs_setting_one['name'];
$CShippername=$rs_setting_one['comp_nm'];
$Shipperphone=$rs_setting_one['phone'];
$Shippermobile=$rs_setting_one['mobile'];
$Shipperemail=$rs_setting_one['email_id'];
$Shipperaddress=$rs_setting_one['address'];
$password=$rs_setting_one['password'];
		}
?>
<body>
<table width="780"  border="0" align="center" cellpadding="0" cellspacing="0">
  <?PHP include"includes/header.php";?>
  <tr>
    <td bgcolor="#FFFFFF">
	
     
      <table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
        <tr>
          <td id="ds_calclass"></td>
        </tr>
      </table>
     <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
        <tr>
          <td class="Partext1">&nbsp;</td>
        </tr>
        <tr>
    <td bgcolor="#FFFFFF">
      <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
        <tr>
          <td class="Partext1">&nbsp;</td>
        </tr>
        <tr>
          <td class="Partext1"><div align="center">
            <table width="80%" align="center" cellpadding="4"  cellspacing="0" >
               <?PHP if($_GET['err']=='1'){?>
				 <tr>
                  <td colspan="2" valign="top" class="TrackTitle" style="background-color:white !important;">
                    <h3 class="h3_head" style="color:red; background-color:white;">Enter Valid Consignment Number</h3>
                    </td>
                </tr>
				<?PHP }?>
              <form action="result_shipments.php" method="post" name="form1" id="form1" onsubmit="return validate()">
                <tr>
                  <td colspan="2" valign="top" class="TrackTitle"><!--<div align="center" class="newtext"><strong> <br />
                    <br />
                    Enter Consignment Number <br />
                    </span></strong></div>-->
                    <h3 class="h3_head">Enter Consignment Number</h3>
                    </td>
                </tr>
             
                <!--<tr>
                  <td colspan="2" valign="middle" class="bottom">&nbsp;</td>
                </tr>-->
                
                <tr bgcolor="EFEFEF">
                  <td height="34" colspan="2" valign="top" bgcolor="#FFFFFF" class="aalpha"><div align="center" class="gentxt"><strong>Key in the Shipment Number to MODIFY the data. This is helpful if you have made spelling errors while adding the shipment.</strong><br />
                    <br />
                    </div></td>
                </tr>
                <tr bgcolor="EFEFEF">
                  <!--      <td width="26%" valign="top" ><div align="right">Please Select </div></td>
                <td width="74%" valign="top" ><div align="left">
                  <select name="box" class="gentxt" id="box">
                    <option value="Consignment No">Consignment No</option>
                    <option value="Invoice No">Invoice No</option>
                  </select>
                </div></td> -->
                  </tr>
                <tr bgcolor="EFEFEF">
                  <td valign="top" ><div align="right">Enter Consignment number </div></td>
                  <td valign="top" ><div align="left">
                    <input name="track" type="text" class="gentxt" id="track"  maxlength="50" />
                    </div></td>
                </tr>
                <tr bgcolor="EFEFEF">
                  <td height="41" valign="top" >&nbsp;</td>
                  <td valign="top" ><div align="left">
                    <input name="submit" type="submit" class="gentxt" value="submit" />
                    </div></td>
                </tr>
                <tr bgcolor="EFEFEF">
                  <td colspan="2" valign="top" bgcolor="#FFFFFF" class="TrackNormalBlue">&nbsp;</td>
                </tr>
                </form>
            </table>
          </div></td>
        </tr>
        <tr>
          <td class="Partext1">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
      
      </td></tr>
  <?PHP include"includes/footer.php";?>
  <?php ob_end_flush(); ?>
</table>
</body>
</html>
