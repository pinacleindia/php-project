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
<?PHP $ship_id=$_GET['ship_id'];
if($ship_id!=''){
$res_one=mysql_query("select * from user_loging where fld_id='$ship_id'");	
$rs_setting_one=mysql_fetch_array($res_one);	
$Shippername=$rs_setting_one['Shippername'];
$CShippername=$rs_setting_one['CShippername'];
$Shipperphone=$rs_setting_one['Shipperphone'];
$Shippermobile=$rs_setting_one['Shippermobile'];
$Shipperemail=$rs_setting_one['Shipperemail'];
$Shipperaddress=$rs_setting_one['Shipperaddress'];
$Shipperaddress=$rs_setting_one['Shipperaddress'];
$password=$rs_setting_one['password'];
		}
?>
<script>
function validateForm() {
    var aa = document.forms["form_two"]["Shippername"].value;
	var bb = document.forms["form_two"]["Shipperaddress"].value;
	var cc = document.forms["form_two"]["CShippername"].value;

    if (aa == "") {
        alert("Name must be filled out");
		document.forms["form_two"]["Shippername"].focus() ;
        return false;
    }
	if (cc == "") {
        alert("Company Name must be filled out");
		document.forms["form_two"]["CShippername"].focus() ;
        return false;
    }
	if (bb == "") {
        alert("Address must be filled out");
		document.forms["form_two"]["Shipperaddress"].focus() ;
        return false;
    }
	
	
} 
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
          <td><h3 class="h3_head">Add Users</h3></td>
        </tr>
        <!--<tr>
      <td align="center" bgcolor="F9F5F5" class="Partext1">&nbsp;</td>
    </tr>-->
      </table>
      <form name="form_two" method="post" action="action_add_user.php" enctype="multipart/form-data" onsubmit="return validateForm()">
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
                <tr>
                  <td height="18" >&nbsp;</td>
                </tr>
                <tr>
                  <td><TABLE width="100%" align="center" cellpadding="2" cellspacing="2" class="Partext1">
                      <TR>
                        <TD colspan="3" ALIGN="right" class="TrackMediumBlue"><div align="right" class="gentxt">
                            <div align="left" class="headtext13"><strong>Users info : </strong></div>
                          </div></TD>
                      </TR>
                      <?PHP if($_GET['err']=="1"){?>
						<TR>
                        <TD width="132" ALIGN="right" class="TrackMediumBlue">&nbsp;</TD>
                        <TD>&nbsp;</TD>
                        <TD style="color:red;">Sorry, your name already registered.</TD>
                      </TR>  
						<tr><td colspan="3">&nbsp;</td></tr>
						 <?PHP }?>
                         <?PHP if($_GET['err']=="2"){?>
						<TR>
                        <TD width="132" ALIGN="right" class="TrackMediumBlue">&nbsp;</TD>
                        <TD>&nbsp;</TD>
                        <TD style="color:red;">Sorry, you Email id already registered.</TD>
                       
                      </TR>  
						<tr><td colspan="3">&nbsp;</td></tr>  
						 <?PHP }?>
                      <TR>
                        <TD width="132" ALIGN="right" class="TrackMediumBlue">Name   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Shippername" TYPE=TEXT id="Shippername" value="<?PHP echo $Shippername;?>" maxlength="100" SIZE=40>
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD width="132" ALIGN="right" class="TrackMediumBlue">Company Name   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="CShippername" TYPE=TEXT id="CShippername" value="<?PHP echo $CShippername;?>" maxlength="100" SIZE=40>
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Phone   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Shipperphone" TYPE=TEXT id="Shipperphone" value="<?PHP echo $Shipperphone;?>" maxlength="13" SIZE=40></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Mobile   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Shippermobile" TYPE=TEXT id="Shippermobile" value="<?PHP echo $Shippermobile;?>" maxlength="13" SIZE=40></TD>
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
                          <textarea name="Shipperaddress" cols="27" rows="2" id="Shipperaddress"><?PHP echo $Shipperaddress;?></textarea>
                          *</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">&nbsp;</TD>
                        <TD>&nbsp;</TD>
                        <TD>&nbsp;</TD>
                      </TR>
                      
                      <TR>
                        <TD ALIGN="right" valign="top" class="TrackNormalBlue">Status :</TD>
                        <TD>&nbsp;</TD>
                        <TD>
                        <input type="radio" name="fldstatus" id="fldstatus" value="1" checked>Active &nbsp;
                        <input type="radio" name="fldstatus" id="fldstatus" value="0" >Inactive &nbsp;
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
      </form></td>
  </tr>
  <?PHP include"includes/footer.php";?>
  <?php ob_end_flush(); ?>
</table>
</body>
</html>
