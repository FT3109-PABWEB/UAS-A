<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=bukuxls.xls");//ganti nama sesuai keperluan
header("Pragma: no-cache");
header("Expires: 0");
//disini script laporan anda
?>
<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
            <div class="box first">
            
                <div class="row">
                    <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              <h3 align="center"> Data Buku </h3><br>
                           </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
                                      
                                          <th>BUKU ID</th>
                                          <th>JUDUL</th>
                                          <th>NO ISBN</th>
                                          <th>PENULIS</th>
                                          <th>PENERBIT</th>
                                          <th>TAHUN</th>
                                          <th>STOK</th>
                                          <th>HARGA POKOK</th>
                                          <th>HARGA JUAL</th>
                                          <th>PPN</th>
                                          <th>DISKON</th>
                                         
                                         
                                          
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                      error_reporting(0);
                                        require "config/koneksi.php";
                                        require "config/lib.php";
       
                                        $cek = $mysqli->query("SELECT * FROM  buku    order by id_buku asc");
                                        while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                       
                                            $id_buku     = $row['id_buku'];
                                            $judul       = $row['judul'];
                                            $no_isbn     = $row['no_isbn'];
                                            $penulis     = $row['penulis'];
                                            $penerbit    = $row['penerbit'];
                                            $tahun       = $row['tahun'];
                                            $stok        = $row['stok'];
                                            $harga_pokok = $row['harga_pokok'];
                                            $harga_jual  = $row['harga_jual'];
                                            $ppn         = $row['ppn'];
                                            $diskon      = $row['diskon'];
                                            $no++;
                                       ?>
                                      <tr class="gradeX">
                                       
                                          <td><?php echo "$id_buku"; ?></td>
                                          <td><?php echo "$judul"; ?></td>
                                          <td><?php echo "$no_isbn"; ?></td>
                                          <td><?php echo "$penulis"; ?></td>
                                          <td><?php echo "$penerbit"; ?></td>
                                          <td><?php echo "$tahun"; ?></td>
                                          <td><?php echo "$stok"; ?></td>
                                          <td><?php echo "$harga_pokok"; ?></td>
                                          <td><?php echo "$harga_jual"; ?></td>
                                          <td><?php echo "$ppn"; ?></td>
                                          <td><?php echo "$diskon"; ?></td>
                                          
                                               
                                         
                                         
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
