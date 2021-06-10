<section id="main-slider1" class="carousel">
        
        
    </section><!--/#main-slider-->

    <section id="services">
        <div class="container">
            
                    
<div class="col-md-12" align="left">
<label align="left">Cari Data Berdasarkan</label>
</div>
<form class="form-horizontal form-label-left" novalidate action="?page=cari_penjualan" method="POST" name="cari">
    <div class="row">
        <div class="col-md-12">
         
            <div class="col-md-4 col-sm-4 col-xs-12">
                <input type="text" class="search form-control" name="search" id="searchid" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;" placeholder="Search for people" name="nrp" />  
                <div     id="result"></div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12" align="left">
                <button class="btn btn-primary" name="submit">Cari..</button>
            </div>
        </div>
    </div>   
</form>
         <br>
         <hr>
<section class="panel">       
    <table class="table table-striped   table-hover">
        <thead>
        <tr>
            <th>Nomor</th>
			<th><i class=" fa fa-edit"></i>PENJUALAN ID</th>   
			<th><i class=" fa fa-edit"></i>BUKU ID</th> 
            <th><i class=" fa fa-edit"></i>JUDUL</th>   
            <th><i class=" fa fa-edit"></i>KASIR ID</th>   
            <th><i class=" fa fa-edit"></i>JUMLAH</th> 
            <th><i class=" fa fa-edit"></i>HARGA JUAL</th>  
			<th><i class=" fa fa-edit"></i>TANGGAL</th> 
			<th><i class=" fa fa-edit"></i>TOTAL</th> 
            <!-- <th><i class=" fa fa-edit"></i> Jabatan Sekarang</th>
            <th><i class=" fa fa-edit"></i> Jabatan Sekarang</th>           -->                
        </tr>
        </thead>
        <tbody align="left">
         <?php
         error_reporting(0);
		  require "config/koneksi.php";
          require "config/lib.php";
               
        if ((isset($_POST['submit'])) AND ($_POST['search'] <> ""))
        {
         $search = $_POST['search'];
         $sql1 = $mysqli->query("SELECT * FROM tb_nilai WHERE id_nilai LIKE '%$search%' or id_nilai LIKE '$search'");
         }
         else{
             $sql1 = $mysqli->query("SELECT * FROM tb_nilai  order by id_nilai asc LIMIT 5");
         }
         $jumlah1 = mysqli_num_rows($sql1);
           {
           $no=0;
           while ($tampil = $sql1->fetch_array(MYSQLI_ASSOC)){
            $Nomor ++;
    
    ?>
        
        <tr>
            <td><?php echo $Nomor ?> </td>
       
            <td class="hidden-phone"><?php echo $tampil['id_nilai']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['id_buku']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['judul']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['id_kasir']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['nilai_a']; ?> </td>
            <td class="hidden-phone"><?php echo $tampil['nilai_b']; ?> </td>
			<td class="hidden-phone"><?php echo $tampil['tgl']; ?> </td>
			<td class="hidden-phone"><?php echo $tampil['jumlah_nilai']; ?> </td>
            <td class="hidden-phone"><a href="?page=carilappenjualan&token=<?php echo $tampil['id_nilai'];?>">Lihat Detail</a> </td>  
          
        </tr>     
        <?php } }?>             
        <tr>
            <td>Jumlah Data</td>
            <td>: <?php echo $jumlah1 ?> </td>
        </tr>      
        </tbody>
    </table>
</section>                                                                                    
 


                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->
