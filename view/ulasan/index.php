<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Project Berhasil | Nganggur</title>
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
        <!-- CSS Ku -->
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <img src="img/bg.png" style="z-index: -1; position: absolute; right: 0; top: -25px" />
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-primary fixed-top">
            <div class="container">
                <a href="#"><img src="img/Logo.png" class="navbar-brand" style="height: 50px" /></a>
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
                                <img src="img/message.png" class="navbar-brand" style="height: 45px" />
                            </li>
                            <li class="nav-item">
                                <img src="img/profile.png" class="navbar-brand" style="height: 40px" />
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light fw-bolder">|</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" style="margin-right: 90px" href="#"
                                    >Logout
                                    <img src="img/sign.png" class="navbar-brand" style="height: 30px" />
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
                        <h2>Project Selesai</h2>
                    </div>
                </div>
            </div>
            <div class="content-wrapper mt-3 p-5">
                <div class="sub-tittle pb-3 d-flex" style="width: 100%; background-color: #f7f7f7; border-radius: 20px 20px 0 0; border-bottom: 3px solid #e7e7e7; height: fit-content">
                    <h5 class="align-items-center">Beri Ulasan</h5>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <div class="filter">
                                <label for="disabledSelect" class="form-label"><h6>Filter :</h6></label>
                                <select id="" class="dropdown-filter ms-3">
                                    <option>1 Minggu terakhir</option>
                                    <option>1 Minggu terakhir</option>
                                    <option>1 Minggu terakhir</option>
                                    <option>1 Minggu terakhir</option>
                                </select>
                            </div>

                            <div class="search">
                                <input type="text" class="search-box" placeholder="Search by Invoice / Project / Talent" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PROJECT WRAP -->
                <div class="row mb-3" data-aos="fade-up" data-aos-duration="1500">
                    <div class="col">
                        <div class="project-wrapper d-flex flex-column shadow-sm">
                            <div class="tgl-invoice d-flex flex-row justify-content-between pt-3 px-3">
                                <p class="invoice">INV/20231028/LGDSG/21062003</p>
                                <p class="tgl-pesanan">Pesanan diterima: 22 Okt 2023</p>
                            </div>
                            <div class="content-main d-flex flex-row mt-3 px-4">
                                <img src="img/profile.png" alt="" class="avatar-freelancer" />
                                <div class="namaFreelancer ms-4">
                                    <h4 class="mb-2">Junaedi</h4>
                                    <div class="role"><p>Freelancer</p></div>
                                </div>
                                <div class="line-project-card mb-3"></div>
                                <div class="d-flex flex-column project ms-4">
                                    <h3>Project</h3>
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="img/project1.png" alt="" class="gambarProject" />
                                        </div>
                                        <div class="col d-flex flex-column justify-content-evenly judul-project">
                                            <div class="text">
                                                <h6>Design 3D Animation Logo for Youtube | 3D Blender</h6>
                                                <p>Belum diulas</p>
                                            </div>
                                            <a href="beriulasan.php" class="d-flex justify-content-center align-items-center">Beri ulasan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3" data-aos="fade-up" data-aos-duration="1500">
                    <div class="col">
                        <div class="project-wrapper d-flex flex-column shadow-sm">
                            <div class="tgl-invoice d-flex flex-row justify-content-between pt-3 px-3">
                                <p class="invoice">INV/20231028/LGDSG/21062003</p>
                                <p class="tgl-pesanan">Pesanan diterima: 22 Okt 2023</p>
                            </div>
                            <div class="content-main d-flex flex-row mt-3 px-4">
                                <img src="img/profile.png" alt="" class="avatar-freelancer" />
                                <div class="namaFreelancer ms-4">
                                    <h4 class="mb-2">Junaedi</h4>
                                    <div class="role"><p>Freelancer</p></div>
                                </div>
                                <div class="line-project-card mb-3"></div>
                                <div class="d-flex flex-column project ms-4">
                                    <h3>Project</h3>
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="img/project1.png" alt="" class="gambarProject" />
                                        </div>
                                        <div class="col d-flex flex-column justify-content-evenly judul-project">
                                            <div class="text">
                                                <h6>Design 3D Animation Logo for Youtube | 3D Blender</h6>
                                                <p>Belum diulas</p>
                                            </div>
                                            <a href="beriulasan.php" class="d-flex justify-content-center align-items-center">Beri ulasan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3" data-aos="fade-up" data-aos-duration="1500">
                    <div class="col">
                        <div class="project-wrapper d-flex flex-column shadow-sm">
                            <div class="tgl-invoice d-flex flex-row justify-content-between pt-3 px-3">
                                <p class="invoice">INV/20231028/LGDSG/21062003</p>
                                <p class="tgl-pesanan">Pesanan diterima: 22 Okt 2023</p>
                            </div>
                            <div class="content-main d-flex flex-row mt-3 px-4">
                                <img src="img/profile.png" alt="" class="avatar-freelancer" />
                                <div class="namaFreelancer ms-4">
                                    <h4 class="mb-2">Junaedi</h4>
                                    <div class="role"><p>Freelancer</p></div>
                                </div>
                                <div class="line-project-card mb-3"></div>
                                <div class="d-flex flex-column project ms-4">
                                    <h3>Project</h3>
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="img/project1.png" alt="" class="gambarProject" />
                                        </div>
                                        <div class="col d-flex flex-column justify-content-evenly judul-project">
                                            <div class="text">
                                                <h6>Design 3D Animation Logo for Youtube | 3D Blender</h6>
                                                <p>Belum diulas</p>
                                            </div>
                                            <a href="beriulasan.php" class="d-flex justify-content-center align-items-center">Beri ulasan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3" data-aos="fade-up" data-aos-duration="1500">
                    <div class="col">
                        <div class="project-wrapper d-flex flex-column shadow-sm">
                            <div class="tgl-invoice d-flex flex-row justify-content-between pt-3 px-3">
                                <p class="invoice">INV/20231028/LGDSG/21062003</p>
                                <p class="tgl-pesanan">Pesanan diterima: 22 Okt 2023</p>
                            </div>
                            <div class="content-main d-flex flex-row mt-3 px-4">
                                <img src="img/profile.png" alt="" class="avatar-freelancer" />
                                <div class="namaFreelancer ms-4">
                                    <h4 class="mb-2">Junaedi</h4>
                                    <div class="role"><p>Freelancer</p></div>
                                </div>
                                <div class="line-project-card mb-3"></div>
                                <div class="d-flex flex-column project ms-4">
                                    <h3>Project</h3>
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="img/project1.png" alt="" class="gambarProject" />
                                        </div>
                                        <div class="col d-flex flex-column justify-content-evenly judul-project">
                                            <div class="text">
                                                <h6>Design 3D Animation Logo for Youtube | 3D Blender</h6>
                                                <p>Belum diulas</p>
                                            </div>
                                            <a href="beriulasan.php" class="d-flex justify-content-center align-items-center">Beri ulasan</a>
                                        </div>
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
        <!-- PROJECT SELESAI END -->

        <!-- SWIPER JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!-- JAVASCRIPT Bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- JAVASCRIPT Ku-->
        <script src="js/script.js"></script>
    </body>
</html>
