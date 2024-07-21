<?php
session_start();
include("php/dbconnection.php");



if (isset($_POST['submit'])) {
  $username = $_POST['member_email'];
  $password = $_POST['member_password'];

  $checkdata = "SELECT * FROM member_tbl WHERE member_email = '$username' AND member_password ='$password' AND member_type = '1'";
  $result1 = $conn->query($checkdata);

  $sql = "SELECT member_id FROM member_tbl WHERE member_email = '$username'";
  $result2 = $conn->query($sql);
  if ($result2->num_rows > 0) {
    $row = $result2->fetch_assoc();
    $member_id = $row["member_id"];

    // simpan member_id ke dalam session variable
    $_SESSION['member_id'] = $member_id;

    echo "Member ID berhasil disimpan ke session.";
  } else {
    echo "Tidak ada data member yang ditemukan.";
  }

  if ($result1->num_rows > 0) {
    $_SESSION['member_email'] = $username;
    $_SESSION['member_id'] = $member_id;
    header("Location: dashboardclient.php");
  } else {
    echo "Login gagal.";
    header("Location: signin.php");
  }

  $conn->close();
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
  <title>Sign In Page</title>
</head>

<body style="background: linear-gradient(0deg, rgba(0,48,63,0.674269561340161) 0%, rgba(228,199,161,1) 92%);">
  <div class="jumbotron vertical-center shadow">
    <div class="container " style="background: linear-gradient(135deg, #f6d365 0%, #fda085 100%);">
      <div class="row">
        <div class="col">
          <img src="asset/icon/navbar/flying papers.png" width="300" class="vertical-center object-fit-contain rounded" ; />
        </div>
        <div class="col shadow p-5 rounded">
          <form action="" class="signin" method="post" enctype="multipart/form-data">
            <div class="col user-details">
              <div class="row text-center">
                <h3>Welcome, Reader!</h3>
              </div>
              <div class="row">
                <a>Email</a>
              </div>
              <div class="row">
                <div class="input-box">
                  <input type="text" name="member_email" placeholder="Enter your email" required />
                </div>
              </div>
              <div class="row">
                <a>Password</a>
              </div>
              <div class="row">
                <div class="input-box">
                  <input type="password" name="member_password" placeholder="Enter your password" required />
                </div>
              </div>
              <div class="row py-2">
                <button type="submit" name="submit" value="submit" class="btn btn-dark center">Masuk</button>
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-dark center" type="button" onclick="location.href='signup.php';" >Daftar</button>
                <button class="btn btn-dark center" type="button" onclick="location.href='signinadmin.php';" >Masuk Administrator</button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php

  ?>
</body>

<!-- Script Start -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Script Finished -->

</html>