  <!----PHP Include---->
  <?php
  include 'php/dbconnection.php';

  session_start();

  $buku_id = "";
  if (isset($_GET["buku_id"])) {
    $buku_id = $_GET["buku_id"];
  }
  $select_book = mysqli_query($conn, "Select * from `buku_tbl` WHERE buku_id = $buku_id");
  $fetch_book = mysqli_fetch_assoc($select_book);

  if(isset($_POST['hapusbuku'])){
    $sql = "DELETE FROM buku_tbl WHERE buku_id = $buku_id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->close();
    $conn->close();

  }

  if (isset($_POST['ubahdatabuku'])) {
    $buku_nama = $_POST['namabuku'];
    $buku_jenis = $_POST['jenisbuku'];
    $buku_pengarang = $_POST['pengarang'];
    $buku_penerbit = $_POST['penerbit'];
    $buku_tahunterbit = $_POST['tahunterbit'];
    $buku_isbn = $_POST['isbn'];
    $buku_negaraterbit = $_POST['negaraterbit'];
    $buku_penghargaan = $_POST['penghargaan'];
    $buku_jumlah = $_POST['jumlah'];
    $buku_deskripsi = $_POST['deskripsi'];

    $sql = "update `buku_tbl` set buku_nama='$buku_nama', buku_jenis='$buku_jenis', buku_pengarang ='$buku_pengarang', buku_penerbit='$buku_penerbit', buku_tahunterbit='$buku_tahunterbit', buku_isbn='$buku_isbn', buku_negaraterbit='$buku_negaraterbit', buku_penghargaan='$buku_penghargaan', buku_jumlah='$buku_jumlah', buku_deskripsi='$buku_deskripsi' where buku_id = '$buku_id'";
    $stmt = $conn->prepare($sql);
    if($stmt->execute()){
      echo "Data berhasil diperbaharui";
    }
    else{
      echo "Terjadi kesalahan saat memperbarui data,".$stmt->error;
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
            <li class="btn py-3 align-self-start" onclick="location.href='admindashboard.php';">
              <img src="asset/TAFLogo.png" width="150" class="py-5" ; />
            </li>
            <li class="btn py-3 align-self-start" onclick="location.href='adminprofil.php';">
              <img src="asset/icon/navbar/idcard.png" width="20" ; />
              <a>Profil</a>
            </li>
            <li>
            <li class="btn py-3 align-self-start" onclick="location.href='adminlistbuku.php';">
              <img src="asset/icon/navbar/home.png" width="20" ; />
              <a>List Buku</a>
            </li>
            <li>
            <li class="btn py-3 align-self-start" onclick="location.href='adminlistmember.php';">
              <img src="asset/icon/navbar/bookshelf.png" width="20" ; />
              <a>List Member</a>
            </li>
            <li>
            <li class="btn py-3 align-self-start" onclick="location.href='adminstatuspeminjaman.php';">
              <img src="asset/icon/navbar/bookstatus.png" width="20" ; />
              <a>Status Peminjaman</a>
            </li>
            <li>
            <li class="btn py-3 align-self-start" onclick="location.href='admintambahbuku.php';">
              <img src="asset/icon/navbar/settings.png" width="20" ; />
              <a>Penambahan Buku</a>
            </li>
            <li class="btn py-3 align-self-start" onclick="location.href='adminsettings.php';">
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

    <div class="jumbotron center py-5 pe-3" style="padding-left: 250px; width: 80%; border-radius: 10px; ">
      <div class="container center border">
        <div class="row">
          <div class="col-md-5 bookdetail">
            <img class="card-img-top object-fit-center center" src="images/<?php echo $fetch_book['buku_foto'] ?>" alt="">
            <form action="" class="changebook" method="post" enctype="multipart/form-data">
          </div>
          <div class="col mt-4 bookdetail py-5">
            <div class="class= mt-4 lg:mt-6 text-sm grid grid-flow-row rounded border divide-y">
              <div class="grid grid-cols-2 p-2">
                <span class="boldtext">Nama Buku</span>
                <input type="text" name="namabuku" placeholder="<?php echo $fetch_book['buku_nama'] ?>" required />
              </div>
              <div class="grid grid-cols-2 p-2">
                <span class="boldtext">Pengarang</span>
                <input type="text" name="pengarang" placeholder="<?php echo $fetch_book['buku_pengarang'] ?>" required />
              </div>
              <div class="grid grid-cols-2 p-2">
                <span class="boldtext">Jenis Buku</span>
                <select data-mdb-select-init input type="text" class="col-md-12" name="jenisbuku" multiple data-mdb-placeholder="Genre Buku" multiple required>
                  <option value="Biografi">Fiksi</option>
                  <option value="Fiksi">Non-Fiksi</option>
                  <option value="Non-Fiksi">Sejarah</option>
                  <option value="Cerita">Anak-Anak</option>
                  <option value="Anak-anak">Agama</option>
                  <option value="Sejarah">Fiksi</option>
                  <option value="Agama">Non-Fiksi</option>
                  <option value="Biografi">Sejarah</option>
                  <option value="Misteri">Anak-Anak</option>
                  <option value="Novel">Agama</option>
                </select>
              </div>
              <div class="grid grid-cols-2 p-2">
                <span class="boldtext">Penerbit</span>
                <input type="text" name="penerbit" placeholder="<?php echo $fetch_book['buku_penerbit'] ?>" required />
              </div>
              <div class="grid grid-cols-2 p-2">
                <span class="boldtext">Tahun Terbit</span>
                <input type="text" name="tahunterbit" placeholder="<?php echo $fetch_book['buku_tahunterbit'] ?>" required />
              </div>
              <div class="grid grid-cols-2 p-2">
                <span class="boldtext">ISBN</span>
                <input type="text" name="isbn" placeholder="<?php echo $fetch_book['buku_isbn'] ?>" required />
              </div>
              <div class="grid grid-cols-2 p-2">
                <span class="boldtext">Negara Terbit</span>
                <input type="text" name="negaraterbit" placeholder="<?php echo $fetch_book['buku_negaraterbit'] ?>" required />
              </div>
              <div class="grid grid-cols-2 p-2">
                <span class="boldtext">Penghargaan</span>
                <input type="text" name="penghargaan" placeholder="<?php echo $fetch_book['buku_penghargaan'] ?>" required />
              </div>
              <div class="grid grid-cols-2 p-2">
                <span class="boldtext">Jumlah Tersedia</span>
                <input type="text" name="jumlah" placeholder="<?php echo $fetch_book['buku_jumlah'] ?>" required />
              </div>
              <div class="grid grid-cols-2 p-2">
                <span class="boldtext">Deskripsi</span>
                <input type="text" name="deskripsi" placeholder="<?php echo $fetch_book['buku_deskripsi'] ?>" required />
              </div>

              <div class="grid grid-cols-2 py-5">
                <button type="submit" name="ubahdatabuku" value="ubahdatabuku" class="btn btn-dark w-50 center">Ubah Data Buku</button>
                </form>
                <form action="" class="deletebook" method="post" enctype="multipart/form-data">
                <button type="submit" name="hapusbuku" value="pinjambuku" onclick="location.href='adminlistbuku.php';" class="btn btn-dark w-50 center">Hapus Buku</button>
                </form>
                
              </div>
              

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
                      <a href="admindetailbuku.php?buku_id=<?php echo $fetch_book['buku_id'] ?>" class="btn btn-primary">Lihat!</a>
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