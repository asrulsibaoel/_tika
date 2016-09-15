<!-- Modal Popup untuk delete-->
<div class="modal fade" id="modal_delete">
	<div class="modal-dialog">
		<div class="modal-content" style="margin-top:100px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" ariahidden="true">&times;</button>
				<h3 class="modal-title" style="text-align:center;">Delete</h3>
			</div>
			<div class="modal-body">
        		<h4>Apakah Anda Yakin Ingin Menghapus...?</h4>
      		</div>
			<div class="modal-footer" style="margin:0px; border-top:0px; textalign:center;">
				<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal Popup untuk delete-->
<!-- Modal Popup untuk tambah -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" id="myAddLabel">Tambah Data</h4>
            </div>
            <div class="modal-body">
            <form action="<?php echo base_url();?>index.php/user/simpan/<?php echo isset($id)?$id:''; ?>" method="post" name="submit">
                <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="username">Username</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username');?>" placeholder="Username">
                	</div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="password">Password</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="password" name="password" value="<?php echo set_value('password');?>" placeholder="password">
                	</div><br><br>
                </div>
            </div>
        <div class="box-footer">
    </div>
 </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-default">Reset</button>
</form>
        </div>
    </div>
  </div>
</div>
<!-- Modal Popup untuk tambah -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">User</div>
					<div class="panel-body">
						<div class="row text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      						<a  href="#" class="btn btn-primary btn-small" data-toggle="modal" data-target="#addModal"><span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah data</a>
      						 <div class="btn-group">
							  <button type="button" class="btn btn-default">Export</button>
							  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							    <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" role="menu">
							    <li><a href="#" onclick="tableToExcel('user', 'W3C Example Table')">Excel</a></li>
							    <li><a href="#">Smartphone</a></li>
							  </ul>
							</div>
  						<table id="user" data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="id" data-align="center" data-sortable="true">Id</th>
								<th data-field="username" data-align="center" data-sortable="true">Username</th>
								<th data-field="password" data-align="center" data-sortable="true">Password</th>
								<th data-align="center">Aksi</th>
						    </tr>
						    </thead>
						    <tbody>
							<tr>
							<?php 
							foreach ($data->result() as $row) {
							?>
							<td><?php echo $row->id ; ?></td>
							<td><?php echo $row->username ; ?></td>
							<td><?php echo $row->password ;?></td>
							<td>
							<a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php/user/delete/<?php echo $row->id; ?>');">
								<button type="button" class="btn btn-danger btn-sm">
									<span class="glyphicon glyphicon-trash"></span>Hapus
								</button>
							</a>
							<a href="#" data-toggle="modal" data-target="#edit<?php echo $row->id ; ?>">
								<button type="button" class="btn btn-info btn-sm">
          							<span class="glyphicon glyphicon-edit"></span>Edit
        						</button>
							</a>
							</td>
							</tr>
						<div class="modal fade" id="edit<?php echo $row->id ; ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
						    <div class="modal-dialog">
						        <div class="modal-content">
						            <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
						                <h4 class="modal-title" id="myAddLabel">Edit Data</h4>
						            </div>
						            <div class="modal-body">
						            <form action="<?php echo base_url();?>index.php/user/edit/<?php echo isset($id)?$id:''; ?>" method="post" name="submit">
						                <div class="box-body">
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="username">ID</label>
						                    <div class="col-sm-6">
						                    <input required type="text" class="form-control" id="id" name="id" value="<?php echo $row->id;?>" disabled>
						                    <input required type="hidden" class="form-control" id="id" name="id" value="<?php echo $row->id;?>">
						                    </div><br><br>
						                </div>
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="username">Username</label>
						                    <div class="col-sm-6">
						                    <input required type="text" class="form-control" id="username" name="username" value="<?php echo $row->username;?>">
						                    </div><br><br>
						                </div>
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="password">Password</label>
						                    <div class="col-sm-6">
						                    <input required type="text" class="form-control" id="password" name="password" value="<?php echo $row->password;?>">
						                    </div><br><br>
						                </div>
						            </div>
						        	<div class="box-footer">
						    		</div>
						 		</div>
						        	<div class="modal-footer">
						            	<button type="submit" class="btn btn-primary">Update</button>
						            	<button type="reset" class="btn btn-default">Reset</button>
									</form>
						       		</div>
						    	</div>
						  	</div>
						</div>
						<?php } ?>
						</tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	 
<script type="text/javascript">
function confirm_modal(delete_url)
{
	$('#modal_delete').modal('show', {backdrop: 'static'});
	document.getElementById('delete_link').setAttribute('href' , delete_url);
}
</script>
<script type="text/javascript">
var tableToExcel = (function() {
 var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
</script>