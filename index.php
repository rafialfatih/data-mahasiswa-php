<?php

session_start();
if(!isset($_SESSION['login'])){
  header('location: login.php');
  exit;
}

require 'function.php';

// ambil data dari tabel mahasiswa
$mahasiswa = query("SELECT * FROM tb_mahasiswa");

include 'layouts/header.php';

?>

  <a href="logout.php" class="me-3 mt-3 position-absolute top-0 end-0 badge bg-primary nav-link">Logout</a>

  <h1 class="mt-3">Daftar Mahasiswa</h1>

  <a href="tambah.php" class="text-decoration-none h4 mb-2">Tambah Data</a>


<table class="table table-bordered border-primary mt-4">
  <thead class="text-center">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>
  </thead>

  <?php
    $no = 1;
    foreach($mahasiswa as $mhs):
  ?>

  <tbody>
    <tr class="align-middle">
      <td class="text-center"><?= $no++; ?></td>
      <td class="text-center"><a class="text-decoration-none badge bg-warning" href="ubah.php?id=<?= $mhs['id']; ?>">Ubah</a> | <a class="text-decoration-none badge bg-danger" href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a></td>
      <td class="text-center"><img src="<?= $mhs["gambar"]; ?>" alt="Logo" width="70"></td>
      <td><?= $mhs["nim"]; ?></td>
      <td><?= $mhs["nama"] ?></td>
      <td><?= $mhs["email"] ?></td>
      <td class="text-center"><?= $mhs["jurusan"] ?></td>
    </tr>
  </tbody>

  <?php 
    endforeach;
  ?>

</table>

<?php

include 'layouts/footer.php';

?>