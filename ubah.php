<?php

require 'function.php';

// Ambil ID
$id = $_GET['id'];

$mhs = query("SELECT * FROM tb_mahasiswa WHERE id = $id")[0];

if (isset($_POST['ubah'])) {

  if(ubah($_POST) > 0){
    echo "
    <script>
      alert('Data berhasil diubah!');
      document.location.href='index.php';
    </script>
    ";
  }else{
    echo "<script>alert('Data gagal diubah!')</script>";
  }

}
include 'layouts/header.php';

?>
  
  <h2 class="mt-3">Ubah Data Mahasiswa</h2>

  <form action="" method="post" class="form-row mt-4">
    <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
    <div class="row mb-3">
      <label class="col-sm-1 col-form-label" for="nim">NIM</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" placeholder="Masukkan NIM" value="<?= $mhs['nim'] ?>" name="nim">
      </div>
    </div>

    <div class="row mb-3">
      <label class="col-sm-1 col-form-label" for="nama">Nama</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" placeholder="Masukkan Nama" value="<?= $mhs['nama'] ?>" name="nama">
      </div>
    </div>

    <div class="row mb-3">
      <label class="col-sm-1 col-form-label" for="email">Email</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" placeholder="Masukkan Email" value="<?= $mhs['email'] ?>" name="email">
      </div>
    </div>

    <div class="row mb-3">
      <label class="col-sm-1 col-form-label" for="jurusan">Jurusan</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" placeholder="Masukkan Jurusan" value="<?= $mhs['jurusan'] ?>" name="jurusan">
      </div>
    </div>

    <div class="row mb-3">
      <label class="col-sm-1 col-form-label" for="gambar">Gambar</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" placeholder="Masukkan Gambar" value="<?= $mhs['gambar'] ?>" name="gambar">
      </div>
    </div>

    <button type="submit" name="ubah" class="btn btn-primary active mt-4">Ubah Data</button>
  </form>

<?php

include 'layouts/footer.php';

?>