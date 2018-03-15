<?PHP include"connect.php";?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<!-- jQuery -->
	<script src="media/jquery-1.4.4.min.js"></script>

	<!-- Demo stuff -->
	<link rel="stylesheet" href="media/jq.css">
	<link rel="stylesheet" href="media/bootstrap.min.css">
	<link href="media/prettify.css" rel="stylesheet">
	<script src="media/prettify.js"></script>
	<script src="media/docs.js"></script>

	<!-- Tablesorter: required for bootstrap -->
	<link rel="stylesheet" href="media/theme.bootstrap.css">
	<script src="media/jquery.tablesorter.js"></script>
	<script src="media/jquery.tablesorter.widgets.js"></script>

	<!-- Tablesorter: optional -->
	<link rel="stylesheet" href="media/jquery.tablesorter.pager.css">
	<script src="media/jquery.tablesorter.pager.js"></script>
	<script id="js">$(function() {

	// NOTE: $.tablesorter.theme.bootstrap is ALREADY INCLUDED in the jquery.tablesorter.widgets.js
	// file; it is included here to show how you can modify the default classes
	$.tablesorter.themes.bootstrap = {
		// these classes are added to the table. To see other table classes available,
		// look here: http://getbootstrap.com/css/#tables
		table        : 'table table-bordered table-striped',
		caption      : 'caption',
		// header class names
		header       : 'bootstrap-header', // give the header a gradient background (theme.bootstrap_2.css)
		sortNone     : '',
		sortAsc      : '',
		sortDesc     : '',
		active       : '', // applied when column is sorted
		hover        : '', // custom css required - a defined bootstrap style may not override other classes
		// icon class names
		icons        : '', // add "icon-white" to make them white; this icon class is added to the <i> in the header
		iconSortNone : 'bootstrap-icon-unsorted', // class name added to icon when column is not sorted
		iconSortAsc  : 'glyphicon glyphicon-chevron-up', // class name added to icon when column has ascending sort
		iconSortDesc : 'glyphicon glyphicon-chevron-down', // class name added to icon when column has descending sort
		filterRow    : '', // filter row class; use widgetOptions.filter_cssFilter for the input/select element
		footerRow    : '',
		footerCells  : '',
		even         : '', // even row zebra striping
		odd          : ''  // odd row zebra striping
	};

	// call the tablesorter plugin and apply the uitheme widget
	$("table").tablesorter({
		// this will apply the bootstrap theme if "uitheme" widget is included
		// the widgetOptions.uitheme is no longer required to be set
		theme : "bootstrap",

		widthFixed: true,

		headerTemplate : '{content} {icon}', // new in v2.7. Needed to add the bootstrap icon!

		// widget code contained in the jquery.tablesorter.widgets.js file
		// use the zebra stripe widget if you plan on hiding any rows (filter widget)
		widgets : [ "uitheme", "filter", "zebra" ],

		widgetOptions : {
			// using the default zebra striping class name, so it actually isn't included in the theme variable above
			// this is ONLY needed for bootstrap theming if you are using the filter widget, because rows are hidden
			zebra : ["even", "odd"],

			// reset filters button
			filter_reset : ".reset",

			// extra css class name (string or array) added to the filter element (input or select)
			filter_cssFilter: "form-control",

			// set the uitheme widget to use the bootstrap theme class names
			// this is no longer required, if theme is set
			// ,uitheme : "bootstrap"

		}
	})
	.tablesorterPager({

		// target the pager markup - see the HTML block below
		container: $(".ts-pager"),

		// target the pager page select dropdown - choose a page
		cssGoto  : ".pagenum",

		// remove rows from the table to speed up the sort of large tables.
		// setting this to false, only hides the non-visible rows; needed if you plan to add/remove rows with the pager enabled.
		removeRows: false,

		// output string - default is '{page}/{totalPages}';
		// possible variables: {page}, {totalPages}, {filteredPages}, {startRow}, {endRow}, {filteredRows} and {totalRows}
		output: '{startRow} - {endRow} / {filteredRows} ({totalRows})'

	});

});</script>
	<script>
	$(function(){

		// filter button demo code
		$('button.filter').click(function(){
			var col = $(this).data('column'),
				txt = $(this).data('filter');
			$('table').find('.tablesorter-filter').val('').eq(col).val(txt);
			$('table').trigger('search', false);
			return false;
		});

		// toggle zebra widget
		$('button.zebra').click(function(){
			var t = $(this).hasClass('btn-success');
//			if (t) {
				// removing classes applied by the zebra widget
				// you shouldn't ever need to use this code, it is only for this demo
//				$('table').find('tr').removeClass('odd even');
//			}
			$('table')
				.toggleClass('table-striped')[0]
				.config.widgets = (t) ? ["uitheme", "filter"] : ["uitheme", "filter", "zebra"];
			$(this)
				.toggleClass('btn-danger btn-success')
				.find('i')
				.toggleClass('icon-ok icon-remove glyphicon-ok glyphicon-remove').end()
				.find('span')
				.text(t ? 'disabled' : 'enabled');
			$('table').trigger('refreshWidgets', [false]);
			return false;
		});
	});
	</script>
    <script language="javascript">
function deleteme(id)
{
if(confirm("Do you really want to delete this Gallery?"))
{
window.parent.location = "media_mumbai_pages.php?id="+id;
}
}
</script>
	</head>
	<body>
    <div id="demo">
      <table style="width:100%">
        <!-- bootstrap classes added by the uitheme widget -->
        <thead>
          <tr>
            <th>Sr.No</th>
            <th>Gallery Name</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Sr.No</th>
            <th>Gallery Name</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
          <tr>
            <th colspan="4" class="ts-pager form-horizontal"> <button type="button" class="btn first"><i class="icon-step-backward glyphicon glyphicon-step-backward"></i></button>
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
									
										 $select_class = "SELECT * FROM tbl_gallery where 1";
										  $class_query = mysql_query($select_class) or die(mysql_error());
										 while($row = mysql_fetch_assoc($class_query)){
											 $gal_id=$row["fld_id"];
											 $set_nmmm=mysql_query("select * from tbl_gallery_dtls where gal_id='$gal_id'");
											 $set_total_num_row=mysql_num_rows($set_nmmm);
							  ?>
          <tr>
            <td><?PHP echo $i;?></td>
            <td><?PHP echo $row['gal_nm'];?> ( <?PHP echo $set_total_num_row;?> )</td>
           
            <td><?php if($row['fldstatus']==1){ echo 'Active';}else{ echo 'Inactive';}?></td>
            <td>&nbsp;<a href="edit_media_nww.php?med_id=<?PHP echo $row['fld_id'];?>" target="_parent"><img src="file_edit.png" alt="Edit Media" title="Edit Media"></a>
            &nbsp;
            <img src = "delete.gif" border="0" onClick="return deleteme('<?php echo $row['fld_id'];?>');"></td>
          </tr>
          <?PHP $i=$i+1;}?>
        </tbody>
      </table>
    </div>
</body>
</html>
