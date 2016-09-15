<br>
<?php
$konek = mysqli_connect("localhost","homestead","secret","db_pegawai");
//$conecc = mysqli_connect("localhost","root","","db_pegawai");
//$conec = mysqli_connect("localhost","root","","db_pegawai");
?>
        <div class="row">
            <div class="col-xs-14 col-md-9 col-lg-4">
                <div class="panel panel-blue panel-widget ">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked female-user"><use xlink:href="#stroked-female-user"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">
                                <?php
                                require_once "config.php";
                                $sqlCommand = "SELECT COUNT(*) FROM tb_user"; 
                                $query = mysqli_query($konek, $sqlCommand) or die (mysqli_error()); 
                                $row = mysqli_fetch_row($query);
                                echo $row[0] . " User";
                                mysqli_free_result($query); 
                                mysqli_close($konek);
                                ?>
                            </div>
                            <div class="text-muted"><a href="<?php echo base_url();?>index.php/user"><h5> => Data User</h5></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-8 col-lg-4">
                <div class="panel panel-teal panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">
                                <?php
                                require_once "config.php";
                                $sqlCommand = "SELECT COUNT(*) FROM tb_pensiun"; 
                                $query = mysqli_query($konek, $sqlCommand) or die (mysqli_error()); 
                                $row = mysqli_fetch_row($query);
                                echo $row[0] . " Pensiun";
                                mysqli_free_result($query); 
                                mysqli_close($konek);
                                ?>
                            </div>
                            <div class="text-muted"><a href="<?php echo base_url();?>index.php/laporan_pensiun"><h5> => Data Pensiun</h5></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="panel panel-red panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"/></svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">
                                <?php
                                require_once "config.php";
                                $sqlCommand = "SELECT COUNT(*) FROM tb_cuti"; 
                                $query = mysqli_query($konek, $sqlCommand) or die (mysqli_error()); 
                                $row = mysqli_fetch_row($query);
                                echo $row[0] . " Cuti";
                                mysqli_free_result($query); 
                                mysqli_close($konek);
                                ?>
                            </div>
                            <div class="text-muted"><a href="<?php echo base_url();?>index.php/cuti"><h5> => Data Cuti</h5></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
       <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Site Traffic Overview</div>
                    <div class="panel-body">
                        <div class="canvas-wrapper">
                            <canvas class="main-chart" id="line-chart" height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">PT Java Valley Technology</div>
                    <div class="panel-body">
                            <thead>
                            </thead>
                            <tbody>
                            <table data-toggle="table">
                            <thead>
                            <tr>
                                <th data-align="center">Title</th>
                                <th data-align="center">Name</th>
                                <th data-align="center">Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <td>Direktur</td>
                            <td>Azhar Madia</td>
                            <td><img src="<?php echo base_url();?>img/2.png" height="40" weight="40"></td>
                            </tr>
                            <tr>
                            <td>Senior IT Support</td>
                            <td>Herwin S</td>
                            <td><img src="<?php echo base_url();?>img/2.png" height="40" weight="40"></td>
                            </tr>
                            <tr>
                            <td>Software Defelopment</td>
                            <td>Dono Widiarjo P</td>
                            <td><img src="<?php echo base_url();?>img/3.png" height="40" weight="40"></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--/.row-->