<?php
//koneksi ke database
include "config/koneksi.php";
 
//mengambil data dari tabel
$name = "Detail Umum";
$token = $_GET['token'];
$cek = $mysqli->query("SELECT *  FROM buku WHERE judul ='$token'");
$data = array();
 while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
    array_push($data, $row);
    $photo                	= $row['photo'];
    $id_buku                = $row['id_buku'];
    $noisbn                 = $row['noisbn'];
    $judul           		= $row['judul'];
    $penerbit           	= $row['penerbit'];
    $penulis     			= $row['penulis'];
    $harga_pokok 			= $row['harga_pokok'];
    $harga_jual             = $row['harga_jual'];
   
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
                                  <td><label>'.$id_buku.'</label></td> 
                              </tr>
                              <tr>
                                  <td><label>NO ISBN</label></td>
                                  <td><label>: </label></td>
                                 <td><label>'.$noisbn.'</label></td> 
                              </tr>
                             
                               <tr>
                                 <td><label>JUDUL</label></td>
                                  <td><label>: </label></td>
                                  <td><label>'.$judul.'</label></td> 
                              </tr>
                               <tr>
                                 <td><label>PENERBIT</label></td>
                                  <td><label>: </label></td>
                                 <td><label>'.$penerbit.'</label></td> 
                              </tr>
                               <tr>
                                 <td><label>PENULIS</label></td>
                                  <td><label>: </label></td>
                                  <td><label>'.$penulis.'</label></td> 
                              </tr>
                               <tr>
                                 <td><label>HARGA POKOK</label></td>
                                  <td><label>: </label></td>
                                 <td><label>'.$harga_pokok.'</label></td> 
                              </tr>
                               <tr>
                                 <td><label>HARGA JUAL</label></td>
                                  <td><label>: </label></td>
                                 <td><label>'.$harga_jual.'</label></td> 
                              </tr>
                               	           <tr>
                                 <td><label>PPN</label></td>
                                  <td><label>: </label></td>
                                   <td><label>'.$ppn.'</label></td> 
                              </tr>
							  
                               <tr>
                                 <td><label>Diskon</label></td>
                                  <td><label>: </label></td>
                                 <td><label>'.$diskon.'</label></td> 
                              </tr>
                              
                                  
                          </table>';
    echo '<img src="C:/xampp/xampp/htdocs/toko/admin/'.$photo.'">';
  
   
  
  echo "\n\n"; //write "outtro" :)

?>