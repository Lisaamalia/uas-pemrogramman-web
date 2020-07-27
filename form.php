<html>
<head>
  <title>Form Upload Gambar</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="body">
<center>

  <div class="upload">
    <p><h1>Gallery Photo Lisa</h1></p>
    <p><h3 style="font-style: italic;">"Nature gives thousands of millions of beauty, so why don't we capture it even just to give it thanks"</h3></p>
    <p><h5>Please upload picture here.</h5></p>

    <form method="post" enctype="multipart/form-data" action="upload.php">
      <input type="file" name="gambar">
      <input type="submit" value="Upload" class="tambah">
    </form>

    <p class="kembali">Go to <a href="index.php">Home</a></p>
    <p> Copyright 2020 &copy; Lisa Amalia </p>
  </div>

</center>
</body>
</html>