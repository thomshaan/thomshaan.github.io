<?php include'php/dbconnection.php';
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    <!-- My CSS -->
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
                      <li class="btn py-3 align-self-start">
                        <img src="asset/TAFLogo.png" width="100" class="py-5" ; />
                        </li>
                            <li class="btn py-3 align-self-start">
                            <img src="asset/icon/navbar/idcard.png" width="20" ;/>
                            <span>Profile</span>
                            </li>
                            <li>
                                <li class="btn py-3 align-self-start">
                                <img src="asset/icon/navbar/bookshelf.png" width="20" ; />
                                <span>Favourite</span>
                            </li>
                            <li>
                                <li class="btn py-3 align-self-start">
                                    <img src="asset/icon/navbar/home.png" width="20" ; />
                                    <span>Home</span>
                            </li>
                            <li>
                                <li class="btn py-3 align-self-start">
                                    <img src="asset/icon/navbar/bookshelf.png" width="20" ; />
                                    <a>My Book</a>
                            </li>
                            <li>
                                <li class="btn py-3 align-self-start">
                                    <img src="asset/icon/navbar/bookstatus.png" width="20" ; />
                                    <a>Book Status</a>
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
              
        <div class="col-sm ps-5">
            <div class="col-sm-auto" style="padding-left: 150px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <img src="asset/TAFLogo.png" width="300" class="py-5" ; />
                            </div>
                            <div class="col-sm-auto d-flex py-5">
                                <nav class="navbackground navbar-light">
                                    <form class="form-inline">
                                      <input class="form-control mr-sm-2" type="search" placeholder="Name/Author/ISBN" aria-label="Search">
                                    </form>
                                  </nav>
                            </div>
                            <div class="col-sm-auto d-flex py-5">
                                
                                <nav class="navbackground navbar-light">
                                    <button type="button" class="btn btn-primary" data-mdb-ripple-init>
                                        <img src="asset/icon/navbar/login.png" width="20"  ; />
                                        Login</button>
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

                    <div class="flex mb-6 py-2">
                        
                    </div>
                        
                    <div class="container text-center my-1">
                            <div class="row mx-auto my-auto">
                              <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                                <div class="carousel-inner w-100" role="listbox">
                                  <div class="carousel-item active">
                                    <div class="col-md-4">
                                      <div class="card card-body">
                                        <img class="img-fluid" src="https://cdn.gramedia.com/uploads/items/172_Days.jpg" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="col-md-4">
                                      <div class="card card-body">
                                        <img class="img-fluid" src="https://cdn.gramedia.com/uploads/items/172_Days.jpg" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="col-md-4">
                                      <div class="card card-body">
                                        <img class="img-fluid" src="https://cdn.gramedia.com/uploads/items/172_Days.jpg" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="col-md-4">
                                      <div class="card card-body">
                                        <img class="img-fluid" src="https://cdn.gramedia.com/uploads/items/172_Days.jpg" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="col-md-4">
                                      <div class="card card-body">
                                        <img class="img-fluid" src="https://cdn.gramedia.com/uploads/items/172_Days.jpg" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="col-md-4">
                                      <div class="card card-body">
                                        <img class="img-fluid" src="https://cdn.gramedia.com/uploads/items/172_Days.jpg" />
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                            </div>
                          </div>

                        <div class="flex mb-6 py-2"> 

                            <h1>Bed Time Story</h1>
                            <a>Buku-buku yang cocok untuk dibaca sebelum tidur!</a>
                        </div>

                        <div class="container text-center my-3">
                            <div class="row mx-auto my-auto">
                              <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                                <div class="carousel-inner w-100" role="listbox">
                                  <div class="carousel-item active">
                                    <div class="col-md-4">
                                      <div class="card card-body">
                                        <img class="img-fluid" src="https://cdn.gramedia.com/uploads/items/172_Days.jpg" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="col-md-4">
                                      <div class="card card-body">
                                        <img class="img-fluid" src="https://cdn.gramedia.com/uploads/items/172_Days.jpg" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="col-md-4">
                                      <div class="card card-body">
                                        <img class="img-fluid" src="https://cdn.gramedia.com/uploads/items/172_Days.jpg" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="col-md-4">
                                      <div class="card card-body">
                                        <img class="img-fluid" src="https://cdn.gramedia.com/uploads/items/172_Days.jpg" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="col-md-4">
                                      <div class="card card-body">
                                        <img class="img-fluid" src="https://cdn.gra media.com/uploads/items/172_Days.jpg" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <div class="col-md-4">
                                      <div class="card card-body">
                                        <img class="img-fluid" src="https://cdn.gramedia.com/uploads/items/172_Days.jpg" />
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>

    </body>
  <!-- Script Start -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Script Finished -->
</html>
