  <!----PHP Include---->
  <?php
  include 'php/dbconnection.php';

  session_start();

  if (isset($_SESSION['member_email'])) {
    header("Location: index.php");
    exit();
  }

  $buku_id = "";
  if (isset($_GET["buku_id"])) {
    $buku_id = $_GET["buku_id"];
  }

  $select_book = mysqli_query($conn, "Select * from `buku_tbl` WHERE buku_id = $buku_id");
  $fetch_book = mysqli_fetch_assoc($select_book);

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
            <li class="btn py-3 align-self-start">
              <img src="asset/TAFLogo.png" width="150" class="py-5" ; />
            </li>
            <li class="btn py-3 align-self-start">
              <img src="asset/icon/navbar/idcard.png" width="20" ; />
              <a>Profil</a>
            </li>
            <li>
            <li class="btn py-3 align-self-start">
              <img src="asset/icon/navbar/home.png" width="20" ; />
              <a>List Buku</a>
            </li>
            <li>
            <li class="btn py-3 align-self-start">
              <img src="asset/icon/navbar/bookshelf.png" width="20" ; />
              <a>Dashboard</a>
            </li>
            <li>
            <li class="btn py-3 align-self-start">
              <img src="asset/icon/navbar/bookstatus.png" width="20" ; />
              <a>Status Peminjaman</a>
            </li>
            <li>
            <li class="btn py-3 align-self-start">
              <img src="asset/icon/navbar/settings.png" width="20" ; />
              <a>Settings</a>
            </li>
            </li>
            <li>
            <li class="btn py-5 align-self-start">
              <img src="asset/icon/navbar/logout.png" width="20" ; />
              <a>Log Out</a>

            </li>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </aside>

    <div class="jumbotron center py-5 pe-3" style="padding-left: 250px; width: 80%; border-radius: 10px; ">
      <div class="container center border">
        <div class="row">
          <div class="col-md-5 bookdetail">
            <img class="card-img-top object-fit-center center" src="images/<?php echo $fetch_book['buku_foto'] ?>" alt="">
          </div>
          <div class="col mt-4 bookdetail py-5">
            <h1><b><?php echo $fetch_book['buku_nama'] ?></b></h1>
            <a><?php echo $fetch_book['buku_pengarang'] ?></a>
            <div class="class= mt-4 lg:mt-6 text-sm grid grid-flow-row rounded border divide-y">
              <div class="grid grid-cols-2 p-2">
                <span class="boldtext">Penerbit</span>
                <a><?php echo $fetch_book['buku_penerbit'] ?></a>
              </div>
              <div class="grid grid-cols-2 p-2">
                <span class="boldtext">Tahun Terbit</span>
                <a><?php echo $fetch_book['buku_tahunterbit'] ?></a>
              </div>
              <div class="grid grid-cols-2 p-2">
                <span class="boldtext">ISBN</span>
                <a><?php echo $fetch_book['buku_isbn'] ?></a>
              </div>
              <div class="grid grid-cols-2 p-2">
                <span class="boldtext">Negara Terbit</span>
                <a><?php echo $fetch_book['buku_negaraterbit'] ?></a>
              </div>
              <div class="grid grid-cols-2 p-2">
                <span class="boldtext">Penghargaan</span>
                <a><?php echo $fetch_book['buku_penghargaan'] ?></a>
              </div>
              <div class="grid grid-cols-2 p-2">
                <span class="boldtext">Jumlah Tersedia</span>
                <a><?php echo $fetch_book['buku_jumlah'] ?></a>
              </div>
              <div class="grid grid-cols-2 p-2">
                <span class="boldtext">Deskripsi</span>
                <a><?php echo $fetch_book['buku_deskripsi'] ?></a>
              </div>
              <form action="" class="detailbook" method="post" enctype="multipart/form-data">
                <div class="grid grid-cols-2 py-5">
                  <button type="submit" name="tambahwishlist" value="tambahwishlist" class="btn btn-dark w-50 center">Tambahkan Buku ke Wishlist</button>
                  <button type="submit" name="pinjambuku" value="pinjambuku" class="btn btn-dark w-50 center">Pinjam buku ini!</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="jumbotron center py-5 pe-3" style="padding-left: 250px;">

      <div class="col flex mb-6 py-2">
        <h1>Buku yang mungkin kamu suka!</h1>
        <a>Cek buku-buku ini ya, barangkali ada yang kamu suka.</a>
        <div class="row">
          <div class="row row-cols-1 row-cols-md-5 g-4 pb-5">
            <?php
            $select_book = mysqli_query($conn, 'Select * from `buku_tbl` ');
            if (mysqli_num_rows($select_book) > 0) {
              while ($fetch_book = mysqli_fetch_assoc($select_book)) {
            ?>
                <form method="post" action="">
                  <div class="card btn border shadow h-100" style="padding: left 10rem;">
                    <img class="card-img-top object-fit-contain" src="images/<?php echo $fetch_book['buku_foto'] ?>" alt="">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $fetch_book['buku_nama'] ?></h5>
                      <p class="card-text"><?php echo $fetch_book['buku_pengarang'] ?></p>
                      <a href="#" class="btn btn-primary">Favorit!</a>
                      <a href="detailbuku.php?buku_id=<?php echo $fetch_book['buku_id'] ?>" class="btn btn-primary">Lihat!</a>
                    </div>
                  </div>
                </form>
            <?php
              }
            } else {
              echo "<div class='empty_text'>No Book Available</div>";
            }
            ?>

          </div>
        </div>
      </div>
    </div>"
  </body>
  <!-- Script Start -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Script Finished -->

  </html>