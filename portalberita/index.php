<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home Berita</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="assets/font/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css" media="screen" />
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div class="body_wrapper">
  <div class="center">
    <div class="header_area">
      <div class="logo floatleft"><a href="index.php"><img src="images/logo.png" alt="" /></a></div>
      <div class="top_menu floatleft">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">Subscribe</a></li>
          <li><a href="login.php">Admin</a></li>
        </ul>
      </div>
      <div class="social_plus_search floatright">
        <div class="social">
          <ul>
            <li><a href="twitter.com" class="twitter"></a></li>
            <li><a href="facebook.com" class="facebook"></a></li>
            <li><a href="tekno.com" class="feed"></a></li>
          </ul>
        </div>
        <div class="search">
          <form action="#" method="post" id="search_form">
            <input type="text" value="Search news" id="s" />
            <input type="submit" id="searchform" value="search" />
            <input type="hidden" value="post" name="post_type" />
          </form>
        </div>
      </div>
    </div>

    <div class="main_menu_area">
      <ul id="nav">
        <li><a href="https://news.kompas.com/">World newS</a></li>
        <li><a href="https://bola.kompas.com/">Sports</a></li>
        <li><a href="https://tekno.kompas.com/">Tech</a></li>
        <li><a href="https://www.liputan6.com/news/politik">POLITIC </a></li>
        <li><a href="#">business</a></li>
        <li><a href="#">Movies</a></li>
        <li><a href="https://entertainment.kompas.com/">entertainment</a></li>
        <li><a href="https://otomotif.kompas.com/">OTOMOTIF </a></li>
        <li><a href="#">Books</a></li>
        <li><a href="#">blogs</a></li>
     </div>


   
    <div class=malasngoding-slider>
    <div class=isi-slider>
    
          
          <a href=https://tekno.kompas.com/read/2019/07/03/08420067/aturan-blokir-ponsel-black-market-akan-disahkan-bulan-depan/><img src="picture/3.png"  alt="gambar 1"></a>
         
         <a href=https://internasional.kompas.com/read/2019/07/04/08270661/masuk-media-as-new-york-times-jokowi-dianggap-penyeimbang-kuat-di/><img src="picture/6.png" alt="gambar 2"></a>
          
        <a href=https://entertainment.kompas.com/read/2019/07/04/084700510/5-fakta-benjolan-pada-leher-raffi-ahmad/><img src="picture/7.png" alt="gambar 3"></a>
        <a href=https://bola.kompas.com/read/2019/07/05/10513438/kata-kata-mengharukan-arjen-robben-saat-umumkan-pensiun/><img src="picture/8.PNG" alt="gambar 4"></a>

      </div>
    </div>

   <!--  <?php
include "koneksi4.php";
?>
<?php
$query_ambil_berita = $mysqli->query("SELECT * FROM berita ORDER BY id_berita DESC"); //query ambil data berita.
while ($data_berita = $query_ambil_berita->fetch_array()) {
//perulangan untuk menampilkan berita 
?> -->
<div class="content_area">
      <div class="main_content floatleft">
        <div class="left_coloum floatleft">
          <div class="single_left_coloum_wrapper">      
<h2 class="title" style="margin-bottom: 0px"><?php echo $data_berita['judul']; ?></h2>
<small>Ditulis oleh : <?php echo $data_berita['penulis']; ?>, pada : <?php echo $data_berita['tanggal_posting']; ?></small>
<p>
<!-- <?php 
if (is_file("gambar/".$data_berita['gambar']) == TRUE) {
?>
<img src="gambar/<?php echo $data_berita['gambar']; ?>" style="width: 100px; height: 75px; margin: 0 10px 10px 0; display: inline; float: left">
<?php 
} 
?>
<?php echo substr($data_berita['isi_berita'], 0, 300); ?> ...
<a href="berita_detil.php?id=<?php echo $data_berita['id_berita']; ?>">selengkapnya</a>
</p>
<hr style="border: dashed 1px #e9e9e9">
</div>
</div>
</div>
</div>


<?php 
}
//penutup perulangan while
?> -->
  
    <div class="footer_bottom_area">
      <div class="footer_menu">
        <ul id="f_menu">
          <li><a href="https://news.kompas.com/">World new</a></li>
          <li><a href="https://bola.kompas.com/">ports</a></li>
          <li><a href="https://tekno.kompas.com/">technic</a></li>
          <li><a href="#">business</a></li>
          <li><a href="#">Movies</a></li>
          <li><a href="https://entertainment.kompas.com/">Entertainment</a></li>
          <li><a href="https://otomotif.kompas.com/">Otomotif</a></li>
          <li><a href="#">Books</a></li>
          <li><a href="#">classifieds</a></li>
          <li><a href="#">blogs</a></li>
        </ul>
      </div>
      <div class="copyright_text">
        <p>Copyright &copy; 2045 The News Reporter Inc. All rights reserved | Design by <a target="_blank" rel="nofollow" href="http://www.graphicsfuel.com/2045/10/wp-magazine-theme-template-psd/">Rafi MD</a></p>
        <p>Trade marks and images used in the design are the copyright of their respective owners and are used for demo purposes only.</p>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="assets/js/jquery-min.js"></script> 
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.bxslider.js"></script> 
<script type="text/javascript" src="assets/js/selectnav.min.js"></script> 
<script type="text/javascript">
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});
</script>
</body>
</html>