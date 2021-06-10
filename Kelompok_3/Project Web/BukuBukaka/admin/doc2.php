  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
  img .foto
  {
    width: 1%;
    height: 1%;
  }
  </style>
<?php
//koneksi ke database
include "config/koneksi.php";
$date = date('d-m-y');
//mengambil data dari tabel
$name = "Detail Umum";
  header("Content-Disposition: attachment; filename=".$name." ".$date.".doc");
     header("Content-type: application/download");
  
   echo "<pre>\n"; //start preformatted output
  echo '<<<EOH
       <html xmlns:v="urn:schemas-microsoft-com:vml"
      xmlns:o="urn:schemas-microsoft-com:office:office"
      xmlns:w="urn:schemas-microsoft-com:office:word"
      xmlns="http://www.w3.org/TR/REC-html40">
      
      <head>
      <meta http-equiv=Content-Type content="text/html; charset=utf-8">
      <meta name=ProgId content=Word.Document>
      <meta name=Generator content="Microsoft Word 9">
      <meta name=Originator content="Microsoft Word 9">
      <!--[if !mso]>
      <style>
      v\:* {behavior:url(#default#VML);}
      o\:* {behavior:url(#default#VML);}
      w\:* {behavior:url(#default#VML);}
      .shape {behavior:url(#default#VML);}
      </style>
      <![endif]-->
       
      <!--[if gte mso 9]><xml>
       <w:WordDocument>
        <w:View>Print</w:View>
        <w:DoNotHyphenateCaps/>
        <w:PunctuationKerning/>
        <w:DrawingGridHorizontalSpacing>9.35 pt</w:DrawingGridHorizontalSpacing>
        <w:DrawingGridVerticalSpacing>9.35 pt</w:DrawingGridVerticalSpacing>
       </w:WordDocument>
      </xml><![endif]-->
      <style>
      <!--
       /* Font Definitions */
      @font-face
        {font-family:Verdana;
        panose-1:2 11 6 4 3 5 4 4 2 4;
        mso-font-charset:0;
        mso-generic-font-family:swiss;
        mso-font-pitch:variable;
        mso-font-signature:536871559 0 0 0 415 0;}
       /* Style Definitions */
      p.MsoNormal, li.MsoNormal, div.MsoNormal
        {mso-style-parent:"";
        margin:0in;
        margin-bottom:.0001pt;
        mso-pagination:widow-orphan;
        font-size:7.5pt;
              mso-bidi-font-size:8.0pt;
        font-family:"Verdana";
        mso-fareast-font-family:"Verdana";}
      p.small
        {mso-style-parent:"";
        margin:0in;
        margin-bottom:.0001pt;
        mso-pagination:widow-orphan;
        font-size:1.0pt;
              mso-bidi-font-size:1.0pt;
        font-family:"Verdana";
        mso-fareast-font-family:"Verdana";}
      @page Section1
        {size:8.5in 11.0in;
        margin:1.0in 1.25in 1.0in 1.25in;
        mso-header-margin:.5in;
        mso-footer-margin:.5in;
        mso-paper-source:0;}
      div.Section1
        {page:Section1;}
      -->
      </style>
      <!--[if gte mso 9]><xml>
       <o:shapedefaults v:ext="edit" spidmax="1032">
        <o:colormenu v:ext="edit" strokecolor="none"/>
       </o:shapedefaults></xml><![endif]--><!--[if gte mso 9]><xml>
       <o:shapelayout v:ext="edit">
        <o:idmap v:ext="edit" data="1"/>
       </o:shapelayout></xml><![endif]-->
        
      </head>
      <body>
 ';
include "config/lib.php";
$token = $_GET['token'];
$cek = $mysqli->query("SELECT * FROM  tb_nilai WHERE id_nilai ='$token'");
  while ($row = $cek->fetch_array(MYSQLI_ASSOC)) {  
?>
 <style type="text/css">
    .jumbotron {
    width: 70%;
    box-shadow: 2px  1px 9px 0  #333;
     
    }
    </style>
                                                                          
 
 

 
<div align="center"> 

 <div class="row   "  >
 <h2 style="font-size:19px;">Detail Data Penjualan</h2>
 <hr>

               
                          
              
           

       <div class="col-md-9 col-sm-9 col-xs-12" style="font-size:14px;">
 
         <table class="table     table-hover" border="0" width="100%">
                                <tr>
                                 <td><label>Id Penjualan</label></td>
                                  <td><label>: </label></td>
                                 <td><label><?php echo $row['id_nilai']; ?></label></td> 
                              </tr>
                              
                              <tr>
                                  <td><label>Id Buku</label></td>
                                  <td><label>: </label></td>
                                  <td><label><?php echo $row['id_buku']; ?></label></td> 
                              </tr>
                               <tr>
                                  <td><label>Judul</label></td>
                                  <td><label>: </label></td>
                                  <td><label><?php echo $row['judul']; ?></label></td> 
                              </tr>
                              <tr>
                                  <td><label>Id KASIR</label></td>
                                  <td><label>: </label></td>
                                 <td><label><?php echo $row['id_kasir']; ?></label></td> 
                              </tr>
                             
                               <tr>
                                 <td><label>Jumlah</label></td>
                                  <td><label>: </label></td>
                                  <td><label><?php echo $row['nilai_a']; ?></label></td> 
                              </tr>
                               <tr>
                                 <td><label>Harga Jual</label></td>
                                  <td><label>: </label></td>
                                 <td><label><?php echo $row['nilai_b']; ?></label></td> 
                              </tr>
                              
                                      <tr>
                                 <td><label>Tanggal</label></td>
                                  <td><label>: </label></td>
                                   <td><label><?php echo $row['tgl']; ?></label></td> 
                              </tr>
							  
                               <tr>
                                 <td><label>Total</label></td>
                                  <td><label>: </label></td>
                                 <td><label><?php echo $row['jumlah_nilai']; ?></label></td> 
                              </tr>
					
                                  
 
  <td rowspan=2 style='padding:.75pt .75pt .75pt .75pt'>
  <?php  $cek = $mysqli->query("SELECT a.*,b.nrp,b.nama
                                                                FROM militer as a
                                                                JOIN tbl_umum as b
                                                                ON a.id_umum=b.id_umum
                                                                 WHERE nrp ='$token'
                                                                ORDER BY a.kd_militer DESC");
                                        while ($ro = $cek->fetch_array(MYSQLI_ASSOC)) {  
                                          ?>
  <p>- <label><?php echo $ro['pend_militer']; ?> / <?php echo $ro['thn_lulus']; ?></label></p> 
   <?php } ?>
  
  </td>
 </tr>
                                  
                          </table>
        
    </div> 
    
                                                                                        
  
<span style='mso-no-proof:yes'>
  <?php 
                                 if (!empty($row['photo']))
                                     {
                                      echo '<img width=296 height=399 id="_x0000_i1027" src="http://localhost/toko/admin/'.$row['photo'].'" alt="http://localhost/toko/admin/'.$row['photo'].'">';
                                     } 
                                               else
                                     {
                                      echo '<img width=296 height=399 id="_x0000_i1027" src=http://localhost/toko/admin/photo/profil.jpg  />';
                                      }
                                ?>     
</span>



</p>

<p><o:p>&nbsp;</o:p></p>

<?php } ?>

