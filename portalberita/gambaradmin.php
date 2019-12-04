<!DOCTYPE html>
<html>
  <head>
    <title>Admin</title>
    
    <link href="style2.css" rel="stylesheet" type="text/css">
  </head>
  <h1>Admin Page ^~^
<body bgcolor=#F5F5F5>

  <div id="profile">
    <b id="tambah"><a href="tambah.php">Tambah Berita</a></b>
   
    <br> 
   <br>
   <br>
   <b id="logout2"><a href="index.php">Go Page</a>
   </br>
   </br>
   </b>
  </br>
  </div>
<br>

<html>
<head>
<title>Data Berita Admin</title>
</head>

<body>
<?php
include "koneksi4.php";
?>

<center><h3>Berita Terbaru</h3></center>

<?php
$query_ambil_berita = $mysqli->query("SELECT * FROM berita"); //query ambil data berita.
while ($data_berita = $query_ambil_berita->fetch_array()) {
//perulangan untuk menampilkan berita 
?>

<h5 style="margin-bottom: 0px"><?php echo $data_berita['judul']; ?></h5>
<small>Ditulis oleh : <?php echo $data_berita['penulis']; ?>, pada : <?php echo $data_berita['tanggal_posting']; ?></small>
<p>
<?php 
if (is_file("gambar/".$data_berita['gambar']) == TRUE) {
?>
<img src="gambar/<?php echo $data_berita['gambar']; ?>" style="width: 100px; height: 75px; margin: 0 10px 10px 0; display: inline; float: left">
<?php 
} 
?>


<?php echo substr($data_berita['isi_berita'], 0, 300); ?> ... 

<a href="berita_detil.php?id=<?php echo $data_berita['id_berita']; ?>">selengkapnya</a>

</p>


[<a href="hapus.php?id=<?php echo $data_berita['id_berita']; ?>" onclick="return confirm('Anda yakin..?')">Hapus</a>] &nbsp;&nbsp;
[<a href="edit.php?id=<?php echo $data_berita['id_berita']; ?>">Edit</a>] &nbsp;&nbsp;


<hr style="border: dashed 1px #e9e9e9">

<?php 
}
//penutup perulangan while
?>
</body>
</htmL>

</body>
</html>
