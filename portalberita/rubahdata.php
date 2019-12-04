<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop 90's</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  



        <?php
    include "koneksi2.php";

    $id = $_GET["id"];

    $sql = "SELECT * FROM gambar WHERE id='$id'";
    $query = mysqli_query($connect, $sql) or die (mysqli_error());

    if(mysqli_num_rows($query) > 0){
      $data = mysqli_fetch_array($query);
    }
  ?>

  <form action="" method="POST">

    <input type="hidden" name="id" value="<?php echo $data["id"];?>">

    <table>
      <tr>
        <td>namafile</td>
        <td>:</td>
        <td><input type="nama" name="nama" value="<?php echo $data['nama'];?>"></td>
      </tr>
      <tr>
        <td>ukuran</td>
        <td>:</td>
        <td><input type="ukuran" name="ukuran" value="<?php echo $data['ukuran'];?>"></td>
      </tr>
      <tr>
        <td>tipe</td>
        <td>:</td>
        <td><input type="tipe" name="tipe" value="<?php echo $data['tipe'];?>"></td>
      </tr>

      <html>
<head>
    <title>Gambar</title>
</head>
<body>
<h1>Gambar</h1>
<form method="post" enctype="multipart/form-data" action="upload.php">
    <input type="file" name="gambar">
    <input type="submit" value="Upload">
</form>
</body>
</html>


      <tr>
        <td></td>
        <td></td>
        <td>
          <input type="submit" name="edit" value="RUBAH">
        </td>
      </tr>
    </table>
  </form>

<?php
  include 'koneksi2.php';

  if(isset($_POST['edit'])){

  $nama = $_POST['nama']; 
  $tipe = $_POST['tipe'];
  $ukuran = $_POST['ukuran'];



  // query sql
  $query = mysqli_query($connect, "UPDATE gambar SET nama = '$nama', ukuran = '$ukuran', tipe ='$tipe' WHERE id = '$id'");  

  if (mysqli_affected_rows($connect) == 1){
    header('location:admin.php');
    mysqli_error($connect);
  }else {
    echo "gagal";
  }
}

?>
</body>
</html>