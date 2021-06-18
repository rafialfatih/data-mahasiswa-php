<?php

session_start();
if(isset($_SESSION['login'])){
  header('location: index.php');
  exit;
}

require 'function.php';

if(isset($_POST['login'])){
  $user = $_POST['username'];
  $pass = $_POST['password'];

  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$user'");

  if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    
    if (password_verify($pass, $row['password'])) {
      echo "<script>
              alert('Berhasil Login!');
              document.location.href='index.php';
            </script>";
      $_SESSION['login'] = true;

      exit;
    }
  }
  
  $err = true;

}

include 'layouts/header.php';

?>

<h2>Login User</h2>

<a class="h5" href="registration.php">Registrasi User</a>

<?php if(isset($err)): ?>
    <p class="text-danger mt-3">Username/Password salah</p>
  
<?php endif; ?>

<form action="" method="post" class="form-row mt-2">
  <div class="form-group col-sm-2">
    <label for="user" class="form-label">Username</label><br>
    <input type="text" name="username" id="user" class="form-control">
  </div>

  <div class="form-group col-sm-2 mt-2">
    <label for="pass" class="form-label">Password</label><br>
    <input type="password" name="password" class="form-control">
  </div>
  
  <button type="submit" name="login" class="btn btn-primary active mt-4">Login</button>
</form>

<?php

include 'layouts/footer.php';

?>