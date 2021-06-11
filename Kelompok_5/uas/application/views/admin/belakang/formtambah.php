<?php
include ('back/header.php');
include ('back/menu.php');?>


<section class="content">
    <div class="container-fluid">

<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">INPUT RTRW</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo base_url(); ?>index.php/Crtrw/insert" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="jabatan">
                    </div>
                  </div>

                 
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="nama">
                    </div>
                  </div>

                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ttl</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="ttl">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">pendidikan</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="pendidikan">
                    </div>
                  </div>
                  

                                   
                <!-- /.card-body -->
                <div class="card-footer">
                <button type="submit" class="btn btn-info">Simpan</button>
                
                </div>
                <!-- /.card-footer -->
                </form>
            </div>

</div>
</section>
            
            
<?php
include ('back/footer.php');
?>