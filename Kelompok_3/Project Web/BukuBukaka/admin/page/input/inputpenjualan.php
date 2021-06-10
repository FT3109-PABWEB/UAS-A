<?php
error_reporting(0);
include "koneksi.php";
$ambil = mysql_query("SELECT MAX(id_nilai) AS id_nilai FROM tb_nilai");
$tampil1 = mysql_fetch_array($ambil);
$id=$tampil1['id_nilai'];
$nourut = (int)substr($id, 4, 8);
$nourut++;
$char = "Pen.";
$id_nilai = $char . sprintf("%02s", $nourut);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
     <link rel="stylesheet" type="text/css" href="../plugins/tigra_calendar/tcal.css"/>
<script type="text/javascript" src="../plugins/tigra_calendar/tcal.js"></script> 
    
</head>


<body>
   
<form action="" method="post">
<table width="908" align="left" class="table table-striped table-bordered table-condensed">
   
    <tr>
      <td colspan="3"><strong>Input Penjualan</strong></td>
    </tr>
    <tr>
      <td width="21%"><strong>Id Penjualan</strong></td>
      <td width="2%"><strong>:</strong></td>
      <td width="328"><input name="id_nilai" type="text" placeholder="Masukan ID Buku" required="required" value="<?php echo $id_nilai ?>"/></td>
    </b></td>
    </tr>
     <tr>
    <td>Id Buku</td>
    <td>:</td>
    <td>
      <?php    
// Koneksi  
mysql_connect("localhost","root","");    
mysql_select_db("jendela_buku_inar");    
$result = mysql_query("select * from buku");  
$jsArray = "var prdNam = new Array();\n";  
echo '<select name="id_buku" onchange="document.getElementById(\'prd_nam\').value = prdNam[this.value]">';  
echo '<option>-Pilih Satu-</option>';  
while ($row = mysql_fetch_array($result)) {  
echo '<option value="' . $row['id_buku'] . '">' . $row['id_buku'] . '</option>';  
$jsArray .= "prdNam['" . $row['id_buku'] . "'] = '" . addslashes($row['judul']) . "';\n";  
}  
echo '</select>';  
?>
    </span></td>
  </tr>
  <tr>
    <td>Judul</td>
    <td>:</td>
    <td><input type="text" name="judul" id="prd_nam" />
  <script type="text/javascript">  
<?php echo $jsArray; ?>  
</script> </td>
  </tr>
  <tr>
      <td><b>Id Kasir</b></td>
      <td><b>:</b></td>
      
     <td> <?php
                  mysql_connect("localhost","root","");
                  mysql_select_db("jendela_buku_inar");
                  $result=mysql_query("select * from kasir");
                  $jsArray="var prdName=new Array();\n";
                  echo '<select class="form-control col-md-8 col-xs-12" name="id_kasir" onchange="changevalue(this.value)">';
                  echo'<option>Pilih :</option>';
                  while ($row = mysql_fetch_array($result)){
                    echo '<option value="'.$row['id_kasir'].'">'. $row['id_kasir'].'</option>';
                  }
                  echo '</select>';
                  ?></td>
    </tr>
    <tr>
      <td width="21%"><strong>Tanggal</strong></td>
      <td width="2%"><strong>:</strong></td>
      <td width="77%"><b>
        <input name="tgl" type="date"  size="40" maxlength="40"  />
    </b></td>
    </tr>
    
     
     <tr>
      <td width="21%"><strong>Jumlah </strong></td>
      <td width="2%"><strong>:</strong></td>
      <td width="77%"><b>
           <input name="txnilai_a" type="text"  size="40" maxlength="40"  />
    
    </tr>
    <tr>
      <td width="21%"><strong>Harga Jual</strong></td>
      <td width="2%"><strong>:</strong></td>
      <td width="77%"><b>
           <input name="txnilai_b" type="text"  size="40" maxlength="40"  />
           </tr>
    
    <tr>
        <td colspan="3">
            <button class="btn btn-primary" name="tbSimpan" type="submit"  value="Simpan"  ><i class="fa fa-save"></i> Simpan</button>
       
        </td>
    </tr>
</table>
</form>
<?php
error_Reporting(0);
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("jendela_buku_inar") or die(mysql_error());
if($_POST['tbSimpan']){
   $id_nilai=$_POST['id_nilai'];
   $id_buku=$_POST['id_buku'];
   $judul=$_POST['judul'];
   $id_kasir=$_POST['id_kasir'];
    $tgl=$_POST['tgl'];
    
    $nilai_a=$_POST['txnilai_a'];
    $nilai_b=$_POST['txnilai_b'];
     
    $hasil=$nilai_a*$nilai_b;
    $sql="INSERT INTO tb_nilai SET id_nilai='$id_nilai',id_buku='$id_buku',judul='$judul',id_kasir='$id_kasir',tgl='$tgl',nilai_a='$nilai_a', nilai_b='$nilai_b', jumlah_nilai='$hasil'";
     echo "<script>alert('Data  Berhasil di simpan')</script>";
      echo "<meta http-equiv='refresh' content='0; url=?page=page/data/data_penjualan'>";
    $query=mysql_query($sql) or die(mysql_error());
    }
    
?>