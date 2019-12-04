

<title>Home</title>
<link rel="stylesheet" type="text/css" href="style1.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<div align='center'>
	<body bgcolor="f0f0f0">

<img src="kempis.png" alt="logos"> 

<style>
    * {
        margin:0; 
        padding:0;
    }

    nav {
        margin:auto;
        text-align: center;
        width: 100%;
        font-family: arial;
    } 

    nav ul {
        background:black;
        list-style: none;
        position: relative;
        display: inline-table;
        width: 100%;
     }

    nav ul li{
        float:left;
    }

    nav ul li:hover{
        background:#FFE4E1;
    }

    nav ul li:hover a{
        color:#000;
    }

    nav ul li a{
        display: block;
        padding: 25px;
        color: #fff;
        text-decoration: none;
    }
      body{
      background-color:#DCDCDC;
      font-size: 20px;
    }
    </style>
</head>

<body>
<nav>
    <ul>
      
        <li><a href="Home3.php">HOME</a>
        <li><a href="https://news.kompas.com/">NEW</a>
        <li><a href="https://indeks.kompas.com/headline?gclid=EAIaIQobChMIlJfdi7GV4wIVECQrCh2slACZEAAYASAAEgJbVfD_BwE">BERITA LAIN </a>
           <li> <a href="https://www.liputan6.com/news/politik">POLITIK </a>
             
           <li> <a href="https://tekno.kompas.com/">TEKNOLOGI</a>
           <li> <a href="https://bola.kompas.com/">OLAHRAGA</a>
           <li> <a href="https://entertainment.kompas.com/">ENTERTAINMENT</a>
           <li> <a href="https://otomotif.kompas.com/">OTOMOTIF </a>
          
        <li> <a href="login.php">ADMIN </a>
          

    </ul>
</nav>
<br>
 
<div id="tengah">
<div id="body">
  <form action="#" method="POST">

  



  <h2 align=center>
  <marquee direction="left"><b> BERITA TERBARU & TERKINI <?=  date('Y');?> </marquee> </h2>


<marquee direction="left" scrollamount="2" align="center" behavior="alternate">
<b><font face="Arial" color="#669ffa" size="3">Selamat datang, <?php echo $username;?></b></marquee></font>


<?php
include "koneksi4.php";
?>

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
<hr style="border: dashed 1px #e9e9e9">

<?php 
}
//penutup perulangan while
?>
  	<div class=malasngoding-slider>
		<div class=isi-slider>
			<a href=https://tekno.kompas.com/read/2019/07/03/08420067/aturan-blokir-ponsel-black-market-akan-disahkan-bulan-depan/><img src="3.png"  alt="gambar 1">
			<a href=https://internasional.kompas.com/read/2019/07/04/08270661/masuk-media-as-new-york-times-jokowi-dianggap-penyeimbang-kuat-di/><img src="6.png" alt="gambar 2">
			<a href=https://entertainment.kompas.com/read/2019/07/04/084700510/5-fakta-benjolan-pada-leher-raffi-ahmad/><img src="7.png" alt="gambar 3">
     <a href=https://bola.kompas.com/read/2019/07/05/10513438/kata-kata-mengharukan-arjen-robben-saat-umumkan-pensiun/><img src="8.PNG" alt="gambar 4">

		</div>
	</div>
  <br>
  <br>
  <br>

  <div id=pembatas>

<div id=box1>
  <br>
   <center><a href="https://www.suara.com/tekno/2019/06/26/175419/bnn-ingin-gandeng-kominfo-untuk-batasi-konten-terkait-narkoba-di-internet"><img src="bnn.jpg"/></a>

<br>
    <p><a href="https://www.suara.com/tekno/2019/06/26/175419/bnn-ingin-gandeng-kominfo-untuk-batasi-konten-terkait-narkoba-di-internet">BNN Ingin Gandeng Kominfo untuk Batasi Konten Terkait Narkoba di Internet </a></p>

<br>

     Suara.com - Kepala Badan Narkotika Nasional (BNN) RI Komisaris Jenderal Polisi Heru Winarko berharap dapat menggandeng Kementerian Komunikasi dan Informatika dalam upaya membatasi konten digital berkaitan narkoba untuk generasi milenial.
   </center> 
<br>
<br>
<br>
<br>
<br>
<br>

</div>


<div id=box2>
  <br>
   <center><a href="http://www.tribunnews.com/otomotif/2018/03/31/alasan-joki-drag-bike-selalu-miringkan-motor-saat-ancang-ancang-start"/> <img src="joki.jpg"/></a>

<br>
    <p><a href="http://www.tribunnews.com/otomotif/2018/03/31/alasan-joki-drag-bike-selalu-miringkan-motor-saat-ancang-ancang-start"/> Alasan Joki Drag Bike Selalu Miringkan Motor saat Ancang-ancang Start.
 </a></p>

<br>

     Sebenarnya, alasan para joki memiringkan motornya adalah untuk membasahi koplingnya.
Pasalnya, motor drag biasanya diisi oli lebih sedikit dari takaran motor standar
Oh iya, kalau dalam kondisi standar, motor biasanya butuh volume oli sebanyak 800 ml - 1.000 ml oli di mesinnya.</center> 
<br>
<br>
<br>
<br>
<br>
</div>

<div id=box3>
  <br>
   <center><a href="https://www.bola.net/spanyol/beratnya-menjadi-tetangga-cristiano-ronaldo-bagi-seorang-toni-kroos-ef11a2.html"/>  <img  src="berat.jpg"/></a>

<br>
    <p><a href="https://www.bola.net/spanyol/beratnya-menjadi-tetangga-cristiano-ronaldo-bagi-seorang-toni-kroos-ef11a2.html"/>Beratnya Menjadi Tetangga Cristiano Ronaldo Bagi Seorang Toni Kroos </a></p>

<br>

     Bola.net - Ternyata, tinggal dalam lingkungan yang sama dengan Cristiano Ronaldo tidak selamanya terasa menyenangkan. Gelandang Real Madrid, Toni Kroos, mengaku punya kenangan buruk selama menjadi tetangga pemain asal Portugal tersebut.</center> 
<br>
<br>
<br>
<br>
<br>
<br>
</div>

<div id=box4>
  <br>
   <center><a href="https://regional.kompas.com/read/2019/07/05/23292231/evakuasi-jenazah-diduga-thoriq-rizky-di-gunung-piramid-dilakukan-sabtu"/> <img src="trq1.jpg"/>

<br>
    <p><a href="https://regional.kompas.com/read/2019/07/05/23292231/evakuasi-jenazah-diduga-thoriq-rizky-di-gunung-piramid-dilakukan-sabtu"/>Evakuasi Jenazah Diduga Thoriq Rizky di Gunung Piramid Dilakukan Sabtu </a></p>

<br>
BONDOWOSO, KOMPAS.com - Badan Nasional Pencarian dan Pertolongan (Basarnas) Jember, memastikan proses evakuasi terhadap jenazah yang diduga Thoriq Rizki Maulidan, seorang remaja pendaki Gunung Argopuro, Kabupaten Bondowoso, Jawa Timur, sudah dimulai Sabtu (6/7/2019).
</center> 
<br>
<br>
<br>
</div>

<div id=box5>
  <br>
   <center><a href="https://nasional.kompas.com/read/2019/07/08/09571631/bnpb-belum-terima-informasi-detail-soal-korban-dan-kerusakan-akibat-gempa-m"/> <img src="gempa2.jpg"/></a>

<br>
    <p><a href="https://nasional.kompas.com/read/2019/07/08/09571631/bnpb-belum-terima-informasi-detail-soal-korban-dan-kerusakan-akibat-gempa-m"/>BNPB Belum Terima Informasi Detail soal Korban dan Kerusakan akibat Gempa M 7 </a></p>

<br>

    KOMPAS.com - Kepala Bidang Humas Badan Nasional Penanggulangan Bencana ( BNPB) Rita Rosita menyatakan, pihaknya masih menunggu informasi dari Badan Penanggulangan Bencana Daerah terkait kerusakan akibat gempa berkekuatan 7 yang mengguncang Sulawesi Utara dan Maluku pada Minggu (7/7/2019) malam.
</center> 
<br>
<br>
</div>

</div> <!-- div milik pembatas -->

<br>


<div id= pembatas2>


<div id=box6>
  <br>
   <center><a href="https://nasional.kompas.com/read/2019/07/08/09571631/bnpb-belum-terima-informasi-detail-soal-korban-dan-kerusakan-akibat-gempa-m"/> <img src="gempa2.jpg"/></a>

<br>
    <p><a href="https://nasional.kompas.com/read/2019/07/08/09571631/bnpb-belum-terima-informasi-detail-soal-korban-dan-kerusakan-akibat-gempa-m"/>BNPB Belum Terima Informasi Detail soal Korban dan Kerusakan akibat Gempa M 7 </a></p>
</center> 
<br>
<br>
</div>


</div> <!-- div milik pembatas2 -->

<style>
#box1{
        width:255px;
        height:550px;
        background:#ffffff;
        border-radius: 8px;
        display: inline-block;
        margin-left: 10px;
      }
</style>

<style>
#box2{
        width:255px;
        height:550px;
        background:#ffffff;
        border-radius: 8px;
        display: inline-block;
        margin-left: 10px;
      }
</style>

<style>
#box3{
        width:255px;
        height:550px;
        background:#ffffff;
        border-radius: 8px;
        display: inline-block;
        margin-left: 10px;
      }
</style>

<style>
#box4{
        width:255px;
        height:550px;
        background:#ffffff;
        border-radius: 8px;
        display: inline-block;
        margin-left: 10px;
      }
</style>

<style>
#box5{
        width:255px;
        height:550px;
        background:#ffffff;
        border-radius: 8px;
        display: inline-block;
        margin-left: 10px;
      }
</style>



<style>
#box6{ 
        
        width:250px;
        height:250px;
        background:#ffffff;
        border-radius: 8px;
        display: inline-block;
      }
</style>


<style>
img.Gempa1{

float:left; margin:0 8px 4px 0;
}
</style>


<style>
#pembatas{
        background:#DCDCDC;
       border: solid: 1px;
      }
</style>



<style>
#pembatas2{
       border: transparent; 2px;
       background: red
      }
</style>
<br>
<br>
<br>
<br>  








</form>
<br>
<br>
<br>
</div>
<center><a href="logout.php"><b>Logout</b></a></center>



</div>
</body>
<br>
<br>