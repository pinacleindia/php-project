<?PHP 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE); 
ob_start();
	session_start();
	require_once 'dbconnect.php';
$q = intval($_GET['q']);
$sql="SELECT * FROM user_loging WHERE fld_id = '".$q."'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

?>
<TABLE width="100%"  align="center" cellpadding="2" cellspacing="2" class="Partext1">
                      
                      <TR>
                        <TD colspan="3" ALIGN="right" class="TrackMediumBlue"><div align="right" class="gentxt">
                            <div align="left" class="headtext13"><strong>Consiner : </strong></div>
                          </div></TD>
                      </TR>
                     
                     
                      <TR>
                        <TD width="26%" ALIGN="right" class="TrackMediumBlue">Shipper Name   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Shippername" TYPE=TEXT id="Shippername" value="<?PHP echo $row['name'];?>" maxlength="100" SIZE=40>
                          <span class="REDLink">*</span></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Phone   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Shipperphone" TYPE=TEXT id="Shipperphone" maxlength="13" value="<?PHP echo $row['phone'];?>" SIZE=40></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Email   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><INPUT NAME="Shipperemail" TYPE=TEXT id="Shipperemail" maxlength="50" value="<?PHP echo $row['email_id'];?>" SIZE=40></TD>
                      </TR>
                      <TR>
                        <TD ALIGN="right" class="TrackMediumBlue">Address   :</TD>
                        <TD>&nbsp;</TD>
                        <TD><span class="REDLink">
                          <textarea name="Shipperaddress" cols="30" rows="2" id="Shipperaddress"><?PHP echo $row['address'];?></textarea>
                          *</span></TD>
                      </TR>
                      </TABLE>
                     