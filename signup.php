<?php include'php/dbconnection.php';

  if(isset($_POST['submit'])){
    $member_nama=$_POST['nama'];
    $member_email=$_POST['email'];
    $member_umur=$_POST['umur'];
    $member_alamat=$_POST['alamat'];
    $member_gender=$_POST['radio'];
    $member_password=$_POST['password'];
    

    $insert_query=mysqli_query($conn,"insert into `member_tbl` (member_nama, member_email, member_umur, member_alamat, member_gender, member_password, member_type) values ('$member_nama', '$member_email', '$member_umur', '$member_alamat', '$member_gender', '$member_password', '1')") or die("insert query failed");
    if($insert_query) {
      echo "Berhasil registrasi!";
  }
  else {
      echo "Terjadi kesalahan, registrasi gagal.";
  }
}

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- My CSS -->
    <link rel="stylesheet" href="stylesignup.css" />
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet" />

    <!-- End of Font -->
    <title>Sign Up Page</title>
  </head>

  <body>
    <div class="jumbotron vertical-center">
      <div class="container">
        <div class="title text-center"></div>
        <img src="asset/TAFLogo.png" width="200" ; class="center" />
        <form action="" class="addmember" method="post" enctype="multipart/form-data">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Nama</span>
              <input type="text" name="nama" placeholder="Enter your name" required />
            </div>
            <div class="input-box">
              <span class="details">Email</span>
              <input type="text" name="email" placeholder="Enter your email" required />
            </div>
            <div class="input-box">
              <span class="details">Umur</span>
              <input type="number" name="umur" placeholder="Enter your age" required />
            </div>
            <div class="input-box">
              <span class="details">Alamat</span>
              <input type="text" name="alamat" placeholder="Enter your address" required />
            </div>
            <div class="input-box">
              <span class="details">Password</span>
              <input type="text" name="password" placeholder="Enter your password" required />
            </div>
          </div>
          <div class="gender-details text-center">
          <input type="radio" name="radio" value="Laki-Laki" class="radio"/> Laki-Laki
          <input type="radio" name="radio" value="Perempuan" class="radio"/> Perempuan
          </div>
          <div class="col center py-3">
          <button type="submit" name="submit" value="submit" class="btn btn-dark center">Daftar!</button>
          </div>
          <div class="col center py-3">
            <button type="button" onclick="location.href='signin.php';" value="Go to Sign In name="submit" input type="submit2" value="register" class="btn btn-dark center">Sudah punya akun? Masuk!</button>
          </div>
        </form>
      </div>
    </div>
  </body>

  <!-- Script Start -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Script Finished -->
</html>
