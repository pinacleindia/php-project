<tr>
    <td width="780">
	
<!--<link href="../css/bootstrap.min.css" rel="stylesheet">-->
<link href="style.css" rel="stylesheet" type="text/css"/>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
</style>
<!--header-->
<div class="header">
        
        <img src="logo.png" alt="" class="logo">

</div>
<!--header-->
<!--menu-->
<ul>
<li><a href="addshipment.php">Add Shipment</a></li>
<li><a href="manage_shipment.php">Manage Shipemnt</a></li>
<li><a href="manage_shipment_report.php">Delivered Report</a></li>
<li><a href="search_shipment.php">Search Shipment</a></li>
<li><a href="add_users.php">Add Users</a></li>
<li><a href="manage_users.php">Manage Users</a></li>
<li><a href="manage_settings.php">Settings</a></li>
<li><a href="logout.php?logout">Logout</a></li>
</ul>
<!--menu end-->
<div class="bot_menu p_a">
<div align="right">
<a href="index.php">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;

<a href="change_password.php">Change Password</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<?php echo $userRow['userEmail']; ?>&nbsp;|&nbsp;&nbsp;
<a href="logout.php?logout">Logout</a></div>
</div>
	</td>
  </tr>