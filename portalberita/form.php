<html>
<head>
</head>
<body>

<h1>Form Post Image</h1>
<div class="control-group">  
<label class="control-label" for="inputJudul">Judul</label><input type="text" class="span12" placeholder="Judul Berita" name="jdl_berita" required >  
<div class="controls">  
</div>  
</div>  
<div class="control-group">  
<textarea rows="5" cols="40" class="span12" name="isi_berita" required></textarea>  
<label class="control-label" for="inputIsiBerita">Isi Berita</label>  
<form method="post" enctype="multipart/form-data" action="upload.php">
	<input type="file" name="gambar">
	<input type="submit" value="Upload">
	<button type="reset" class="btn btn-inverse">Cancel</button>
</form>
</body>
</html>
