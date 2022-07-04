<?php
  include('koneksi.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TAMBAH DATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1>TAMBAH DATA</h1>

      <form action="action/add.php" method="post">
        <div class="mb-3">
          <label for="Nis" class="form-label">Nis</label>
          <input type="text" class="form-control" name="nis" placeholder="Nis Tidak Boleh Sama dan lebih dari 11 digit!">
        </div>
        <div class="mb-3">
          <label for="Nis" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" placeholder="Nama yang akan ditambahkan">
        </div>
        <div class="mb-3">
          <label for="Nis" class="form-label">Kelas</label>
          <input type="text" class="form-control" name="kelas" placeholder="10 11 12">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>