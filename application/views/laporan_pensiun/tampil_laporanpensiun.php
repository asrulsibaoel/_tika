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
            <form action="<?php echo base_url();?>index.php/laporan_pensiun/simpan/<?php echo isset($id)?$id:''; ?>" method="post" name="submit">
                <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="nama">Nama</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="nama" name="nama" value="<?php echo set_value('nama');?>" placeholder="Nama">
                </div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="keterangan">Keterangan</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo set_value('keterangan');?>" placeholder="Keterangan">
                    </div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="tahun_pensiun">Tahun Pensiun</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="tahun_pensiun" name="tahun_pensiun" value="<?php echo set_value('tahun_pensiun');?>" placeholder="Tahun Pensiun">
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
<!-- Modal Popup untuk Tambah !-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Laporan Pensiun</div>
					<div class="panel-body">
						<div class="row text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      						<a  href="#" class="btn btn-primary btn-small" data-toggle="modal" data-target="#addModal"><span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah data</a>
  						</div>
  						<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
  						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="id" data-align="center" data-sortable="true">Id</th>
								<th data-field="nama" data-align="center" data-sortable="true">Nama</th>
								<th data-field="keterangan" data-align="center" data-sortable="true">Keterangan</th>
								<th data-field="tahun_pensiun" data-align="center" data-sortable="true">Tahun Pensiun</th>
								<th data-align="center">Aksi</th>
						    </tr>
						    </thead>
						    <tbody>
							<tr>
							<?php 
							foreach ($data->result() as $row) {
							?>
							<td><?php echo $row->id ; ?></td>
							<td><?php echo $row->nama ; ?></td>
							<td><?php echo $row->keterangan ;?></td>
							<td><?php echo $row->tahun_pensiun ;?></td>
							<td>
							<a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php/laporan_pensiun/delete/<?php echo $row->id; ?>');">
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
						            <form action="<?php echo base_url();?>index.php/laporan_pensiun/edit/<?php echo isset($id)?$id:''; ?>" method="post" name="submit">
						                <div class="box-body">
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="nama">ID</label>
						                    <div class="col-sm-6">
						                    <input required type="text" class="form-control" id="id" name="id" value="<?php echo $row->id;?>" disabled>
						                    <input required type="hidden" class="form-control" id="id" name="id" value="<?php echo $row->id;?>">
						                    </div><br><br>
						                </div>
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="nama">Nama</label>
						                    <div class="col-sm-6">
						                    <input required type="text" class="form-control" id="nama" name="nama" value="<?php echo $row->nama;?>">
						                    </div><br><br>
						                </div>
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="keterangan">Keterangan</label>
						                    <div class="col-sm-6">
						                    <input required type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $row->keterangan;?>">
						                    </div><br><br>
						                </div>
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="tahun_pensiun">Tahun Pensiun</label>
						                    <div class="col-sm-6">
						                    <input required type="text" class="form-control" id="tahun_pensiun" name="tahun_pensiun" value="<?php echo $row->tahun_pensiun;?>">
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