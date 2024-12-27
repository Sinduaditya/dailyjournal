<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Monsblue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="icon"
        href="https://media.licdn.com/dms/image/v2/D5603AQFNg1zwLYEnCw/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1713684627059?e=2147483647&v=beta&t=WDFBJhQ-k51tNojU5dISw93gGhIELm_YFp8qOv3xbhE" />
</head>

<body class="bg-light text-dark">
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="./index.html">Mons<span class="text-primary">blue</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll text-dark"
                    style="--bs-scroll-height: 100px">
                    <li class="nav-item">
                        <a href="/index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#article" class="nav-link">Article</a>
                    </li>
                    <li class="nav-item">
                        <a href="#gallery" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="#schedule" class="nav-link">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a href="#aboutme" class="nav-link">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a href="./login.php" class="nav-link">Login</a>
                    </li>
                </ul>
                <div class="gap-5">
                    <button class="btn btn-dark" id="dark-mode">
                        <i class="bi bi-moon-stars"></i>
                    </button>
                    <button class="btn btn-danger" id="light-mode">
                        <i class="bi bi-brightness-high-fill"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Content -->
    <section id="hero" class="text-center p-5 text-sm-start bg-danger-subtle">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse justify-content-between align-items-center">
                <img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="img-fluid position-relative" width="500" alt="" />
                <div class="py-4" id="dark">
                    <h1 class="fw-bold mb-2 display-4">Monsblue</h1>
                    <h4 class="lead display-5">Platform Berbasis Komunitas</h4>
                    <h6 class="mt-4">
                        <span id="tanggal"></span>
                        <span id="jam"></span>
                    </h6>
                </div>
            </div>
        </div>
    </section>

    <!-- article begin -->
    <section id="article" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">article</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/<?= $row['gambar'] ?>" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['judul'] ?></h5>
                            <p class="card-text">
                                <?= $row['isi'] ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">
                                <?= $row['tanggal'] ?>
                            </small>
                        </div>
                    </div>
                </div>
                <?php
      }
      ?>
            </div>
        </div>
    </section>
    <!-- article end -->

    <!-- Start Gallery -->
    <section id="gallery" class="text-center p-5 ">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class="carousel slide mt-4">
                <div class="carousel-inner rounded-5">
                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1562408590-e32931084e23?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1505424297051-c3ad50b055ae?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- End Gallery -->

    <!-- Schedule -->
    <section id="schedule" class="text-center p-5 ">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Schedule</h1>
            <div class=" row row-cols-1 mt-2 row-cols-md-4 g-4 justify-content-around">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header bg-danger">
                            <small class="text-white text-uppercase">senin</small>
                        </div>
                        <div class="list-group">
                            <li class="list-group-item rounded-0">Probabilitas Dan Statistik <br>
                                <small>12.30 - 15.00 | H.4.7</small>
                            </li>
                            <li class="list-group-item">Rekaya Perangkat Lunak <br>
                                <small>15.30 - 18.00 | H.4.6</small>
                            </li>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header bg-danger">
                            <small class="text-white text-uppercase">selasa</small>
                        </div>
                        <div class="list-group ">
                            <li class="list-group-item rounded-0">Sistem Operasi<br>
                                <small>09.30 - 12.00 | H.3.11</small>
                            </li>
                            <li class="list-group-item">Logika Informatika<br>
                                <small>15.30 - 18.00 | H.4.5</small>
                            </li>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header bg-danger">
                            <small class="text-white text-uppercase">rabu</small>
                        </div>
                        <div class="list-group ">
                            <li class="list-group-item rounded-0">Penambangan Data<br>
                                <small>09.30 - 12.00 | H.4.9</small>
                            </li>
                            <li class="list-group-item">Basis Data<br>
                                <small>14.10 - 15.50 | D.3.M</small>
                            </li>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header bg-danger">
                            <small class="text-white text-uppercase">jumat</small>
                        </div>
                        <div class="list-group ">
                            <li class="list-group-item rounded-0">Pemograman Berbasis Web<br>
                                <small>12.30 - 14.10 | D.2.J</small>
                            </li>
                            <li class="list-group-item">Kriptografi<br>
                                <small>15.30 - 18.00 | H.4.11</small>
                            </li>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header bg-danger">
                            <small class="text-white text-uppercase">jumat</small>
                        </div>
                        <div class="list-group">
                            <p class="mb-2 mt-2 rounded-0">Basis Data<br>
                                <small>10.20 - 12.00 | H.5.14</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header bg-danger">
                            <small class="text-white text-uppercase">sabtu</small>
                        </div>
                        <div class="list-group">
                            <p class="mb-2 mt-2 ">FREE</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Schdule -->

    <!-- About Me -->
    <section id="aboutme" class="text-center p-5 mt-5 mb-5  text-sm-start bg-danger-subtle">
        <div class="container">
            <div class="d-sm-flex flex-sm align-items-center gap-5 justify-content-center">
                <img src="https://media.licdn.com/dms/image/v2/D5603AQFNg1zwLYEnCw/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1713684627059?e=2147483647&v=beta&t=WDFBJhQ-k51tNojU5dISw93gGhIELm_YFp8qOv3xbhE"
                    class="img-fluid rounded-circle shadow-lg" width="300" alt="foto_diri"
                    onclick="hideImage()" />
                <div class="py-1 mt-2" id="hiddenid">
                    <p class="text-muted">A11.2023.14874</p>
                    <p class="fw-bold mb-2 display-6">Sindu Aditya Janadi</p>
                    <small>Program Studi Teknik Informatika</small>
                    <a href="https://dinus.ac.id/" class="fw-bold d-block text-dark text-decoration-none"
                        target="_blank" id="udinus">Universitas Dian Nuswantoro</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Me -->

    <!-- Footer -->
    <footer class="text-center p-5" id="foot">
        <div>
            <a href="#" class="fs-4"><i class="bi bi-tiktok p-2 h-2 text-danger"></i></a>
            <a href="#" class="fs-4"><i class="bi bi-instagram p-2 h-2 text-danger"></i></a>
            <a href="https://sinduaditya.medium.com/" class="fs-4"><i
                    class="bi bi-medium p-2 h-2 text-danger"></i></a>
        </div>
        <div>Sindu Aditya Janadi &copy; 2024</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.setTimeout("tampilWaktu()", 1000);

        function tampilWaktu() {
            var waktu = new Date();
            var bulan = waktu.getMonth() + 1;
            setTimeout("tampilWaktu()", 1000);
            document.getElementById("tanggal").innerHTML =
                waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
            document.getElementById("jam").innerHTML =
                waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
        }

        function hideImage() {
            var x = document.getElementById("hiddenid");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        // Dark mode and light mode toggle
        document.getElementById("dark-mode").onclick = function() {

            document.getElementById("dark").classList.add("text-dark");
            document.getElementById("hiddenid").classList.add("text-dark");
            document.getElementById("udinus").classList.add("text-dark");
            document.getElementById("udinus").classList.remove("text-white");
            document.body.classList.remove("bg-light", "text-dark");
            document.body.classList.add("bg-dark", "text-white");
        };

        document.getElementById("light-mode").onclick = function() {
            document.getElementById("udinus").classList.add("text-dark");
            document.getElementById("udinus").classList.remove("text-white");
            document.body.classList.remove("bg-dark", "text-white");
            document.body.classList.add("bg-light", "text-dark");
        };
    </script>
</body>

</html>
