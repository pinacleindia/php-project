<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<?PHP include"all_scripts.php";?>

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
</style><body> 

<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;"> 
  <tr> 
    <td id="ds_calclass"> </td> 
  </tr> 
</table> 
  <table width="80%"  border="0" align="center">
    <!--<tr>
      <td align="center" bgcolor="F9F5F5" class="Partext1">&nbsp;</td>
    </tr>-->
    <tr>
      <td>
      <h3 class="h3_head">Dashboard</h3>      
      </td>
    </tr>
    <!--<tr>
      <td align="center" bgcolor="F9F5F5" class="Partext1">&nbsp;</td>
    </tr>-->
  </table>
  <!--<table width="75%" border="0" align="center" cellpadding="0" cellspacing="0">
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
              <textarea name="Shipperaddress" cols="27" rows="2" id="Shipperaddress"></textarea>
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
              <textarea name="Receiveraddress" cols="27" rows="2" id="Receiveraddress"></textarea>
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
                <span class="REDLink">*</span> </TD>
          </TR>
          <TR>
            <TD ALIGN="right" class="TrackMediumBlue">Type of Shipment  :</TD>
            <TD>&nbsp;</TD>
            <TD><SELECT id="Shiptype" name="Shiptype">
                <OPTION value="Documents" selected>Documents</OPTION>
                <OPTION value="Parcel">Parcel</OPTION>
                <OPTION value="Sentiments">Sentiments</OPTION>
            </SELECT></TD>
          </TR>
          <TR>
            <TD ALIGN="right" class="TrackMediumBlue">Weight : </TD>
            <TD>&nbsp;</TD>
            <TD><INPUT id="Weight" size="10" maxlength="10" name="Weight">
              (kg)</TD>
          </TR>
          <TR>
            <TD ALIGN="right" class="TrackMediumBlue">Courier :</TD>
            <TD>&nbsp;</TD>
            <TD><INPUT NAME="Courier" TYPE=TEXT id="Courier" maxlength="50" SIZE=40></TD>
          </TR>
          <TR>
            <TD ALIGN="right" class="TrackMediumBlue">Packages :</TD>
            <TD>&nbsp;</TD>
            <TD><INPUT NAME="Packages" TYPE=TEXT id="Packages" maxlength="10" SIZE=40></TD>
          </TR>
          <TR>
            <TD ALIGN="right" class="TrackMediumBlue">Invoice no  :</TD>
            <TD>&nbsp;</TD>
            <TD><INPUT NAME="Invoiceno" TYPE=TEXT id="Invoiceno" SIZE=40 maxlength="20" onKeyUp="check_phone('Invoiceno')"></TD>
          </TR>
          <TR>
            <TD ALIGN="right" class="TrackMediumBlue">Product  :</TD>
            <TD>&nbsp;</TD>
            <TD><INPUT NAME="Product" TYPE=TEXT id="Product" SIZE=40></TD>
          </TR>
          <TR>
            <TD ALIGN="right" class="TrackMediumBlue">Qnty  :</TD>
            <TD>&nbsp;</TD>
            <TD><INPUT NAME="Qnty" TYPE=TEXT id="Qnty" maxlength="10" SIZE=20></TD>
          </TR>
          <TR>
            <TD ALIGN="right" class="TrackMediumBlue">Booking Mode :</TD>
            <TD>&nbsp;</TD>
            <TD><select name="Bookingmode" id="Bookingmode">
                <option value="Paid">Paid</option>
                <option value="ToPay">ToPay</option>
                <option value="TBB">TBB</option>
            </select></TD>
          </TR>
          <TR>
            <TD ALIGN="right" class="TrackMediumBlue">Total freight : </TD>
            <TD>&nbsp;</TD>
            <TD><INPUT id="Totalfreight" size="10" maxlength="13" name="Totalfreight"></TD>
          </TR>
          <TR>
            <TD ALIGN="right" class="TrackMediumBlue">Mode : </TD>
            <TD>&nbsp;</TD>
            <TD><select name="Mode" id="Mode">
                <option value="Air">Air</option>
                <option value="Road">Road</option>
                <option value="Train">Train</option>
				<option value="Sea">Sea</option>
            </select></TD>
          </TR>
          <TR>
            <TD ALIGN="right" class="TrackNormalBlue"><span class="TrackMediumBlue">Carrier : </span></TD>
            <TD>&nbsp;</TD>
            <TD><INPUT NAME="Carrier" TYPE=TEXT id="Carrier" maxlength="50" SIZE=40></TD>
          </TR>
          <TR>
            <TD ALIGN="right" class="TrackNormalBlue"><span class="TrackMediumBlue">Carrier No : </span></TD>
            <TD>&nbsp;</TD>
            <TD><INPUT NAME="Carrierno" TYPE=TEXT id="Carrierno" maxlength="50" SIZE=40></TD>
          </TR>
          <TR>
            <TD ALIGN="right" class="TrackNormalBlue"><span class="TrackMediumBlue">Dept time : </span></TD>
            <TD>&nbsp;</TD>
            <TD><INPUT NAME="Depttime" TYPE=TEXT id="Depttime" maxlength="50" SIZE=20></TD>
          </TR>
          <TR>
            <TD ALIGN="right" class="TrackNormalBlue">Origin : </TD>
            <TD>&nbsp;</TD>
            <TD><INPUT NAME="Origin" TYPE=TEXT id="Origin" maxlength="50" SIZE=40>
                <span class="REDLink">*</span> </TD>
          </TR>
          <TR>
            <TD ALIGN="right" class="TrackNormalBlue">Destination :</TD>
            <TD>&nbsp;</TD>
            <TD><INPUT NAME="Destination" TYPE=TEXT id="Destination" maxlength="50" SIZE=40>
                <span class="REDLink">*</span> </TD>
          </TR>
          <TR>
            <TD ALIGN="right" class="TrackNormalBlue">Pickup Date  :</TD>
            <TD>&nbsp;</TD>
            <TD><INPUT NAME="Departure" TYPE=TEXT id="Departure" readonly="True" style="cursor: text" onClick="ds_sh(this);" maxlength="15" >
                <span class="REDLink">*</span> </TD>
          </TR>
          <TR>
            <TD ALIGN="right" valign="top" class="TrackNormalBlue">Pickup Time  :</TD>
            <TD>&nbsp;</TD>
            <TD><select name="timeHours" id="timeHours">
            <option value='00'>00</option><option value='01'>01</option><option value='02'>02</option><option value='03'>03</option><option value='04'>04</option><option value='05'>05</option><option value='06'>06</option><option value='07'>07</option><option value='08'>08</option><option value='09'>09</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option>        </select> &nbsp; <strong>:</strong> &nbsp; 
        <select name="timeMins" id="timeMins">
            <option value='00'>00</option><option value='01'>01</option><option value='02'>02</option><option value='03'>03</option><option value='04'>04</option><option value='05'>05</option><option value='06'>06</option><option value='07'>07</option><option value='08'>08</option><option value='09'>09</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option><option value='51'>51</option><option value='52'>52</option><option value='53'>53</option><option value='54'>54</option><option value='55'>55</option><option value='56'>56</option><option value='57'>57</option><option value='58'>58</option><option value='59'>59</option>        </select></TD>
          </TR>
          <TR>
            <TD ALIGN="right" valign="top" class="TrackNormalBlue">Status :</TD>
            <TD>&nbsp;</TD>
            <TD><select name="status" id="status">
                <option value="In Transit">In Transit</option>
            </select></TD>
          </TR>
          <TR>
            <TD ALIGN="right" valign="top" class="TrackNormalBlue">Expected Dly Date :</TD>
            <TD>&nbsp;</TD>
            <TD><INPUT NAME="ExpectedDate" TYPE=TEXT id="ExpectedDate" readonly="True" style="cursor: text" onClick="ds_sh(this);" maxlength="15" > <span class="REDLink">*</span> </TD>
          </TR>
          <TR>
            <TD ALIGN="right" valign="top" class="TrackNormalBlue">Comments :</TD>
            <TD>&nbsp;</TD>
            <TD><textarea name="Comments" cols="40" rows="4" id="Comments"></textarea></TD>
          </TR>
          <TR>
            <TD ALIGN="right">&nbsp;</TD>
            <TD>&nbsp;</TD>
            <TD><input type="submit" name="Submit" value="Submit"></TD>
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
</table>-->

<table width="75%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="18"><img src="images/boxtopleftcorner.gif" alt="" width="18" height="13" /></td>
    <td width="734"  background="images/boxtopBG.gif"></td>
    <td width="18"><img src="images/boxtoprightcorner.gif" alt="" width="18" height="13" /></td>
  </tr>
  <tr>
    <td background="images/boxleftBG.gif"></td>
    <td>
    
    <table width="100%" height="600px">
    <tr><td>Welcome to <?php echo $userRow['userEmail']; ?></td></tr>
    </table>
    </td></tr></table>

	
	</td>
  </tr>
  
<?PHP include"includes/footer.php";?>
<?php ob_end_flush(); ?>
</table>
</body>
</html>
