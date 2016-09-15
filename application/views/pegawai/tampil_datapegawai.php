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
			<div class="modal-footer">
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
            <form action="<?php echo base_url();?>index.php/pegawai/simpan/<?php echo isset($id)?$id:''; ?>" method="post" name="submit">
                <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="nip">NIP</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="nip" name="nip" value="<?php echo set_value('nip');?>" placeholder="NIP">
                	</div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="nama_pegawai">Nama Pegawai</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="<?php echo set_value('nama_pegawai');?>" placeholder="Nama Pegawai">
                	</div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="jk">Jenis Kelamin</label>
                    <div class="col-sm-6">
                    <select name="jk" id="jk" class="form-control" value="<?php echo set_value('jk');?>">
		              <option value="Tidak Ada">- - -</option>
		              <option value="Perempuan">Perempuan</option>
		              <option value="Laki-Laki">Laki-Laki</option>
		            </select>
                	</div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="status">Status</label>
                    <div class="col-sm-6">
                    <select name="status" id="status" class="form-control" value="<?php echo set_value('status');?>">
		              <option value="Tidak Ada">- - -</option>
		              <option value="Tetap">Tetap</option>
		              <option value="Kontrak">Kontrak</option>
		              <option value="Honorer">Honorer</option>
		              <option value="Magang">Magang</option>
		            </select>
                	</div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="agama">Agama</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="agama" name="agama" value="<?php echo set_value('agama');?>" placeholder="Agama">
                	</div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="tempat_lahir">Tempat Lahir</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo set_value('tempat_lahir');?>" placeholder="Tempat Lahir">
                	</div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="tanggal_lahir">Tanggal Lahir</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo set_value('tanggal_lahir');?>" placeholder="yyyy-mm-dd">
                	</div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="alamat">Alamat</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="alamat" name="alamat" value="<?php echo set_value('alamat');?>" placeholder="Alamat">
                	</div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="telepon">Telepon</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="telepon" name="telepon" value="<?php echo set_value('telepon');?>" placeholder="Telepon">
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
					<div class="panel-heading">Data Pegawai</div>
					<div class="panel-body">
						<div class="row text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      						<a  href="#" class="btn btn-primary btn-small" data-toggle="modal" data-target="#addModal"><span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah data</a>
  						</div>
  						<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="id" data-align="center" data-sortable="true">Id</th>
								<th data-field="nip" data-align="center" data-sortable="true">NIP</th>
								<th data-field="nama" data-align="center" data-sortable="true">Nama</th>
								<th data-field="jenis_kelamin" data-align="center" data-sortable="true">Jenis Kelamin</th>
								<th data-field="status" data-align="center" data-sortable="true">Status</th>
								<th data-field="agama" data-align="center" data-sortable="true">Agama</th>
								<th data-field="tempat_lahir" data-align="center" data-sortable="true">Tempat Lahir</th>
								<th data-field="tanggal_lahir" data-align="center" data-sortable="true">Tanggal Lahir</th>
								<th data-field="alamat" data-align="center" data-sortable="true">Alamat</th>
								<th data-field="telepon" data-align="center" data-sortable="true">Telepon</th>
								<th data-align="center">Aksi</th>
						    </tr>
						    </thead>
						    <tbody>
							<tr>
							<?php 
							foreach ($data->result() as $row) {
							?>
							<td><?php echo $row->id ; ?></td>
							<td><?php echo $row->nip ;?></td>
							<td><?php echo $row->nama_pegawai ;?></td>
							<td><?php echo $row->jk ;?></td>
							<td><?php echo $row->status ;?></td>
							<td><?php echo $row->agama ;?></td>
							<td><?php echo $row->tempat_lahir ;?></td>
							<td><?php echo $row->tanggal_lahir ;?></td>
							<td><?php echo $row->alamat ;?></td>
							<td><?php echo $row->telepon ;?></td>
							<td>
							<a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php/pegawai/delete/<?php echo $row->id; ?>');">
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
                                    <form action="<?php echo base_url();?>index.php/pegawai/edit/<?php echo isset($id)?$id:''; ?>" method="post" name="submit">
                                        <div class="box-body">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="nip">ID</label>
                                            <div class="col-sm-6">
                                            <input required type="text" class="form-control" id="id" name="id" value="<?php echo $row->id;?>" disabled>
                                            <input required type="hidden" class="form-control" id="id" name="id" value="<?php echo $row->id;?>">
                                            </div><br><br>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="nip">NIP</label>
                                            <div class="col-sm-6">
                                            <input required type="text" class="form-control" id="nip" name="nip" value="<?php echo $row->nip;?>">
                                            </div><br><br>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="nama_pegawai">Nama Pegawai</label>
                                            <div class="col-sm-6">
                                            <input required type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="<?php echo $row->nama_pegawai;?>">
                                            </div><br><br>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="jk">Jenis Kelamin</label>
                                            <div class="col-sm-6">
                                            <select name="jk" id="jk" class="form-control" value="<?php echo $row->jk;?>">
                                              <option value="Tidak Ada">- - -</option>
                                              <option value="Perempuan">Perempuan</option>
                                              <option value="Laki-Laki">Laki-Laki</option>
                                            </select>
                                            </div><br><br>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="status">Status</label>
                                            <div class="col-sm-6">
                                            <select name="status" id="status" class="form-control" value="<?php echo $row->status;?>">
                                              <option value="Tidak Ada">- - -</option>
                                              <option value="Tetap">Tetap</option>
                                              <option value="Kontrak">Kontrak</option>
                                              <option value="Honorer">Honorer</option>
                                              <option value="Magang">Magang</option>
                                            </select>
                                            </div><br><br>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="agama">Agama</label>
                                            <div class="col-sm-6">
                                            <input required type="text" class="form-control" id="agama" name="agama" value="<?php echo $row->agama;?>">
                                            </div><br><br>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="tempat_lahir">Tempat Lahir</label>
                                            <div class="col-sm-6">
                                            <input required type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $row->tempat_lahir;?>">
                                            </div><br><br>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="tanggal_lahir">Tanggal Lahir</label>
                                            <div class="col-sm-6">
                                            <input required type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $row->tanggal_lahir;?>">
                                            </div><br><br>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="alamat">Alamat</label>
                                            <div class="col-sm-6">
                                            <input required type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $row->alamat;?>">
                                            </div><br><br>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="telepon">Telepon</label>
                                            <div class="col-sm-6">
                                            <input required type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $row->telepon;?>">
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
<script>
    $(document).ready(function(){
        var date_input=$('input[name="tanggal_lahir"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>