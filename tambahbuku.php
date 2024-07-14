  <!----PHP Include---->
<?php include'php/dbconnection.php';

  if(isset($_POST['submit'])){
    $buku_nama=$_POST['namabuku'];
    $buku_jenis=$_POST['jenisbuku'];
    $buku_pengarang=$_POST['pengarang'];
    $buku_penerbit=$_POST['penerbit'];
    $buku_tahunterbit=$_POST['tahunterbit'];
    $buku_isbn=$_POST['isbn'];
    $buku_negaraterbit=$_POST['negaraterbit'];
    $buku_penghargaan=$_POST['penghargaan'];
    $buku_jumlah=$_POST['jumlah'];
    $buku_foto=$_FILES['file']['name'];
    $buku_foto_tmp_name=$_FILES['file']['tmp_name'];
    $buku_foto_folder='images/'.$buku_foto;

    $insert_query=mysqli_query($conn,"insert into `buku_tbl` (buku_nama, buku_jenis, buku_pengarang, buku_penerbit, buku_tahunterbit, buku_isbn, buku_negaraterbit, buku_penghargaan, buku_jumlah, buku_foto) values ('$buku_nama', '$buku_jenis', '$buku_pengarang', '$buku_penerbit', '$buku_tahunterbit', '$buku_isbn', '$buku_negaraterbit', '$buku_penghargaan', '$buku_jumlah', '$buku_foto')") or die("insert query failed");
    if($insert_query) {
      move_uploaded_file($buku_foto_tmp_name, $buku_foto_folder);
      echo "Buku berhasil dimasukkan!";
  }
  else {
      echo "Terjadi kesalahan, buku gagal dimasukkan.";
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
              <li class="btn py-3 align-self-start">
                <img src="asset/TAFLogo.png" width="100" class="py-5" ; />
                </li>
                    <li class="btn py-3 align-self-start">
                    <img src="asset/icon/navbar/idcard.png" width="20" ;/>
                    <a>Profil Admin</a>
                    </li>
                    <li>
                        <li class="btn py-3 align-self-start">
                            <img src="asset/icon/navbar/home.png" width="20" ; />
                            <a>List Buku</a>
                    </li>
                    <li>
                        <li class="btn py-3 align-self-start">
                            <img src="asset/icon/navbar/bookshelf.png" width="20" ; />
                            <a>List Member</a>
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

    <div class="jumbotron center py-5" style="padding-left: 250px; ">
      <div class="container">
        <form action="" class="addbook" method="post" enctype="multipart/form-data">
          <div class="user-details">
            <span class="details"> <h1>Tambahkan Buku ke Inventori</h1></span>
            <div class="input-box">
              <span class="details">Nama</span>
              <input type="text" name="namabuku" placeholder="Nama Buku" required />
            </div>
            <div class="input-box">
              <span class="details">Jenis Buku</span>
              <input type="text" name="jenisbuku" placeholder="Jenis Buku" required />
            </div>
            <div class="input-box">
              <span class="details">Pengarang</span>
              <input type="text" name="pengarang" placeholder="Pengarang" required />
            </div>
            <div class="input-box">
              <span class="details">Penerbit  </span>
              <input type="text" name="penerbit" placeholder="Penerbit" required />
            </div>
            <div class="input-box">
              <span class="details">Tahun Terbit</span>
              <input type="date" name="tahunterbit" placeholder="Tahun Terbit" required />
            </div>
            <div class="input-box">
              <span class="details">ISBN</span>
              <input type="number" name="isbn" placeholder="ISBN" required />
            </div>
            <div class="input-box">
              <span class="details">Negara Terbit</span>
              <input type="text" name="negaraterbit" placeholder="Negara Terbit" required />
            </div>
            <div class="input-box">
              <span class="details">Penghargaan</span>
              <input type="text" name="penghargaan" placeholder="Penghargaan" required />
            </div>
            <div class="input-box">
              <span class="details">Jumlah</span>
              <input type="number" name="jumlah" placeholder="Jumlah Buku" required />
            </div>
            <div class="input-box">
              <span class="details">Foto Buku</span>
              <input type="file" name="file" placeholder="Foto Buku" required />
            </div>
          </div>
          <div class="col center py-2">
            <button type="submit" name="submit" value="submit" class="btn btn-dark center">Tambahkan Buku</button>
          </div>
        </form>
      </div>

      </div>
    </div>

    
  </body>
  <!-- Script Start -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Script Finished -->
</html>