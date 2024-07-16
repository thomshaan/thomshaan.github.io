  <!----PHP Include---->
  <?php
  include 'php/dbconnection.php';

  session_start();

  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet" />

    <!-- End of Font -->
    <title>Main Page</title>
  </head>

  <body class="antialiased align-self-center">

    <aside>
      <div class="col-sm-auto navbar p-3 shadow">
        <div class="d-flex flex-sm-column flex-row flex-nowrap align-items-center ">
          <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
            <li class="btn py-3 align-self-start" onclick="location.href='dashboardclient.php';">
              <img src="asset/TAFLogo.png" width="150" class="py-5" ; />
            </li>
            <li class="btn py-3 align-self-start" onclick="location.href='profil.php';">
              <img src="asset/icon/navbar/idcard.png" width="20" ; />
              <a>Profil</a>
            </li>
            <li>
            <li class="btn py-3 align-self-start" onclick="location.href='listbuku.php';">
              <img src="asset/icon/navbar/home.png" width="20" ; />
              <a>List Buku</a>
            </li>
            <li>
            <li class="btn py-3 align-self-start" onclick="location.href='dashboardclient.php';">
              <img src="asset/icon/navbar/bookshelf.png" width="20" ; />
              <a>Dashboard</a>
            </li>
            <li>
            <li class="btn py-3 align-self-start" onclick="location.href='statuspeminjaman.php';">
              <img src="asset/icon/navbar/bookstatus.png" width="20" ; />
              <a>Status Peminjaman</a>
            </li>
            <li>
            <li class="btn py-3 align-self-start" onclick="location.href='settings.php';">
              <img src="asset/icon/navbar/settings.png" width="20" ; />
              <a>Pengaturan</a>
            </li>
            </li>
            <li>
            <li class="btn py-5 align-self-start" onclick="location.href='index.php';">
              <img src="asset/icon/navbar/logout.png" width="20" ; />
              <a>Keluar</a>

            </li>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </aside>

  </body>
  <!-- Script Start -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Script Finished -->

  </html>