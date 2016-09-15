<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Log In</title>

<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/styles.css" rel="stylesheet">
</head>

<body class="body"><br><br><br><br>
	<center>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default"><br>
				<center><img src="<?php echo base_url();?>l.png" class="img-responsive" width="30" height="30"><div class="panel-heading">Log In Java Valley</div></center>
				<div class="panel-body">
					<form method="post" action="<?php echo base_url();?>index.php/login/getlogin" onSubmit="return cekform();" role="form">
						<fieldset>
							<div style="margin-bottom: 25px" class="input-group">
    							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input required class="form-control" placeholder="Username" name="username" id="username" type="text">
                            </div>
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input required class="form-control" placeholder="Password" name="password" id="password" type="password">
							</div>
							<?php
								$info = $this->session->flashdata('info');
								if(!empty($info))
								{
									echo $info;
								}
								?>
							<br>
							<center>
								<button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-log-in"></span>&nbsp;Log In&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" class="btn btn-default">Reset</button>
							</center><br>
							2016 © Tika Yuniar M.
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	</center>
		

	<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/chart.min.js"></script>
	<script src="<?php echo base_url();?>js/chart-data.js"></script>
	<script src="<?php echo base_url();?>js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-datepicker.js"></script>
</body>

</html>
