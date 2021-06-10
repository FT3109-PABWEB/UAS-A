  <?php
  include "config/koneksi.php" ?>
<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
            <div class="box first">
			<section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">CPU Traffic</span>
                  <span class="info-box-number">90<small>%</small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Likes</span>
                  <span class="info-box-number">41,410</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Sales</span>
                  <span class="info-box-number">760</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">New Members</span>
                  <span class="info-box-number">2,000</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Monthly Recap Report</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
            
                <div class="row">
                    <!-- page start-->
              <div class="row">
                  <div class="col-lg-10">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3 align="center"> Data Penjualan </h3><br>
                            <a href="?page=page/input/inputpenjualan" class="btn btn-primary">+ Tambah Data</a>
                             <a href="page/simpanxls/penjualanxls.php" class="btn btn-danger" >+ Simpan Excel</a>
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2" border="1" bgcolor="blue">
                                      <thead>
                                      <tr>
                                          <th>ID PENJUALAN</th>
                                          <th>ID BUKU</th>
                                          <th>JUDUL</th>
                                          <th>ID KASIR</th>
                                          <th>JUMLAH</th>
                                          <th>HARGA JUAL</th>
                                          <th>TANGGAL</th>
                                          <th>TOTAL</th>
                                         
                                          
                                          <th class="hidden-phone">Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";
       
                                        $cek = $mysqli->query("SELECT * FROM  tb_nilai order by id_nilai asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                            $id_nilai  		= $row['id_nilai'];
                                            $id_buku        = $row['id_buku'];
                                            $judul          = $row['judul'];
                                            $id_kasir       = $row['id_kasir'];
                                            $nilai_a        = $row['nilai_a'];
                                            $nilai_b        = $row['nilai_b'];
                                            $tgl            = $row['tgl'];
                                            $jumlah_nilai   = $row['jumlah_nilai'];
                                            
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                          <td><?php echo "$id_nilai"; ?></td>
                                          <td><?php echo "$id_buku"; ?></td>
                                          <td><?php echo "$judul"; ?></td>
                                          <td><?php echo "$id_kasir"; ?></td>
                                          <td><?php echo "$nilai_a"; ?></td>
                                          <td><?php echo "Rp.$nilai_b"; ?></td>
                                          <td><?php echo "$tgl"; ?></td>
                                          <td><?php echo "$jumlah_nilai"; ?></td>
                                           
                                          
                                               
                                         
                                          <td class="center hidden-phone">
                                             <a href="?page=ubah_penjualan&Token=<?php echo $row['id_nilai']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"> Edit</i></a>
                                             <a href="?page=page/delete/delete_penjualan&Token=<?php echo $row['id_nilai']; ?>"  onClick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"> Hapus</i></a>
                                          </td>
                                      </tr>
                                      <?php } ?>
                                      </tbody>
                                      <tfoot>
                                     
                                      </tfoot>
                          </table>
                                </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->

	
