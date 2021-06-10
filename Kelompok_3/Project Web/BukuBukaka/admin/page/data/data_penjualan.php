  <?php
  include "config/koneksi.php" ?>
<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
            <div class="box first">
            
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
