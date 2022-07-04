<?php
  include('koneksi.php');
  $nis = $_GET['id'];
  $query = "SELECT * from siswa where nis = '$nis'";
  $result = mysqli_query($conn, $query);
  $data = mysqli_fetch_array($result);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
  <h1>Mengubah Data <span class="text-danger"><?php echo $data['nama']?></span></h1>
    <form method="post" action="action/update.php?id='<?php echo $data['no'];?>'">
      <div class="mb-3">
        <label for="Nis" class="form-label">Nis</label>
        <input type="text" class="form-control" name="nis" value="<?php echo $data['nis'];?>">
      </div>
      <div class="mb-3">
        <label for="Nis" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'];?>">
      </div>
      <div class="mb-3">
        <label for="Nis" class="form-label">Kelas</label>
        <input type="text" class="form-control" name="kelas" value="<?php echo $data['kelas'];?>">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>