<?php
//koneksi ke database
include "config/koneksi.php";
 
//mengambil data dari tabel
$name = "Detail Umum";
$token = $_GET['token'];
$cek = $mysqli->query("SELECT *  FROM tb_nilai WHERE id_nilai ='$token'");
$data = array();
 while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
    array_push($data, $row);
       $id_nilai  		= $row['id_nilai'];
       $id_buku        = $row['id_buku'];
       $judul          = $row['judul'];
       $id_kasir       = $row['id_kasir'];
       $nilai_a        = $row['nilai_a'];
       $nilai_b        = $row['nilai_b'];
       $tgl            = $row['tgl'];
       $jumlah_nilai   = $row['jumlah_nilai'];
   
} 
   header("Cache-Control: ");// leave blank to avoid IE errors
        header("Pragma: ");// leave blank to avoid IE errors
         header("Content-type: application/octet-stream");
       
  header("Content-Disposition: attachment; filename=".$name.".doc");
  header("Content-type: application/download");
  
  //echo "<pre>\n"; //start preformatted output
  echo ' <h2 style="font-size:19px;">Detail Data Umum</h2>
 <hr>'; //write "intro" ;)
  echo '<table class="table     table-hover" border="0">
                              
                              <tr>
                                  <td><label>ID BUKU</label></td>
                                  <td><label>: </label></td>
                                  <td><label>'.$id_nilai.'</label></td> 
                              </tr>
                              <tr>
                                  <td><label>ID BUKU</label></td>
                                  <td><label>: </label></td>
                                 <td><label>'.$id_buku.'</label></td> 
                              </tr>
                             
                               <tr>
                                 <td><label>JUDUL</label></td>
                                  <td><label>: </label></td>
                                  <td><label>'.$judul.'</label></td> 
                              </tr>
                               <tr>
                                 <td><label>ID KASIR</label></td>
                                  <td><label>: </label></td>
                                 <td><label>'.$id_kasir.'</label></td> 
                              </tr>
                               <tr>
                                 <td><label>JUMLAH</label></td>
                                  <td><label>: </label></td>
                                  <td><label>'.$nilai_a.'</label></td> 
                              </tr>
                               <tr>
                                 <td><label>HARGA JUAL</label></td>
                                  <td><label>: </label></td>
                                 <td><label>'.$nilai_b.'</label></td> 
                              </tr>
                               <tr>
                                 <td><label>TANGGAL</label></td>
                                  <td><label>: </label></td>
                                 <td><label>'.$tgl.'</label></td> 
                              </tr>
                               	           <tr>
                                 <td><label>TOTAL</label></td>
                                  <td><label>: </label></td>
                                   <td><label>'.$jumlah_nilai.'</label></td> 
                              </tr>
							  
                                  
                          </table>';
    echo '<img src="C:/xampp/xampp/htdocs/toko/admin/'.$photo.'">';
  
   
  
  echo "\n\n"; //write "outtro" :)

?>