<?php

$conn = mysqli_connect("localhost", "root", "", "db_infinite");

function query($query){
  global $conn;
  $result = mysqli_query($conn, $query);
  while($mhs = mysqli_fetch_assoc($result)){
    $rows[] = $mhs;
  }
  return $rows;
}

function tambah($data){
  global $conn;
  $nim = htmlspecialchars($data['nim']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO tb_mahasiswa VALUES('', '$nim', '$nama', '$email', '$jurusan', '$gambar')";

  mysqli_query($conn, $query);
  $check = mysqli_affected_rows($conn);

  return $check;

}

function hapus($id){
  global $conn;
  mysqli_query($conn, "DELETE FROM tb_mahasiswa WHERE id = $id");

  $check = mysqli_affected_rows($conn);
  return $check;
}

function ubah($data){
  global $conn;
  
  $id = $data['id'];
  $nim = htmlspecialchars($data['nim']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE tb_mahasiswa SET 
                  nim = '$nim', 
                  nama = '$nama', 
                  email = '$email', 
                  jurusan = '$jurusan', 
                  gambar = '$gambar' 
            WHERE id = $id";

  mysqli_query($conn, $query);
  $check = mysqli_affected_rows($conn);

  return $check;
}

function register($data){
  global $conn;

  $username = strtolower(stripslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  $result = mysqli_query($conn, "SELECT username FROM tb_user WHERE username = '$username'");

  if(mysqli_fetch_assoc($result)){
    echo "<script>
            alert('Username telah terdaftar!');
          </script>";

    return false;
  }

  if($password !== $password2){
    echo "<script>
            alert('Konfirmasi password tidak sesuai!');
          </script>";
    
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  mysqli_query($conn, "INSERT INTO tb_user VALUES('', '$username', '$password')");

  return mysqli_affected_rows($conn);

}