<?php 
require_once ("../../models/freelanceModel.php");

$selectedCategory = isset($_GET['kategori']) ? $_GET['kategori'] : '1';

$sql = "SELECT * FROM pekerjaan_request INNER JOIN kategori_request";
if (!empty($selectedCategory)) {
    $sql .= " WHERE id_kategori = $selectedCategory";
}

$kategori = mysqli_query($conn, "SELECT nama_kategori FROM kategori_request WHERE id = $selectedCategory");
$namaKategori = mysqli_fetch_assoc($kategori);

$result = $conn->query($sql);
$projects = array();

if ($result->num_rows > 0) {
    // Memasukkan hasil query ke dalam array
    while ($row = $result->fetch_assoc()) {
        $projects[] = $row;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Tawaran Project | Nganggur</title>
        <!-- FAVICON -->
        <link rel="icon" type="image/x-icon" href="../../assets/logo/Logo.png" />
        <!-- ICON -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
        <!-- Swiper -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <!-- AOS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <!-- CSS Ku -->
        <link rel="stylesheet" href="../../css/style.css" />
    </head>
    <body>
        <img src="../../assets/bg.png" style="z-index: -1; position: absolute; right: 0; top: -25px" />
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-primary fixed-top">
            <div class="container">
                <a href="#"><img src="../../assets/Logo.png" class="navbar-brand" style="height: 50px" /></a>
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
                                <img src="../../assets/message.png" class="navbar-brand" style="height: 45px" />
                            </li>
                            <li class="nav-item">
                                <img src="../../assets/profile.png" class="navbar-brand" style="height: 40px" />
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light fw-bolder">|</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" style="margin-right: 90px" href="#"
                                    >Logout
                                    <img src="../../assets/sign.png" class="navbar-brand" style="height: 30px" />
                                </a>
                            </li>
                        </ul>
                    </span>
                </div>
            </div>
        </nav>
        <!-- NAVBAR END -->

        <!-- CONTAINER PROJECT SELESAI -->
        <div class="container mt-5" style="transform: translateY(75px)">
            <div class="row">
                <div class="col">
                    <div class="page-tittle">
                        <h2>Tawaran Project</h2>
                    </div>
                </div>
            </div>
            <div class="content-wrapper mt-3 p-5">
                <div class="sub-tittle pb-3 d-flex" style="width: 100%; background-color: #f7f7f7; border-radius: 20px 20px 0 0; border-bottom: 3px solid #e7e7e7; height: fit-content">
                    <h5 class="align-items-center">Daftar Project</h5>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <div class="filter">
                                <form action="" method="GET">
                                    <label for="disabledSelect" class="form-label"><h6>Kategori :</h6></label>
                                    <select id="" name="kategori" class="dropdown-filter ms-3">
                                        
                                        <option <?php if(isset($_GET['kategori']) && $_GET['kategori'] == '1') echo 'selected'; ?> value="1">Graphic & Desain</option>
                                        <option <?php if(isset($_GET['kategori']) && $_GET['kategori'] == '2') echo 'selected'; ?> value="2">Voice Over</option>
                                        <option <?php if(isset($_GET['kategori']) && $_GET['kategori'] == '3') echo 'selected'; ?> value="3">Digital Marketing</option>
                                        <option <?php if(isset($_GET['kategori']) && $_GET['kategori'] == '4') echo 'selected'; ?> value="4">Video & Animation</option>
                                        
                                    </select>
                                    <input type="submit" class="btn btn-primary ms-2 p-2" value="Tampilkan Kategori">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KATEGORI NAME -->
                <h3 class="mb-4"><?= $namaKategori['nama_kategori']?></h3>
                <!-- KATEGORI NAME END -->

                <!-- CARD TAWARAN -->
                <div class="d-flex flex-row column-gap-3 flex-wrap justify-content-start">

                <?php foreach ($projects as $project) { ?>
                    <!-- CARD ITEM -->
                    <div class="card p-3 mb-3" style="width: 14rem" data-aos="fade-up" data-aos-duration="1500">
                        <img src="../../assets/<?= $project['kategori'] ?>" class="card-img-top" alt="..." style="width:190px;height:172.5px;" />
                        <div class="card-body">
                            <h5 class="card-title" style="color: #042672"><?= $project['nama_pekerjaan'] ?></h5>
                            <p class="card-text" style="font-size: 14px">Tenggat : <?=date('d M Y', strtotime($project['batas_waktu']));?></p>
                            <p class="card-text">Rp. <?= number_format($project['harga'],0,",",".");?>,-</p>
                            <a href="detilTawaran.php?id=<?= $project['id_pekerjaan'] ?>" class="btn btn-primary">View Detail</a>
                        </div>
                    </div>
                    <!-- CARD ITEM END-->
                <?php } ?>
                
                </div>

                <!-- END CARD TAWARAN -->

                <br /><br /><br /><br /><br />
            </div>
        </div>
        <!-- CONTAINER PROJECT SELESAI END -->

        <!-- SWIPER JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!-- JAVASCRIPT Bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- JAVASCRIPT Ku-->
        <script src="../../js/script.js"></script>
    </body>
</html>
