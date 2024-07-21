<?php include 'php/dbconnection.php'; 

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
            <div class="col-sm-auto navbar p-3 shadow">
                <div class="d-flex flex-sm-column flex-row flex-nowrap align-items-center ">
                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                        <li class="btn py-3 align-self-start">

                            <img src="asset/TAFLogo.png" width="100" class="py-5" onclick="location.href='index.php';" ; />
                        </li>
                        <li>
                        <li class="btn py-3 align-self-start" onclick="location.href='signin.php'">
                            <img src="asset/icon/navbar/logout.png" width="20" ; />
                            <a>Masuk</a>

                        </li>
                        <li class="btn py-3 align-self-start" onclick="location.href='signup.php'">
                            <img src="asset/icon/navbar/logout.png" width="20" ; />
                            <a>Daftar</a>

                        </li>
                        </li>
                        </li>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-sm ps-5">
                <div class="col-sm-auto" style="padding-left: 150px;">
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
                                    <button type="button" class="btn btn-primary" data-mdb-ripple-init>
                                        <img src="asset/icon/navbar/login.png" width="20" ; />
                                        <a href="signin.php">Login</a></button>
                                </nav>
                            </div>
                        </div>

                        <div class="row py-3">
                            <div class="col-md-4 align-self-center align-items-center">
                                <h3>Kategori Buku</h3>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-primary" data-mdb-ripple-init>Biografi</button>
                                <button type="button" class="btn btn-primary" data-mdb-ripple-init>Fiksi</button>
                                <button type="button" class="btn btn-primary" data-mdb-ripple-init>Sejarah</button>
                                <button type="button" class="btn btn-primary" data-mdb-ripple-init>Anak-Anak</button>
                                <button type="button" class="btn btn-primary" data-mdb-ripple-init>Agama</button>
                            </div>
                        </div>
                        <div class="flex mb-6 py-2">
                            <div>
                            </div>
                        </div>

                        <div class="flex mb-6 py-2">
                            <h1>Readers Top Pick</h1>
                            <a>Buku-buku yang paling sering dibaca minggu ini!</a>
                        </div>

                        <div class="col flex mb-6 py-2">
                            <div class="row">
                                <div class="row row-cols-1 row-cols-md-5 g-4 pb-5">
                                    <?php
                                    $select_book = mysqli_query($conn, 'Select * from `buku_tbl`');
                                    if (mysqli_num_rows($select_book) > 0) {
                                        while ($fetch_book = mysqli_fetch_assoc($select_book)) {
                                    ?>
                                            <form method="post" action="">
                                                <div class="card btn border shadow h-100" style="padding: left 10rem;">
                                                    <img class="card-img-top object-fit-contain" src="images/<?php echo $fetch_book['buku_foto'] ?>" alt="">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo $fetch_book['buku_nama'] ?></h5>
                                                        <p class="card-text"><?php echo $fetch_book['buku_pengarang'] ?></p>
                                                        <a href="detailnologin.php?buku_id=<?php echo $fetch_book['buku_id'] ?>" class="btn btn-primary">Lihat!</a>
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
                        <div class="flex mb-6 py-2">
                            <h1>Bed Time Story</h1>
                            <a>Buku-buku yang cocok untuk dibaca sebelum tidur!</a>
                        </div>

                        <div class="col flex mb-6 py-2">
                            <div class="row">
                                <div class="row row-cols-1 row-cols-md-5 g-4 pb-5">
                                    <?php
                                    $select_book = mysqli_query($conn, 'Select * from `buku_tbl` ');
                                    if (mysqli_num_rows($select_book) > 0) {
                                        while ($fetch_book = mysqli_fetch_assoc($select_book)) {
                                    ?>
                                            <form method="post" action="">
                                                <div class="card btn border shadow h-100" style="padding: left 10rem;">
                                                    <img class="card-img-top object-fit-" src="images/<?php echo $fetch_book['buku_foto'] ?>" alt="">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo $fetch_book['buku_nama'] ?></h5>
                                                        <p class="card-text"><?php echo $fetch_book['buku_pengarang'] ?></p>
                                                        <a href="detailnologin.php?buku_id=<?php echo $fetch_book['buku_id'] ?>" class="btn btn-primary">Lihat!</a>
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
                data: {searchTerm: searchTerm},
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