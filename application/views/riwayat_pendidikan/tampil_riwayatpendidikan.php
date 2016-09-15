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
            <form action="<?php echo base_url();?>index.php/riwayat_pendidikan/simpan/<?php echo isset($id)?$id:''; ?>" method="post" name="submit">
                <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="tingkat_pendidikan">Tingkat Pendidikan</label>
                    <div class="col-sm-6">
                    <select name="tingkat_pendidikan" id="tingkat_pendidikan" class="form-control" value="<?php echo set_value('tingkat_pendidikan');?>">
		              <option value="- - -">- - -</option>
		              <option value="SD">SD</option>
		              <option value="SMP">SMP</option>
		              <option value="SMK">SMK</option>
		              <option value="SMA">SMA</option>
		              <option value="D1">D1</option>
		              <option value="D2">D2</option>
		              <option value="D3">D3</option>
		              <option value="D4">D4</option>
		              <option value="S1">S1</option>
		              <option value="S2">S2</option>
		              <option value="S3">S3</option>
		              <option value="SP1">SP1</option>
		              <option value="SP2">SP2</option>
		            </select>
		        </div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="kota">Kota</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="kota" name="kota" value="<?php echo set_value('kota');?>" placeholder="Kota">
                	</div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="jurusan">Jurusan</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo set_value('jurusan');?>" placeholder="Jurusan">
                	</div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="tanggal_ijazah">Tanggal Ijazah</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="tanggal_ijazah" name="tanggal_ijazah" value="<?php echo set_value('tanggal_ijazah');?>" placeholder="yyyy-mm-dd">
                </div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="tahun_masuk">Tahun Masuk</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="tahun_masuk" name="tahun_masuk" value="<?php echo set_value('tahun_masuk');?>" placeholder="Tahun Masuk">
                </div><br><br>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="tahun_lulus">Tahun Lulus</label>
                    <div class="col-sm-6">
                    <input required type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" value="<?php echo set_value('tahun_lulus');?>" placeholder="Tahun Lulus">
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
					<div class="panel-heading">Data Riwayat Pendidikan</div>
					<div class="panel-body">
						<div class="row text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      						<a  href="#" class="btn btn-primary btn-small" data-toggle="modal" data-target="#addModal"><span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah data</a>
  						</div>
  						<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
  						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="id" data-align="center" data-sortable="true">Id</th>
								<th data-field="tingkat_pendidikan" data-align="center" data-sortable="true">Tingkat Pendidikan</th>
								<th data-field="kota" data-align="center" data-sortable="true">Kota</th>
								<th data-field="jurusan" data-align="center" data-sortable="true">Jurusan</th>
								<th data-field="tanggal_ijazah" data-align="center" data-sortable="true">Tanggal Ijazah</th>
								<th data-field="tahun_masuk" data-align="center" data-sortable="true">Tahun Masuk</th>
								<th data-field="tahun_lulus" data-align="center" data-sortable="true">Tahun Lulus</th>
								<th data-align="center">Aksi</th>
						    </tr>
						    </thead>
						    <tbody>
							<tr>
							<?php 
							foreach ($data->result() as $row) {
							?>
							<td><?php echo $row->id ; ?></td>
							<td><?php echo $row->tingkat_pendidikan ;?></td>
							<td><?php echo $row->kota ;?></td>
							<td><?php echo $row->jurusan ;?></td>
							<td><?php echo $row->tanggal_ijazah ;?></td>
							<td><?php echo $row->tahun_masuk ;?></td>
							<td><?php echo $row->tahun_lulus ;?></td>
							<td>
							<a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php/riwayat_pendidikan/delete/<?php echo $row->id; ?>');">
								<button type="button" class="btn btn-danger btn-sm">
									<span class="glyphicon glyphicon-trash"></span>Hapus
								</button>
							</a>
							<a href="#" data-toggle="modal" data-target="#edit<?php echo $row->id ; ?>" >
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
						            <form action="<?php echo base_url();?>index.php/riwayat_pendidikan/edit/<?php echo isset($id)?$id:''; ?>" method="post" name="submit">
						                <div class="box-body">
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="tingkat_pendidikan">ID</label>
						                    <div class="col-sm-6">
						                    <input required type="text" class="form-control" id="id" name="id" value="<?php echo $row->id;?>" disabled>
						                    <input required type="hidden" class="form-control" id="id" name="id" value="<?php echo $row->id;?>">
						                    </div><br><br>
						                </div>
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="tingkat_pendidikan">Tingkat Pendidikan</label>
						                    <div class="col-sm-6">
						                    <select name="tingkat_pendidikan" id="tingkat_pendidikan" class="form-control" value="<?php echo $row->tingkat_pendidikan;?>">
								              <option value="- - -">- - -</option>
								              <option value="SD">SD</option>
								              <option value="SMP">SMP</option>
								              <option value="SMK">SMK</option>
								              <option value="SMA">SMA</option>
								              <option value="D1">D1</option>
								              <option value="D2">D2</option>
								              <option value="D3">D3</option>
								              <option value="D4">D4</option>
								              <option value="S1">S1</option>
								              <option value="S2">S2</option>
								              <option value="S3">S3</option>
								              <option value="SP1">SP1</option>
								              <option value="SP2">SP2</option>
								            </select>
								            </div><br><br>
						                </div>
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="kota">Kota</label>
						                    <div class="col-sm-6">
						                    <input required type="text" class="form-control" id="kota" name="kota" value="<?php echo $row->kota;?>">
						                    </div><br><br>
						                </div>
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="jurusan">jurusan</label>
						                    <div class="col-sm-6">
						                    <input required type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $row->jurusan;?>">
						                    </div><br><br>
						                </div>
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="tanggal_ijazah">Tanggal Ijazah</label>
						                    <div class="col-sm-6">
						                    <input required type="text" class="form-control" id="tanggal_ijazah" name="tanggal_ijazah" value="<?php echo $row->tanggal_ijazah;?>">
						                    </div><br><br>
						                </div>
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="tahun_masuk">Tahun Masuk</label>
						                    <div class="col-sm-6">
						                    <input required type="text" class="form-control" id="tahun_masuk" name="tahun_masuk" value="<?php echo $row->tahun_masuk;?>">
						                    </div><br><br>
						                </div>
						                <div class="form-group">
						                    <label class="control-label col-sm-4" for="tahun_lulus">Tahun Lulus</label>
						                    <div class="col-sm-6">
						                    <input required type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" value="<?php echo $row->tahun_lulus;?>">
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
    $(document).ready(function () {
    $('#tanggal_ijazah').datepicker({
    format: "yyyy-mm-dd"
    });  
});
</script>

