<?php
include 'assets/templete/lo.php';
include 'assets/templete/topbar.php';
include 'assets/templete/header.php';

?>


<html>
  <body>

  
  <div class="container" style="background-color: cadetblue">
  <div class="header" style="padding: 50px">
  <h1 style="text-align:center" style="position: relative" >ADMINISTRASI</h1>
</div>
  </div>
<section id="about" class="about">
      <div class="container" style="padding: 100px">

      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pembuatan Ktp</h3>
              </div>
              <!-- /.card-header -->
              <form action="<?php echo base_url()?>index.php/payun/home" method="post">
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="name" class="form-control" id="inputnama" placeholder="nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tempat tanggal Lahir</label>
                    <input type="name" class="form-control" id="inputttl" placeholder="ttl">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <input type="name" class="form-control" id="inputjeniskelamin" placeholder="jeniskelamin">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="name" class="form-control" id="inputalamat" placeholder="alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Agama</label>
                    <input type="name" class="form-control" id="inputagama" placeholder="agama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status Perkawinan</label>
                    <input type="name" class="form-control" id="inputstatus" placeholder="status">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pekerjaan</label>
                    <input type="name" class="form-control" id="inputspekerjaan" placeholder="pekerjaan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kewarganegaraan</label>
                    <input type="name" class="form-control" id="inputwarganegara" placeholder="kewarganegaraan">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
</div>
</section>
  </body>
</html>



















<?php
 include 'assets/templete/footer.php';
?>
