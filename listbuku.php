<?php include 'php/dbconnection.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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

<body class="Marcellus antialiased overflow-x color-overlay d-flex justify-content-center align-items-center">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-auto navbar p-3">
                <div class="d-flex flex-sm-column flex-row flex-nowrap align-items-center ">
                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                        <li>

                        </li>
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
                        <li class="btn py-3 align-self-start" onclick=" location.href='statuspeminjaman.php';">
                            <img src="asset/icon/navbar/bookstatus.png" width="20" ; />
                            <a>Status Peminjaman</a>
                        </li>
                        <li>
                        <li class="btn py-3 btn-outline align-self-start" onclick="location.href='settings.php';" data-mdb-ripple-init>
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

                    </ul>
                </div>

            </div>
        </div>
        <div class="col-sm ps-5">
            <div class="col-sm-auto" style="padding-left: 200px;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <img src="asset/TAFLogo.png" width="300" class="py-5" ; />
                        </div>
                        <div class="col-sm-auto d-flex py-5">
                        <nav class="navbackground navbar-light">
                                <form class="form-inline" id="search-form">
                                    <input class="form-control mr-sm-2" id="search-input" type="search" placeholder="Name/Author/ISBN" aria-label="Search">

                                </form>
                                <div id="search-results"></div>
                            </nav>
                        </div>
                        <div class="col-sm-auto d-flex py-5">

                            <nav class="navbackground navbar-light">
                                <button type="button" class="btn btn-primary" onclick="location.href='index.php';" data-mdb-ripple-init>
                                    <img src="asset/icon/navbar/login.png" width="20" ; />
                                    <a>Keluar</a></button>
                            </nav>
                        </div>
                    </div>

                    <div class="row py-3">
                        <div class="flex mb-6 py-2">
                            <h1>Buku Anak-Anak</h1>
                            <a>Buku-buku yang baik untuk dibaca oleh anak-anak.</a>
                        </div>

                        <div class="col flex mb-6 py-2">
                            <div class="row">
                                <div class="row row-cols-1 row-cols-md-5 g-4 pb-5">
                                    <?php
                                    $select_book = mysqli_query($conn, 'Select * from `buku_tbl` WHERE buku_jenis = "Anak-Anak"');
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
                                        echo "<div class='empty_text'>Buku tidak tersedia.</div>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row py-3">
                        <div class="flex mb-6 py-2">
                            <h1>Buku Biografi</h1>
                            <a>Buku yang berisi biografi milik orang-orang terkenal, yang dapat dijadikan pelajaran hidup bagi kita semua.</a>
                        </div>

                        <div class="col flex mb-6 py-2">
                            <div class="row">
                                <div class="row row-cols-1 row-cols-md-5 g-4 pb-5">
                                    <?php
                                    $select_book = mysqli_query($conn, 'Select * from `buku_tbl` WHERE buku_jenis = "Biografi"');
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
                                        echo "<div class='empty_text'>Buku tidak tersedia.</div>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row py-3">
                        <div class="flex mb-6 py-2">
                            <h1>Buku Fiksi</h1>
                            <a>Buku-buku yang baik untuk dibaca oleh anak-anak.</a>
                        </div>

                        <div class="col flex mb-6 py-2">
                            <div class="row">
                                <div class="row row-cols-1 row-cols-md-5 g-4 pb-5">
                                    <?php
                                    $select_book = mysqli_query($conn, 'Select * from `buku_tbl` WHERE buku_jenis = "Fiksi"');
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
                                        echo "<div class='empty_text'>Buku tidak tersedia.</div>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>            

                    <div class="row py-3">
                        <div class="flex mb-6 py-2">
                            <h1>Buku Sejarah</h1>
                            <a>Buku-buku yang baik untuk dibaca oleh anak-anak.</a>
                        </div>

                        <div class="col flex mb-6 py-2">
                            <div class="row">
                                <div class="row row-cols-1 row-cols-md-5 g-4 pb-5">
                                    <?php
                                    $select_book = mysqli_query($conn, 'Select * from `buku_tbl` WHERE buku_jenis = "Sejarah"');
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
                                        echo "<div class='empty_text'>Buku tidak tersedia.</div>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row py-3">
                        <div class="flex mb-6 py-2">
                            <h1>Buku Agama</h1>
                            <a>Buku-buku yang baik untuk dibaca oleh anak-anak.</a>
                        </div>

                        <div class="col flex mb-6 py-2">
                            <div class="row">
                                <div class="row row-cols-1 row-cols-md-5 g-4 pb-5">
                                    <?php
                                    $select_book = mysqli_query($conn, 'Select * from `buku_tbl` WHERE buku_jenis = "Agama"');
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
                                        echo "<div class='empty_text'>Buku tidak tersedia.</div>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row py-3">
                        <div class="flex mb-6 py-2">
                            <h1>Buku Non-Fiksi</h1>
                            <a>Buku-buku yang baik untuk dibaca oleh anak-anak.</a>
                        </div>

                        <div class="col flex mb-6 py-2">
                            <div class="row">
                                <div class="row row-cols-1 row-cols-md-5 g-4 pb-5">
                                    <?php
                                    $select_book = mysqli_query($conn, 'Select * from `buku_tbl` WHERE buku_jenis = "Non-Fiksi"');
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
                                        echo "<div class='empty_text'>Buku tidak tersedia.</div>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                          
                    <div class="row py-3">
                        <div class="flex mb-6 py-2">
                            <h1>Buku Petualangan</h1>
                            <a>Buku-buku yang baik untuk dibaca oleh anak-anak.</a>
                        </div>

                        <div class="col flex mb-6 py-2">
                            <div class="row">
                                <div class="row row-cols-1 row-cols-md-5 g-4 pb-5">
                                    <?php
                                    $select_book = mysqli_query($conn, 'Select * from `buku_tbl` WHERE buku_jenis = "Petualangan"');
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
                                        echo "<div class='empty_text'>Buku tidak tersedia.</div>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row py-3">
                        <div class="flex mb-6 py-2">
                            <h1>Buku Klasik</h1>
                            <a>Buku-buku yang baik untuk dibaca oleh anak-anak.</a>
                        </div>

                        <div class="col flex mb-6 py-2">
                            <div class="row">
                                <div class="row row-cols-1 row-cols-md-5 g-4 pb-5">
                                    <?php
                                    $select_book = mysqli_query($conn, 'Select * from `buku_tbl` WHERE buku_jenis = "Klasik"');
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
                                        echo "<div class='empty_text'>Buku tidak tersedia.</div>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<!-- Script Start -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search-form').submit(function(event) {
            event.preventDefault();
            var searchTerm = $('#search-input').val();
            $.ajax({
                type: 'POST',
                url: 'php/dbsearch.php',
                data: {
                    searchTerm: searchTerm
                },
                success: function(response) {
                    $('#search-results').html(response);
                },
                error: function() {
                    $('#search-results').html('<p>Error occurred while performing the search.</p>');
                }
            });
        });
    });
</script>
<!-- Script Finished -->

</html>