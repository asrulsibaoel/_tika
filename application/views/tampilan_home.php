<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/bootstrap-table.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/styles.css" rel="stylesheet">
<script src="<?php echo base_url();?>js/lumino.glyphs.js"></script>
<!-- <script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
 -->
</head>
<body>
<!-- Modal Popup Exit Confrim -->
<div class="modal fade" id="closeModal" tabindex="-1" role="dialog" aria-labelledby="closeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" id="myAddLabel">Confirm Exit</h4>
            </div>
            <div class="modal-body">
            <form action="<?php echo base_url();?>index.php/login" name="submit">
            <h4>Apakah Anda Yakin Akan Keluar ... ?</h4>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Ya</button>
            <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Batal</button>
        </div>
		</div>
			</form>
    </div>
  </div>
</div>
<!-- Modal Popup Exit Confrim -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://www.java-valley.com/"><span>Java Valley</span>&nbsp;Technology</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo base_url();?>index.php/profil"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="<?php echo base_url();?>index.php/user"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a  href="#" data-toggle="modal" data-target="#closeModal"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>					
		</div>
		<!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form>
			<center><br>
				<img src="<?php echo base_url();?>s.png" class="img-responsive">
            <br></center>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="<?php echo base_url();?>index.php/home"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg></span> Master 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="<?php echo base_url();?>index.php/pegawai">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Pegawai
						</a>
					</li>
					<li>
						<a class="" href="<?php echo base_url();?>index.php/mutasi_pegawai">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Mutasi Pegawai
						</a>
					</li>
					<li>
						<a class="" href="<?php echo base_url();?>index.php/pelatihan">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Pelatihan
						</a>
					</li>
					<li>
						<a class="" href="<?php echo base_url();?>index.php/riwayat_pendidikan">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Riwayat Pendidikan
						</a>
					</li>
					<li>
						<a class="" href="<?php echo base_url();?>index.php/cuti">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Cuti
						</a>
					</li>
				</ul>
				<li><a href="<?php echo base_url();?>index.php/laporan_pensiun"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Laporan Pensiun</a></li>
				<li><a href="<?php echo base_url();?>index.php/user"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Data User</a></li>
				<li role="presentation" class="divider"></li>	
			</li>
		</ul>
	</div>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"><br><br><br>
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>&nbsp;<?php echo $judul; ?></a></li>
				<li class="active"><?php echo $sub_judul; ?></li>&nbsp;&nbsp;&nbsp;&nbsp;
			</ol>
		</div>
		<?php echo $this->load->view($tampil,null, true);  ?><br><br>
	</div>

	<script src="<?php echo base_url();?>js/chart.min.js"></script>
	<script src="<?php echo base_url();?>js/chart-data.js"></script>
	<script src="<?php echo base_url();?>js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-table.js"></script>
	<!--<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>-->
</body>
</html>
