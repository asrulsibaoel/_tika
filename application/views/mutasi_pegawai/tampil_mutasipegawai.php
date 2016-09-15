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
            <form action="<?php echo base_url();?>index.php/mutasi_pegawai/simpan/<?php echo isset($id)?$id:''; ?>" method="post" name="submit">
                <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="unit_kerja_lama">Unit Kerja Lama</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="unit_kerja_lama" name="unit_kerja_lama" value="<?php echo set_value('unit_kerja_lama');?>" placeholder="Unit Kerja Lama">
                	</div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="unit_kerja_baru">Unit Kerja Baru</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="unit_kerja_baru" name="unit_kerja_baru" value="<?php echo set_value('unit_kerja_baru');?>" placeholder="Unit Kerja Baru">
                	</div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="jabatan_baru">Jabatan Baru</label>
                    <div class="col-sm-6">
                    <select name="jabatan_baru" id="jabatan_baru" class="form-control" value="<?php echo set_value('jabatan_baru');?>">
						<option value="Tidak Ada">- - -</option>
						<option value="Staff">Staff</option>
						<option value="Supervisor">Supervisor</option>
						<option value="Manager">Manager</option>
						<option value="General Manager">General Manager</option>
						<option value="Dinas">Direktur</option>
					</select>
                	</div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="keterangan">Keterangan</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo set_value('keterangan');?>" placeholder="Keterangan">
                	</div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="tempat_mutasi">Tempat Mutasi</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="tempat_mutasi" name="tempat_mutasi" value="<?php echo set_value('tempat_mutasi');?>" placeholder="Tempat Mutasi">
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
					<div class="panel-heading">Data Mutasi Pegawai</div>
					<div class="panel-body">
						<div class="row text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      						<a href="#" class="btn btn-primary btn-small" data-toggle="modal" data-target="#addModal"><span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah data</a>
  						</div>
  						<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
  						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="id" data-align="center" data-sortable="true">Id</th>
								<th data-field="unit_kerja_lama" data-align="center" data-sortable="true">Unit Kerja Lama</th>
								<th data-field="unit_kerja_baru" data-align="center" data-sortable="true">Unit Kerja Baru</th>
								<th data-field="jabatan_baru" data-align="center" data-sortable="true">Jabatan Baru</th>
								<th data-field="keterangan" data-align="center" data-sortable="true">Keterangan</th>
								<th data-field="tempat_mutasi" data-align="center" data-sortable="true">Tempat Mutasi</th>
								<th data-align="center">Aksi</th>
						    </tr>
						    </thead>
						    <tbody>
							<tr>
							<?php 
							foreach ($data->result() as $row) {
							?>
							<td><?php echo $row->id ; ?></td>
							<td><h4><span class="label label-danger"><?php echo $row->unit_kerja_lama ;?></span></h4></td>
							<td><h5><?php echo $row->unit_kerja_baru ;?></h5></td>
							<td><h5><?php echo $row->jabatan_baru ;?></h5></td>
							<td><h5><?php echo $row->keterangan ;?></h5></td>
							<td><h5><?php echo $row->tempat_mutasi ;?></h5></td>
							<td>
							<a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php/mutasi_pegawai/delete/<?php echo $row->id; ?>');">
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
						            <form action="<?php echo base_url();?>index.php/mutasi_pegawai/edit/<?php echo isset($id)?$id:''; ?>" method="post" name="submit">
						                <div class="box-body">
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="unit_kerja_lama">ID</label>
						                    <div class="col-sm-6">
						                    <input required type="text" class="form-control" id="id" name="id" value="<?php echo $row->id;?>" disabled>
						                    <input required type="hidden" class="form-control" id="id" name="id" value="<?php echo $row->id;?>">
						                    </div><br><br>
						                </div>
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="unit_kerja_lama">Unit Kerja Lama</label>
						                    <div class="col-sm-6">
						                    <input required type="text" class="form-control" id="unit_kerja_lama" name="unit_kerja_lama" value="<?php echo $row->unit_kerja_lama;?>">
						                    </div><br><br>
						                </div>
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="unit_kerja_baru">Unit Kerja Baru</label>
						                    <div class="col-sm-6">
						                    <input required type="text" class="form-control" id="unit_kerja_baru" name="unit_kerja_baru" value="<?php echo $row->unit_kerja_baru;?>">
						                    </div><br><br>
						                </div>
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="jabatan_baru">Jabatan Baru</label>
						                    <div class="col-sm-6">
						                    <select name="jabatan_baru" id="jabatan_baru" class="form-control" value="<?php echo $row->jabatan_baru;?>">
								              <option value="Tidak Ada">- - -</option>
								              <option value="Staff">Staff</option>
								              <option value="Supervisor">Supervisor</option>
								              <option value="Manager">Manager</option>
								              <option value="General Manager">General Manager</option>
								              <option value="Dinas">Direktur</option>
								            </select>
								            </div><br><br>
						                </div>
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="keterangan">Keterangan</label>
						                    <div class="col-sm-6">
						                    <input required type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $row->keterangan;?>">
						                    </div><br><br>
						                </div>
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="tempat_mutasi">Tempat Mutasi</label>
						                    <div class="col-sm-6">
						                    <input required type="text" class="form-control" id="tempat_mutasi" name="tempat_mutasi" value="<?php echo $row->tempat_mutasi;?>">
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
