<?php
 error_reporting(0);
 include "config/koneksi.php";



if(isset($_POST['btnSimpan'])){
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
     
 

    $myQry = $mysqli->query("INSERT INTO buku (id_buku,judul,noisbn,penulis,penerbit,tahun,stok,harga_pokok,harga_jual,ppn,diskon)
VALUES ('$id_buku','$judul','$noisbn','$penulis','$penerbit','$tahun','$stok','$harga_pokok','$harga_jual','$ppn','$diskon')") or die(mysqli_error($mysqli));
 
 
         if($myQry){
           echo "<script>alert('Berhasil di simpan');location.href='?page=page/data/data_buku2'</script>";
           // echo "<meta http-equiv='refresh' content='0; url=?page=input_data2'>";
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
    var pokok=document.form1.harga_pokok.value;
    var jual=document.form1.harga_jual.value;
    document.form1.harga_jual.value=pokok*1.2;
  }

  function stopCalc(){
    clearInterval(interval);
  }
  function startCalculate1(){
    interval=setInterval("Calculate1()",10);
  }
  function Calculate1(){
    var jual=document.form1.harga_jual.value;
    var ppn=document.form1.ppn.value;
    document.form1.ppn.value=jual*0.15;
  }

  function stopCalc1(){
    clearInterval(interval);
  }
  function startCalculate2(){
    interval=setInterval("Calculate2()",10);
  }
  function Calculate2(){
    var jual=document.form1.harga_jual.value;
    var diskon=document.form1.diskon.value;
    document.form1.diskon.value=jual*0.25;
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
       <input  class="form-control col-md-8 col-xs-12"   name="id_buku"  required type="text">
                </div>
            </div>
           <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">JUDUL : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="judul"  required type="text">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">NO ISBN : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="noisbn"  required type="text">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">PENULIS : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="penulis"  required type="text">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">PENERBIT : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="penerbit"  required type="text">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">TAHUN : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="tahun"  required type="text">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">STOK : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"   name="stok"  required type="text">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">HARGA POKOK : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" id="harga_pokok"  name="harga_pokok"  required type="text">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">HARGA JUAL : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"  id="harga_jual" name="harga_jual"  onfocus="startCalculate()" onblur="stopCalc()">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">PPN : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12"  id="ppn" name="ppn"  required type="text" onfocus="startCalculate1()" onblur="stopCalc1()">
                </div>
            </div>
            <div class="item form-group" align="center">
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">DISKON : <span class="required"></span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">                                            
                  <input  class="form-control col-md-8 col-xs-12" id="diskon"  name="diskon"  required type="text" onfocus="startCalculate2()" onblur="stopCalc2()">
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
