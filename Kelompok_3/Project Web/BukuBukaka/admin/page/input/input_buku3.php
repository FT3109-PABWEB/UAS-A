<?php
error_reporting(0);
include "koneksi.php";
$ambil = mysql_query("SELECT MAX(id_buku) AS id_buku FROM buku");
$tampil1 = mysql_fetch_array($ambil);
$id=$tampil1['id_buku'];
$nourut = (int)  substr($id, 4, 8);
$nourut++;
$char = "Buk.";
$id_buku = $char . sprintf("%02s", $nourut);
?>
<?php
 error_reporting(0);
 include "config/koneksi.php";



if(isset($_POST['btnSimpan'])){
 # Baca Variabel Data Form
  $id_buku          = $_POST['id_buku'];
  $judul           = $_POST['judul'];
  $NOISBN          = $_POST['NOISBN'];
  $PENULIS         = $_POST['PENULIS'];
  $PENERBIT        = $_POST['PENERBIT'];
  $TAHUN           = $_POST['TAHUN'];
  $STOK             = $_POST['STOK'];
  $HARGA_POKOK      = $_POST['HARGA_POKOK'];
  $HARGA_JUAL       = $_POST['HARGA_JUAL'];
  $PPN             = $_POST['PPN'];
  $DISKON         = $_POST['DISKON'];
     
 

    $myQry = $mysqli->query("INSERT INTO buku (id_buku,judul,NOISBN,PENULIS,PENERBIT,TAHUN,STOK,HARGA_POKOK,HARGA_JUAL,PPN,DISKON)
VALUES ('$id_buku','$judul','$NOISBN','$PENULIS','$PENERBIT','$TAHUN','$STOK','$HARGA_POKOK','$HARGA_JUAL','$PPN','$DISKON')") or die(mysqli_error($mysqli));
 
 
         if($myQry){
           echo "<script>alert('Berhasil di simpan');location.href='?page=page/data/data_buku3'</script>";
           // echo "<meta http-equiv='refresh' content='0; url=?page=data_data'>";
         } else {
           echo "<script>alert('Oops! Terjadi Kesalahan ');location.href='javascript:history.back()';</script>";
         }
     

        
  
      
   
} // Penutup POST
  
  
 

?>
<script type="text/javascript">
  function startCalculate(){
    interval=setInterval("Calculate()",10);
  }
  function Calculate(){
    var pokok=document.form1.HARGA_POKOK.value;
    var jual=document.form1.HARGA_JUAL.value;
    document.form1.HARGA_JUAL.value=pokok*1.2;
  }

  function stopCalc(){
    clearInterval(interval);
  }
  function startCalculate1(){
    interval=setInterval("Calculate1()",10);
  }
  function Calculate1(){
    var jual=document.form1.HARGA_JUAL.value;
    var PPN=document.form1.PPN.value;
    document.form1.PPN.value=jual*0.15;
  }

  function stopCalc1(){
    clearInterval(interval);
  }
  function startCalculate2(){
    interval=setInterval("Calculate2()",10);
  }
  function Calculate2(){
    var jual=document.form1.HARGA_JUAL.value;
    var DISKON=document.form1.DISKON.value;
    document.form1.DISKON.value=jual*0.25;
  }

  function stopCalc2(){
    clearInterval(interval);
  }
</script>
<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
            <div class="box first">
                <div class="row">
                 <header class="panel-heading">
                              <h3 align="center"><font face="Times New Roman">Input Data buku</font></h3><br>
                             
                          </header>
<form class="form-horizontal form-label-center" id="form1" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <div class="row" align="center">
    <div class="col-md-6 col-sm-6 col-xs-12" align="center">
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">BUKU ID : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
       <input  class="form-control col-md-8 col-xs-12"   name="id_buku"  required type="text" value="<?php echo $id_buku ?>"/>
                </div>
            </div>
           <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">judul: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="judul"  required type="text">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NO ISBN : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="NOISBN"  required type="text">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">PENULIS: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="PENULIS"  required type="text">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">PENERBIT: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="PENERBIT"  required type="text">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">TAHUN: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="TAHUN"  required type="date">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">STOK : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="STOK"  required type="text">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">HARGA POKOK : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" id="HARGA_POKOK"  name="HARGA_POKOK"  required type="text">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">HARGA JUAL : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"  id="HARGA_JUAL" name="HARGA_JUAL"  onfocus="startCalculate()" onblur="stopCalc()">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">PPN: <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"  id="PPN" name="PPN"  required type="text" onfocus="startCalculate1()" onblur="stopCalc1()">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">DISKON : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" id="DISKON"  name="DISKON"  required type="text" onfocus="startCalculate2()" onblur="stopCalc2()">
                </div>
            </div>
            <div class="item form-group" align="center"> 
                <div class="col-md-12 col-sm-12 col-xs-12" align="right">                                            
                  <a href="javascript:history.back()"  class="btn btn-warning">Batal</a>  
                  <button class="btn btn-primary" name="btnSimpan">Simpan</button>  
                </div>
            </div>
        </div>   
        
                                                                                        
  </div>
</form>
 </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->
