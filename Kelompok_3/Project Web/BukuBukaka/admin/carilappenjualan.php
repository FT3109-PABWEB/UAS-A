<?php
include "config/lib.php";
include "config/koneksi.php";
$token = $_GET['token'];
$cek = $mysqli->query("SELECT * FROM  tb_nilai WHERE id_nilai ='$token'");
  while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
?>
 <style type="text/css">
    .jumbotron {
    width: 70%;
    box-shadow: 2px  1px 9px 0  #333;
     
    }
    </style>
                                                                          
 
 

<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
           
<div align="center"> 

 <div class="row jumbotron "  >
 <h2 style="font-size:19px;">Detail Data Penjualan</h2>
 <hr>

        <div class="col-md-3 col-sm-3 col-xs-12" align="right">
            
            <div class="item form-group">
                 
             
                    <br>                                       
                   
                </div>
            </div>  
             
           

        </div>

       <div class="col-md-9 col-sm-9 col-xs-12" style="font-size:14px;">

            
         <table class="table     table-hover" border="0">
          <tr>
                                 <td><label>Id PENJUALAN</label></td>
                                  <td><label>: </label></td>
                                 <td><label><?php echo $row['id_nilai']; ?></label></td> 
                              </tr>
                              
                              <tr>
                                  <td><label>ID BUKU</label></td>
                                  <td><label>: </label></td>
                                  <td><label><?php echo $row['id_buku']; ?></label></td> 
                              </tr>
                               <tr>
                                  <td><label>JUDUL</label></td>
                                  <td><label>: </label></td>
                                  <td><label><?php echo $row['judul']; ?></label></td> 
                              </tr>
                              <tr>
                                  <td><label>ID KASIR</label></td>
                                  <td><label>: </label></td>
                                 <td><label><?php echo $row['id_kasir']; ?></label></td> 
                              </tr>
                             
                               <tr>
                                 <td><label>JUMLAH</label></td>
                                  <td><label>: </label></td>
                                  <td><label><?php echo $row['nilai_a']; ?></label></td> 
                              </tr>
                               <tr>
                                 <td><label>HARGA JUAL</label></td>
                                  <td><label>: </label></td>
                                 <td><label><?php echo $row['nilai_b']; ?></label></td> 
                              </tr>
                              
                                      <tr>
                                 <td><label>TANGGAL</label></td>
                                  <td><label>: </label></td>
                                   <td><label><?php echo $row['tgl']; ?></label></td> 
                              </tr>
							  
                               <tr>
                                 <td><label>TOTAL</label></td>
                                  <td><label>: </label></td>
                                 <td><label><?php echo $row['jumlah_nilai']; ?></label></td> 
                              </tr> 
                          </table>
        
    </div> 
    <a href="doc2.php?token=<?php echo $row['id_nilai'] ?>">Export to doc</a>
                                                                                        
    </div>
       </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->


<?php } ?>

 