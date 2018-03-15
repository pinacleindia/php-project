<?PHP ob_start();
	session_start();
	require_once 'dbconnect.php';?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	
    <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" />


<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
    <script language="javascript">
function deleteme(id)
{
if(confirm("Do you really want to delete this Users?"))
{
window.parent.location = "manage_users.php?id="+id;
}
}
</script>
<style>
.row {
    margin-right: 0px !important;
    margin-left:0px !important;
}</style>
	</head>
	<body>
    
      <table id="example" class="table table-striped table-bordered" width="98%" cellspacing="0" >
        <!-- bootstrap classes added by the uitheme widget -->
        <thead>
          <tr>
            <th>Sr.No</th>
            <th>Name</th>
            <th>Company Name</th>
            <th>Email Id</th>
            <th>Password</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>Sr.No</th>
            <th>Name</th>
            <th>Company Name</th>
            <th>Email Id</th>
            <th>Password</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
          <tr>
            <th colspan="7" class="ts-pager form-horizontal"> <button type="button" class="btn first"><i class="icon-step-backward glyphicon glyphicon-step-backward"></i></button>
              <button type="button" class="btn prev"><i class="icon-arrow-left glyphicon glyphicon-backward"></i></button>
              <span class="pagedisplay"></span> <!-- this can be any element, including an input -->
              
              <button type="button" class="btn next"><i class="icon-arrow-right glyphicon glyphicon-forward"></i></button>
              <button type="button" class="btn last"><i class="icon-step-forward glyphicon glyphicon-step-forward"></i></button>
              <select class="pagesize input-mini" title="Select page size">
                <option selected="selected" value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
              </select>
              <select class="pagenum input-mini" title="Select page number">
              </select>
            </th>
          </tr>
        </tfoot>
        <tbody>
          <?php $i=1;
			$select_class = "SELECT * FROM user_loging where 1";
			$class_query = mysql_query($select_class) or die(mysql_error());
			while($row = mysql_fetch_assoc($class_query)){
				$fldstatus=$row['fldstatus'];
				if($fldstatus=="1"){ $fld_stat="Active";}else{ $fld_stat="Inactive";}
		/*	$gal_id=$row["status"];
			$set_nmmm=mysql_query("select * from master_status where fld_id='$gal_id'");
			$set_total=mysql_fetch_assoc($set_nmmm);*/
							  ?>
          <tr>
            <td><?PHP echo $i;?></td>
            <td><?PHP echo $row['name'];?></td>
           <td><?PHP echo $row['comp_nm'];?></td>
           <td><?PHP echo $row['email_id'];?></td>
           <td><?PHP echo $row['password'];?></td>
            <td><?php echo $fld_stat;?></td>
            <td>&nbsp;<a href="editusers.php?user_id=<?PHP echo $row['fld_id'];?>" target="_parent">
            <img src="file_edit.png" alt="Edit" title="Edit"></a>
            &nbsp;
            <img src = "delete.gif" border="0" onClick="return deleteme('<?php echo $row['fld_id'];?>');"></td>
          </tr>
          <?PHP $i=$i+1;}?>
        </tbody>
      </table>
   
</body>
</html>
