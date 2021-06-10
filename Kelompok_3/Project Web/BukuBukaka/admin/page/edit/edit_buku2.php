
<?php 

  require "koneksi.php";
  require "config/lib.php";


if(isset($_POST['btnUbah'])){

  

  # Baca Variabel Data Form

  $id_buku          = $_POST['id_buku'];
  $judul            = $_POST['judul'];
  $noisbn          = $_POST['noisbn'];
  $penulis          = $_POST['penulis'];
  $penerbit         = $_POST['penerbit'];
  $tahun            = $_POST['tahun'];
  $stok             = $_POST['stok'];
  $harga_pokok      = $_POST['harga_pokok'];
  $harga_jual       = $_POST['harga_jual'];
  $ppn              = $_POST['ppn'];
  $diskon           = $_POST['diskon'];
 
         $Token = $_GET['Token'];
         $dat = $mysqli->query("UPDATE buku SET   
                id_buku         = '$id_buku',
                judul           = '$judul',
                noisbn         = '$noisbn',
                penulis         = '$penulis',
                penerbit        = '$penerbit',
                tahun           = '$tahun',
                stok            = '$stok',
                harga_pokok     = '$harga_pokok',
                harga_jual      = '$harga_jual',
                ppn             = '$ppn',
                diskon          = '$diskon'

                                  
                                                 WHERE id_buku               = '$Token'")  ;

 
 if($dat){
           echo "<script>alert('Berhasil di ubah');location.href='?page=data_buku2'</script>";
           // echo "<meta http-equiv='refresh' content='0; url=?page=input_data'>";
         } else {
           echo "<script>alert('Oops! Terjadi Kesalahan ');location.href='javascript:history.back()';</script>";
         }
      

        

   
} // Penutup POST
$Token = $_GET['Token'];
$cek = $mysqli->query("SELECT * FROM  buku WHERE id_buku='$Token'");
  while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
?>
<section id_buku="main-slid_bukuer1" class="carousel">
        
        
    </section><!--/#main-slid_bukuer-->

    <section id_buku="services">
        <div class="container">
            <div class="box first">
            <marquee behavior="scroll" >APLIKASI TOKO BUKU</marquee>
                <div class="row">
                <header class="panel-heading">
                              <h3 align="center">Sunting Data Buku </h3><br>
                             
                          </header>
<!-- page start-->
<div class="row">
    <div class="col-lg-5">
        <section class="panel">
            
             
  <div class="panel-body pull-center">
    <div class="form">
      <form class="form-horizontal form-label-left"  enctype="multipart/form-data"  action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <div class="row">
      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">BUKU ID: <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
         <input  class="form-control col-md-8 col-xs-12"   name="id_buku" value="<?php echo $row['id_buku']; ?>" required type="text">      
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">JUDUL : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="judul" value="<?php echo $row['judul']; ?>" required type="text">
        </div>
      </div>



      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">NO ISBN : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="noisbn" value="<?php echo $row['noisbn']; ?>" required type="text">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">PENULIS : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="penulis" value="<?php echo $row['penulis']; ?>" required type="text">
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">PENERBIT : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="penerbit" value="<?php echo $row['penerbit']; ?>" required type="text">
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">TAHUN : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="tahun" value="<?php echo $row['tahun']; ?>" required type="text">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">STOK : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="stok" value="<?php echo $row['stok']; ?>" required type="text">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">HARGA POKOK : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="harga_pokok" value="<?php echo $row['harga_pokok']; ?>" required type="text">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">HARGA JUAL : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="harga_jual" value="<?php echo $row['harga_jual']; ?>" required type="text">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">PPN : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="ppn" value="<?php echo $row['ppn']; ?>" required type="text">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-4 col-sm-4 col-xs-8" for="name">DISKON : <span class="required"></span></label>
        <div class="col-md-8 col-sm-8 col-xs-12">                                            
        <input  class="form-control col-md-8 col-xs-12"   name="diskon" value="<?php echo $row['diskon']; ?>" required type="text">
        </div>
      </div>

                                                                                       
   <div class="item form-group"> 
                <div class="col-md-12 col-sm-12 col-xs-12" align="right">                                            
                  <a href="javascript:history.back()" class="btn btn-warning">Batal</a>  
                  <button class="btn btn-primary" name="btnUbah">Simpan</button>  
                </div>
            </div>
</form>

                            
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
              </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->

<?php } ?>