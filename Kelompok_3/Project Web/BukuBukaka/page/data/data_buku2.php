<?php
error_reporting(0);
// database ke table
$data=mysql_query("select * from buku order by id_buku");
$jumlah=mysql_num_rows($data);
?>
<?php
include ("koneksi.php");
$query = "select * from buku";
$sql1 = mysql_query($query);
$total = mysql_num_rows($sql1);
$nomor = 0;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$nomor = 0;
$row = 20;
$max= ceil($total/$row);
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
                            <a href="?page=page/input/input_buku2" class="btn btn-primary">+ Tambah Data</a>
                             <a href="page/simpanxls/simpanbukuxls.php" class="btn btn-danger" >+ Simpan Excel</a>
                          </header>
						  <script language="javascript">
							function check_all()
								{
									var chk = document.getElementsByName('check_list[]');
									for (i = 0; i < chk.length; i++)
									chk[i].checked = true ;
								}

							function uncheck_all()
								{
									var chk = document.getElementsByName('check_list[]');
									for (i = 0; i < chk.length; i++)
									chk[i].checked = false ;
								}
						  </script>
						  <form method="post" action="?page=page/deleteall/deleteall_buku">
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example2">
                                      <thead>
                                      <tr>
									      <th>&nbsp;</th>
		                                  <th><div align="justify"><center>No</div></th>
                                          <th><div align="justify"><center>BUKU ID</div></th>
                                          <th><div align="justify"><center>JUDUL</div></th>
                                          <th><div align="justify"><center>PENERBIT</div></th>
                                          <th><div align="justify"><center>STOK</div></th>
                                         
                                         
                                          
                                          <th class="hidden-phone"><div align="justify"><center>Aksi</div></th>
                                      </tr>
                                      </thead>
                                      <tbody>
            
									    <?php
	  if ((isset($_POST['submit'])) AND ($_POST['search'] <> ""))
    {
	$search = $_POST['search'];
	$sql1 = mysql_query("SELECT * FROM buku WHERE id_buku LIKE '%$search%'") or die(mysql_error());
	}
		
	else{
	$sql1 = mysql_query("SELECT * FROM buku  order by id_buku asc LIMIT $nomor,$row");
	}
	
	{
	$no=0;
	$total = mysql_num_rows($sql1);
	   while ($data = mysql_fetch_array($sql1)){
	  $nomor++;	
     ?>
                                      <tr class="gradeX">
                                       
										  <td height="27" align="center"><input type="checkbox" name="check_list[]" value="<?php echo $data['id_buku'];?>"/></td>
										  <td align="center"><?php echo $nomor;?></td>
                                          <td align="center"><?php echo $data['id_buku'];?></td>
                                          <td align="center"><a href="?page=page/detail/detail_buku&id_buku=<?php echo $data['id_buku'];?>"><?php echo $data['judul']?></a></td>
                                          <td align="center"><?php echo $data['penerbit'];?></td>
                                          <td align="center"><?php echo $data['stok'];?></td>
                                               
                                         
                                          <td align="center" class="center hidden-phone">
                                             <a href="?page=page/edit/edit_buku&id_buku=<?php echo $data['id_buku']; ?>" class="btn btn-primary btn-xs">Edit</i></a>
                                             <a href="?page=page/delete/delete_buku&id_buku=<?php echo $data['id_buku']; ?>"  onClick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger btn-xs">Hapus</i></a>
                                          </td>
                                      </tr>
									  <?php 
  }
	}  
	?>
                                      
									   <table width="100%" cellpadding="3" cellspacing="1">
  <tr>
      <td width="3%" style="padding-bottom:30px;"><img src="img/1.png" width="50" height="20"></td>
      <td style="padding-bottom:30px;"><a href="#" onClick="check_all()">Chek all</a>&nbsp;&nbsp; <a href="#" onClick="uncheck_all()">Unchek all</a>
        <input type="submit" name="hapus" value="HAPUS" onClick="return confirm('Hapus yang ditandai?')"/>
        &nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
	   </table>
                                      </tbody>
                                      <tfoot>
                                     
                                      </tfoot>
                          </table>
						  <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
     <tr>
       <td width="79%"><font size="3" align="left"> Jumlah data: <?php echo $total; ?></td>
       <td width="21%">Halaman: 
           <?php for ($h = 1; $h <= $max; $h++) 
 { $list[$h] = $row * $h - $row; echo "<a href='?page=buku&hal=$list[$h]'>$h</a> ";}
?>
  </td>
  </tr>
</table>
</div>
</div>
</div>
</div>
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
