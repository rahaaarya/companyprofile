<?php include("inc/koneksi.php") ;
    $query = mysqli_query($koneksi,"SELECT * FROM halaman");
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Logo Title -->
    <link rel="icon" href="/assets/img/logo title.png">
    <title>STMIK Indonesia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Signika:wght@500&display=swap"
        rel="stylesheet" />
    <!-- my style -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Icon -->
    <script src="https://kit.fontawesome.com/cfb1150b77.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <nav class="navbar-dark  bg-transparent">
                    <div class="container-fluid">
                        <a class="navbar-brand " href="#">
                            <img src="assets/img/logo title.png" alt="Logo" width="80"
                                class="d-inline-block align-text-top me-8">STMIK Indonesia
                        </a>
                    </div>
                </nav>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">ABOUT US</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="product.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">PRODUCT &
                                SERVICE</a>
                            <ul class="dropdown-menu">
                                <li><a href="product.php" class="dropdown-item">E-Government &raquo;</a>
                                    <ul class="dropdown-menu submenu">
                                        <li><a href="" class="dropdown-item">E-Performance</a></li>
                                        <li><a href="" class="dropdown-item">E-Simpeg</a></li>
                                        <li><a href="" class="dropdown-item">E-Nangkis</a></li>
                                        <li><a href="" class="dropdown-item">E-Pangan</a></li>
                                        <li><a href="" class="dropdown-item">E-Regulasi Tenaga Kesehatan</a></li>
                                        <li><a href="" class="dropdown-item">E-Tata Ruang</a></li>
                                    </ul>
                                </li>
                                <li><a href="business.php" class="dropdown-item">E-Business &raquo;</a>
                                    <ul class="dropdown-menu submenu">
                                        <li><a href="" class="dropdown-item">E-Office</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">CONTACT US</a>
                        </li>
                    </ul>
                    </ul>


                </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h1>Bertumbuh
                        Bersama STMIK.
                    </h1>
                    <p><span class="bold">STMIK</span> hadir untuk membantu anda menciptakan
                        teknologi yang terbaik, untukmu, untuk kita, untuk dunia.</p>

                    <a href="#">
                        <button class="button-lg-primary"> Our Service <img src="assets/img/arrow.png" alt=""
                                class="col-md-2"></button>
                    </a>
                </div>
            </div>
        </div>
        <img src="assets/img/hero.png" alt="" class="h-100 position-absolute top-0 start-0 ">
    </section>

    <!-- Layanan Section -->
    <section id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Solusi untuk <br> segala kebutuhan anda.
                    </h2>
                </div>
            </div>

            <div class="row mt-5">
                <?php while($data = mysqli_fetch_array($query)){?>
                <div class="col-md-4 mb-5 text-center">
                    <div class="card-layanan">


                        <div class="circle-icon position-relative mx-auto">
                            <img src="<?php echo $data["gambar"]; ?>" alt=""
                                class="icon position-absolute top=-50 start-50 translate-middle">
                        </div>


                        <h3 class="mt-4"><?php echo $data["judul"];
                        
                         ?></h3>
                        <p class="mt-3"><?php echo $data["isi"];?></p>
                    </div>
                </div>
                <?php } ?>
            </div>


        </div>
    </section>

    <!-- Promosi Section -->
    <section id="promosi">
        <div class="container">
            <di class="row">
                <div class="col-12 text-center">

                    <img src="assets/img/img.jpg" alt="" class="float">
                    <div class="content">
                        <h2>Mengapa Memilih STMIK Indonesia ?</h2>
                        <p>Memilih Integra Inovasi Indonesia menjadi partner Anda merupakan sebuah pilihan yang tepat.
                            Karena integra indonesia merupakan perusahaan IT di Yogyakarta yang terpercaya dan
                            berpengalaman mengembangkan aplikasi di berbagai instansi di Indonesia.</p>
                        <br>
                        <h4>User Requirements Analysis</h4>
                        <p>Kami desain sistem sesuai dengan kebutuhan dan permasalahan dari client. Sehingga anda
                            mendapatkan solusi yang tepat</p>
                        <br>
                        <h4>High End Technology</h4>
                        <p>Kami selalu melakukan research yang berkelanjutan untuk selalu uptodate dengan perkembangan
                            teknologi terkini</p>
                        <br>
                        <h5>After Sales Service & Maintenance</h5>
                        <p>Kami memberikan garansi layanan after sales dan pendampingan guna memastikan user
                            memanfaatkan layanan dan produk sesuai harapan</p>
                    </div>
                </div>
            </di>
        </div>
    </section>
    <br>
    <br>

    <section id="news">
        <div class="container">
            <div class="col-12 text-center mb-5">
                <h2>STMIK <span class="yellow">News</span></h2>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col-12 text-center">
                    <div class="card-img h-100">
                        <img src="assets/img/apple.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Apple Umumkan Peluncuran Produk Baru pada Akhir Tahun Ini</h5>
                            <p class="card-text">Apple mengumumkan akan meluncurkan produk baru pada akhir tahun ini,
                                termasuk update untuk produk iPhone, iPad, dan Mac. Perusahaan teknologi tersebut juga
                                berencana untuk merilis produk baru di pasar wearable dan AR/VR.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="card-img h-100">
                        <img src="assets/img/fb.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Facebook Merilis Fitur Baru untuk Meningkatkan Keamanan Data Pengguna
                            </h5>
                            <p class="card-text">Facebook meluncurkan fitur baru untuk meningkatkan keamanan data
                                pengguna. Pengguna dapat memperkuat keamanan akun mereka dengan autentikasi dua faktor.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="card-img h-100">
                        <img src="assets/img/google.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Google dan Facebook Kembali Hadapi Kritik Soal Privasi Data</h5>
                            <p class="card-text">Perusahaan teknologi Google dan Facebook kembali mendapat kritik dari
                                para ahli privasi data terkait penggunaan data pribadi pengguna mereka. Hal ini
                                menimbulkan kekhawatiran terhadap penggunaan data pribadi oleh perusahaan teknologi
                                besar di masa depan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="card-img h-100">
                        <img src="assets/img/5g.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Munculnya Teknologi 5G: Revolusi Baru di Dunia IT!</h5>
                            <p class="card-text">Teknologi 5G diklaim sebagai revolusi baru di dunia IT. Banyak
                                perusahaan teknologi yang sedang mempersiapkan infrastruktur dan inovasi baru untuk
                                mendukung teknologi ini.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="card-img h-100">
                        <img src="assets/img/ransomware.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ransomware: Ancaman Besar bagi Dunia IT dan Bisnis Online</h5>
                            <p class="card-text">Ransomware semakin mengancam dunia IT dan bisnis online. Bagaimana cara
                                menghindari serangan ini dan apa yang harus dilakukan jika terkena serangan?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="card-img h-100">
                        <img src="assets/img/Quantum_Computing_Image.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Berpikir di Luar Kotak: Teknologi Quantum Computing</h5>
                            <p class="card-text">Quantum Computing merupakan teknologi yang menjanjikan dan berpotensi
                                mengubah dunia IT secara drastis. Apa itu Quantum Computing dan bagaimana dampaknya
                                terhadap dunia IT?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <section id="footer">
        <footer class="bg-dark text-white pt -5 pb-4">
            <div class="container text-center text-md-left">
                <div class="row text-center text-md-left">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
                            STMIK indonesia
                        </h5>
                        <p>STMIK Indonesia sebagai konsultan dan developer dalam bidang Teknologi Informasi dan
                            Komunikasi (TIK) berusaha memberikan solusi terhadap permasalahan dan kebutuhan teknologi
                            informasi dengan mengutamakan pada solusi pemanfaatan IT secara efektif dan efisien.</p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-32 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
                            Produk dan Layanan
                        </h5>
                        <p>
                            <a href="#" class="text-white">E-Pangan</a>
                        </p>
                        <p>
                            <a href="#" class="text-white">E-Performance</a>
                        </p>
                        <p>
                            <a href="#" class="text-white">E-Regulasi Nakes</a>
                        </p>
                        <p>
                            <a href="#" class="text-white">Simpeg</a>
                        </p>
                        <p>
                            <a href="#" class="text-white">Simnangkis</a>
                        </p>
                        <p>
                            <a href="#" class="text-white">SIM Tata Ruang</a>
                        </p>
                        <p>
                            <a href="#" class="text-white">E-Office</a>
                        </p>
                        <p>
                            <a href="#" class="text-white">Mobile Apps</a>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Useful Links</h5>
                        <p>
                            <a href="#" class="text-white">Your Account</a>
                        </p>
                        <p>
                            <a href="#" class="text-white">Become Affiliates</a>
                        </p>
                        <p>
                            <a href="#" class="text-white">Shipping Rates</a>
                        </p>
                        <p>
                            <a href="#" class="text-white">Help</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
                        <p>
                            <i class="fas fa-home mr-3"></i>Indonesia, 2023, Bandung
                        </p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i>stmikindonesia@gmail.com
                        </p>
                        <p>
                            <i class="fas fa-phone mr-3"></i>+62 81221918120
                        </p>
                        <p>
                            <i class="fas fa-print mr-3"></i>+01 335 633 77
                        </p>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="row align-items-center">
                    <div class="col-md-7 col-lg-8">
                        <p>Copyright 042023 All rights reseved by :
                            <a href="#">
                                <strong class="text-warning">The Providers</strong>
                            </a>
                        </p>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="text-center text-md-right">
                            <ul class="list unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white"><i
                                            class="fab fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white"><i
                                            class="fab fa-google-plus"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white"><i
                                            class="fab fa-youtubes"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>