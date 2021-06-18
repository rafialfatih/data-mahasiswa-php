<?php

require 'function.php'; 

if (isset($_POST['registrasi'])) {
  if(register($_POST)){
    echo "<script>
            alert('Data user berhasil ditambah!');
            document.location.href='login.php';
          </script>";
  }else{
    echo mysqli_error($conn);
  }
}

include 'layouts/header.php';

?>

<h2>Registrasi User</h2>

<a class="h5" href="login.php">Login User</a>

<form action="" method="post" class="form-row mt-4">
  <div class="form-group col-sm-2">
    <label for="user" class="form-label">Username</label><br>
    <input type="text" name="username" id="user" class="form-control">
  </div>

  <div class="form-group col-sm-2 mt-2">
    <label for="password" class="form-label">Password</label><br>
    <input type="password" name="password" class="form-control">
  </div>

  <div class="form-group col-sm-2 mt-2">
    <label for="password2" class="form-label">Konfirmasi Password</label><br>
    <input type="password" name="password2" class="form-control">
  </div>

  <button type="submit" name="registrasi" class="btn btn-primary active mt-4">Register</button>
</form>

<?php

include 'layouts/footer.php';

?>