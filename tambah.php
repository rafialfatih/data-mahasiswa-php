<?php

require 'function.php';

if (isset($_POST['tambah'])) {

  if(tambah($_POST) > 0){
    echo "
    <script>
      alert('Data berhasil ditambah!');
      document.location.href='index.php';
    </script>
    ";
  }else{
    echo "<script>alert('Data gagal ditambah!')</script>";
  }

}

include 'layouts/header.php';

?>
  
<h2 class="mt-3">Tambah Data Mahasiswa</h2>

<form action="" method="post" class="form-row mt-4">

  <div class="row mb-3">
    <label class="col-sm-1 col-form-label" for="nim">NIM</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" placeholder="Masukkan NIM" name="nim">
    </div>
  </div>

  <div class="row mb-3">
    <label class="col-sm-1 col-form-label" for="nama">Nama</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama">
    </div>
  </div>

  <div class="row mb-3">
    <label class="col-sm-1 col-form-label" for="email">Email</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" placeholder="Masukkan Email" name="email">
    </div>
  </div>

  <div class="row mb-3">
    <label class="col-sm-1 col-form-label" for="jurusan">Jurusan</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" placeholder="Masukkan Jurusan" name="jurusan">
    </div>
  </div>

  <div class="row mb-3">
    <label class="col-sm-1 col-form-label" for="gambar">Gambar</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" placeholder="Masukkan Gambar" name="gambar">
    </div>
  </div>

  <button type="submit" name="tambah" class="btn btn-primary active mt-4">Tambah Data</button>
</form>

<?php

include 'layouts/footer.php';

?>