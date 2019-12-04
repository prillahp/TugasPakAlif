<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<title>Form Pendaftaran</title>
<div align='center'>
<body bgcolor="#6699ff">
  <form action="proses_daftar.php" method="post">
<link rel="stylesheet" href="style.css" type="text/css">
  <form action="" method="">
  <div class="imgcontainer">
    <img src="dftr1.jpg" alt="Avatar" class="avatar">
  <tbody>
  <tr><td colspan="2" align="center"><h1>Daftar Akun Baru</h1></td></tr>
  <tr><td>Username</td><td> : <input name="username" type="text"><br></br></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"><br></br></td></tr>
  <center>
  <button type="submit" class="btn btn-default">login</button><br></br></center>
  <tr><td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login</b></a></td></tr>
 
  </tbody>
  </table>
  </form>
</div>

