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
if(isset($_REQUEST['id']))
{
$id = $_REQUEST['id'];
$delete_sql = "DELETE FROM mst_shipment WHERE fld_id = '$id'";
$result = mysql_query($delete_sql) or die(mysql_error());
if($result)
{?><script>window.location='manage_shipment.php?suc=3'</script><?PHP 
} }?>
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
          <td><h3 class="h3_head">Shipment Delivered Reports </h3></td>
        </tr>
        <!--<tr>
      <td align="center" bgcolor="F9F5F5" class="Partext1">&nbsp;</td>
    </tr>-->
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
          <td><h3 class="h3_head">Delete Shipment Report Sucessfully</h3></td>
        </tr>
        <!--<tr>
      <td align="center" bgcolor="F9F5F5" class="Partext1">&nbsp;</td>
    </tr>-->
      </table>
      <?PHP }?>
      <iframe  src="sort_manage_shipment2.php" style="width:98%; height:950px; margin:1%; border:0px;" frameborder="0"></iframe>
    
      </td>
  </tr>
  <?PHP include"includes/footer.php";?>
  <?php ob_end_flush(); ?>
</table>
</body>
</html>
