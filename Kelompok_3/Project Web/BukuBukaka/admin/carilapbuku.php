<?php
include "config/lib.php";
include "config/koneksi.php";
$token = $_GET['token'];
$cek = $mysqli->query("SELECT * FROM  buku WHERE judul ='$token'");
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
 <h2 style="font-size:19px;">Detail Data Buku</h2>
 <hr>

        <div class="col-md-3 col-sm-3 col-xs-12" align="center">
            
            <div class="item form-group">
                 
              <div class="col-md-9 col-sm-9 col-xs-12" style="font-size:14px;">

            
         <table class="table     table-hover" border="0">
							<tr>
                                 <td><label>Id Buku</label></td>
                                  <td><label>: </label></td>
                                 <td><label><?php echo $row['id_buku']; ?></label></td> 
                              </tr>
                              
                              <tr>
                                  <td><label>No ISBN</label></td>
                                  <td><label>: </label></td>
                                  <td><label><?php echo $row['noisbn']; ?></label></td> 
                              </tr>
                               <tr>
                                  <td><label>Judul</label></td>
                                  <td><label>: </label></td>
                                  <td><label><?php echo $row['judul']; ?></label></td> 
                              </tr>
                              <tr>
                                  <td><label>Penerbit</label></td>
                                  <td><label>: </label></td>
                                 <td><label><?php echo $row['penerbit']; ?></label></td> 
                              </tr>
                             
                               <tr>
                                 <td><label>Penulis</label></td>
                                  <td><label>: </label></td>
                                  <td><label><?php echo $row['penulis']; ?></label></td> 
                              </tr>
                              
                               <tr>
                                 <td><label>Harga Pokok</label></td>
                                  <td><label>: </label></td>
                                   <td><label><?php echo $row['harga_pokok']; ?></label></td> 
                              </tr>
							  
                               <tr>
                                 <td><label>Harga Jual</label></td>
                                  <td><label>: </label></td>
                                 <td><label><?php echo $row['harga_jual']; ?></label></td> 
                              </tr>
                              
                                      <tr>
                                 <td><label>PPN</label></td>
                                  <td><label>: </label></td>
                                   <td><label><?php echo $row['ppn']; ?></label></td> 
                              </tr>
							  
                               <tr>
                                 <td><label>Diskon</label></td>
                                  <td><label>: </label></td>
                                 <td><label><?php echo $row['diskon']; ?></label></td> 
                              </tr> 
                          </table>
        
					</div>                                        
                   
                </div>
            </div>  
             
           

        </div>

      
    <a href="doc.php?token=<?php echo $row['judul'] ?>">Export to doc</a>
                                                                                        
    </div>
       </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->


<?php } ?>

 