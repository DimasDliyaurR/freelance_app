<?php
$conn = new mysqli('localhost', 'root', '', 'freelance');
$id = $_GET["id"];
$db = mysqli_query($conn, "SELECT * FROM project INNER JOIN ulasan USING(idProject) WHERE idProject = '$id'");
$data = mysqli_fetch_assoc($db);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Lihat Ulasan | Nganggur</title>
        <!-- FAVICON -->
        <link rel="icon" type="image/x-icon" href="img/Logo.png" />
        <!-- ICON -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
        <!-- Swiper -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <!-- AOS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <!-- FontAwesome -->
        <link
            rel="stylesheet"
            href="path/to/font-awesome/css/font-awesome.min.css"
        />
        <!-- CSS Ku -->
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <img src="assets/bg.png" style="z-index: -1; position: absolute; right: 0; top: -25px" />
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-primary fixed-top">
            <div class="container">
                <a href="#"><img src="assets/Logo.png" class="navbar-brand" style="height: 50px" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="#">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Cara Kerja</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <img src="assets/message.png" class="navbar-brand" style="height: 45px" />
                            </li>
                            <li class="nav-item">
                                <img src="assets/profile.png" class="navbar-brand" style="height: 40px" />
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light fw-bolder">|</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" style="margin-right: 90px" href="#"
                                    >Logout
                                    <img src="assets/sign.png" class="navbar-brand" style="height: 30px" />
                                </a>
                            </li>
                        </ul>
                    </span>
                </div>
            </div>
        </nav>
        <!-- NAVBAR END -->

        <!-- PROJECT SELESAI -->
        <div class="container mt-5" style="transform: translateY(75px)">
            <div class="row">
                <div class="col">
                    <div class="page-tittle">
                        <h2>Ulasan</h2>
                    </div>
                </div>
            </div>
            <div class="content-wrapper mt-3 p-5">
                <div class="sub-tittle pb-3 d-flex" style="width: 100%; background-color: #f7f7f7; border-radius: 20px 20px 0 0; border-bottom: 3px solid #e7e7e7; height: fit-content">
                    <h5 class="align-items-center">Daftar Project</h5>
                </div>
                <div class="row mt-3 mb-2">
                    <div class="col">
                        <div class="d-flex flex-row align-items-center justify-content-between tombol-kembali">
                            <a href="daftarProjectTerulas.php"
                                ><p><i class="uil uil-angle-left"></i> Kembali</p></a
                            >
                        </div>
                    </div>
                </div>

                <!-- PROJECT WRAP -->
                <div class="row mb-3" data-aos="fade-up" data-aos-duration="1500">
                    <div class="col">
                        <div class="project-wrapper d-flex flex-column shadow-sm">

                            <!-- Iterate over the result set -->
                            
                                <div class="tgl-invoice d-flex flex-row justify-content-between pt-3 px-3">
                                    <p class="invoice">Freelancer : <?php echo $data['freelancer']; ?></p>
                                    <p class="tgl-pesanan">Pesanan diterima: <?=date('d F Y', strtotime($data['tglTerima']));?></p>
                                </div>
                                <div class="content-main d-flex flex-row mt-3 px-4 column-gap-4">
                                    <div class="ulas-gambar-project">
                                        <img src="assets/project1_.png" alt="" width="300px" height="300px"/>
                                    </div>
                                    <div class="form-ulas d-flex flex-column justify-content-evenly">
                                        <div class="judul-project">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h6 style="font-size: 24px"><?php echo $data['judul']; ?></h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-10">
                                                    <p style="color: black">Bagaimana kualitas project secara keseluruhan?</p>
                                                </div>
                                                <p class="rating-bintang" id="bintang-rating">
                                                    <?php
                                                    $rating = $data['ratedIndex'];
                                                    $i = 1;
                                                    while($i<=5){
                                                        echo '<i style="color: #ffc800; width:25px;" class="fa-solid fa-star' . (($i <= $rating) ? '' : '-light') . '"></i>';
                                                        $i++;
                                                    }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="text-ulasan">
                                            <p><?php echo $data['ulasan']; ?></p>
                                        </div>
                                    </div>
                                </div>

                            

                        </div>
                    </div>
                </div>
                <!-- END PROJECT WRAP -->
                    <br /><br /><br /><br /><br />
                </div>
            </div>
        </div>

        <!-- PROJECT SELESAI END -->

        <!-- SWIPER JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!-- JAVASCRIPT Bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- FontAwesome -->
        <script
            src="https://kit.fontawesome.com/02f5ebcb51.js"
            crossorigin="anonymous"
        ></script>
        <!-- JAVASCRIPT Ku-->
        <script src="js/script.js"></script>
    </body>
</html>
