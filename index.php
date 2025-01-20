<!DOCTYPE html>
<html lang="en">
<?php
session_start();
//koneksi ke database
include 'koneksi.php';

?>

    <head>
        <meta charset="utf-8">
        <title>AJM - Bengkel Motor Terbaik</title>
        <link rel="shortcut icon" href="assets/landing/img/Logo-removebg-preview (1).png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="bengkel motor, layanan motor, perawatan motor, bengkel terbaik">
        <meta name="description" content="AJM adalah bengkel motor terbaik yang menyediakan layanan perawatan dan perbaikan berkualitas tinggi untuk kendaraan Anda.">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,800;1,300;1,400;1,600;1,800&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="assets/landing/lib/animate/animate.min.css" rel="stylesheet">
        <link href="assets/landing/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="assets/landing/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="assets/landing/css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="text-primary fs-5">
                        <img src="assets/landing/img/Logo-removebg-preview (1).png" alt="AJM Logo" class="me-3" style="height: 1em;">Agus Jaya Motor
                    </h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">Tentang Kami</a>
                        <a href="service.php" class="nav-item nav-link">Servis</a>
                        <a href="product.php" class="nav-item nav-link">Produk</a>
                        <a href="contact.php" class="nav-item nav-link">Kontak</a>
                        <!-- Icon keranjang -->
                        <a href="keranjang.php" class="nav-item nav-link"><i class="fas fa-shopping-cart"></i></a>
                    </div>
                </div>
            </nav>

            <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="assets/landing/img/gambar bengkel.jpg" class="img-fluid w-100" alt="Image">
                            <div class="carousel-caption-1">
                                <div class="carousel-caption-1-content" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;" style="letter-spacing: 3px;">Bengkel Terbaik untuk Kalangan Masyarakat</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.3s" style="animation-delay: 1.3s;">Perbaiki motormu, dan nikmati perjalanan yang nyaman.</h1>
                                    <p class="mb-5 fs-5 text-white fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;">Bengkel Agus Jaya Motor siap menawarkan jasa servis dan melayani perbaikan lainnya untuk kenyamanan kendaraan anda.</p>
                                    <div class="carousel-caption-1-content-btn fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.7s" style="animation-delay: 1.7s;">
                                        <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="product.php">Belanja Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/landing/img/gambar bengkel.jpg" class="img-fluid w-100" alt="Image">
                            <div class="carousel-caption-2">
                                <div class="carousel-caption-2-content" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4 fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;" style="letter-spacing: 3px;">Bengkel Terbaik untuk Kalangan Masyarakat</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4 fadeInRight animated" data-animation="fadeInRight" data-delay="1.3s" style="animation-delay: 1.3s;">Perbaiki motormu, dan nikmati perjalanan yang nyaman.</h1>
                                    <p class="mb-5 fs-5 text-white fadeInRight animated" data-animation="fadeInRight" data-delay="1.5s" style="animation-delay: 1.5s;">Bengkel Agus Jaya Motor siap menawarkan jasa servis dan melayani perbaikan lainnya untuk kenyamanan kendaraan anda.</p>
                                    <div class="carousel-caption-2-content-btn fadeInRight animated" data-animation="fadeInRight" data-delay="1.7s" style="animation-delay: 1.7s;">
                                        <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Belanja Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn btn-primary fadeInLeft animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"> <i class="fa fa-angle-left fa-3x"></i></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn btn-primary fadeInRight animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fa fa-angle-right fa-3x"></i></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- feature Start -->
        <div class="container-fluid feature bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-uppercase text-primary">Fitur Kami</h4>
                    <h1 class="display-3 text-capitalize mb-3">Layanan Terbaik Kami</h1>
                </div>
                <div class="row g-4">
                    <div class=" col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item p-4">
                            <div class="feature-icon mb-3"><i class="fas fa-toolbox text-white fa-3x"></i></div>
                            <a href="#" class="h4 mb-3">Pemeriksaan Kualitas</a>
                            <p class="mb-3">Pemeriksaan kualitas kendaraan mencakup pengecekan kondisi mesin, sistem transmisi, rem, dan komponen lainnya untuk memastikan kendaraan tetap aman dan berkinerja optimal.</p>
                            <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item p-4">
                            <div class="feature-icon mb-3"><i class="fas fa-calendar-check text-white fa-3x"></i></div>
                            <a href="#" class="h4 mb-3">Pemeriksaan Berkala</a>
                            <p class="mb-3">Pemeriksaan berkala meliputi pengecekan rutin seperti kondisi oli, sistem kelistrikan, tekanan ban, dan filter udara untuk memastikan kendaraan tetap dalam kondisi prima.</p>
                            <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item p-4">
                            <div class="feature-icon mb-3"><i class="fas fa-cogs text-white fa-3x"></i></div>
                            <a href="#" class="h4 mb-3">Pemeriksaan Mesin</a>
                            <p class="mb-3">Pemeriksaan mesin mencakup pengecekan komponen utama seperti performa piston, sistem pembakaran, oli mesin, dan kebocoran agar kendaraan tetap bertenaga dan efisien.</p>
                            <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-item p-4">
                            <div class="feature-icon mb-3"><i class="fas fa-tools text-white fa-3x"></i></div>
                            <a href="#" class="h4 mb-3">Pemeriksaan Roda</a>
                            <p class="mb-3">Pemeriksaan roda meliputi kondisi ban, keseimbangan roda, tekanan angin, dan pemeriksaan velg untuk memastikan keamanan dan kenyamanan saat berkendara.</p>
                            <a href="#" class="btn text-secondary">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature End -->


        <!-- About Start -->
        <div class="container-fluid about overflow-hidden py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-img rounded h-100">
                            <img src="assets/landing/img/abouut.jpg" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="">
                            <div class="about-exp"><span>5 Tahun Pengalaman</span></div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="about-item">
                            <h4 class="text-primary text-uppercase">Tentang Kami</h4>
                            <h1 class="display-3 mb-3">Kami Menyediakan Bengkel yang Berkualitas.</h1>
                            <p class="mb-4">Agus Jaya Motor adalah bengkel motor yang menyediakan layanan servis lengkap untuk perawatan dan perbaikan berbagai jenis motor. 
                                Bengkel ini menawarkan layanan seperti servis rutin, pengecekan dan penggantian suku cadang, perbaikan mesin, serta modifikasi motor sesuai kebutuhan pelanggan. 
                                Dengan mekanik yang berpengalaman dan peralatan yang modern, Agus Jaya Motor berkomitmen memberikan pelayanan berkualitas untuk menjaga performa dan keamanan motor pelanggan.</p>
                            <a href="about.php" class="btn btn-secondary rounded-pill py-3 px-5">Lebih Banyak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Fact Counter -->
        <div class="container-fluid counter py-5 d-flex justify-content-center align-items-center">
            <div class="container py-5">
                <div class="row g-5 justify-content-center text-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-item">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-thumbs-up fa-3x text-white"></i>
                            </div>
                            <h4 class="text-white my-4">Klien yang Puas</h4>
                            <div class="counter-counting">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">50</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="counter-item">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-users fa-3x text-white"></i>
                            </div>
                            <h4 class="text-white my-4">Karyawan</h4>
                            <div class="counter-counting">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">5</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="counter-item">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-heart fa-3x text-white"></i>
                            </div>
                            <h4 class="text-white my-4">Pengalaman</h4>
                            <div class="counter-counting">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">5</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <!-- Fact Counter -->

        <!-- Service Start -->
        <div class="container-fluid service bg-light overflow-hidden py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-uppercase text-primary mb-2">Service Kami</h4>
                    <h1 class="display-4 text-capitalize mb-3">Perbaiki motormu, dan nikmati perjalanan yang nyaman.</h1>
                </div>
                <div class="row gx-4 gy-5 align-items-center">
                    <div class="col-lg-6 col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="service-item rounded p-4 shadow-lg hover-shadow">
                            <div class="d-flex align-items-center">
                                <div class="service-content">
                                    <a href="#" class="h4 d-inline-block mb-3 text-primary">Cek CVT</a>
                                    <p class="mb-0 text-muted">Pemeriksaan sistem transmisi otomatis seperti v-belt, roller, dan kampas kopling untuk memastikan performa optimal.</p>
                                    <a href="https://wa.me/6282211366436?text= saya mau tanya harga" class="btn text-secondary">Tanya Harga<i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="ps-4">
                                    <div class="service-btn bg-primary rounded-circle p-3">
                                        <i class="fas fa-tools text-white fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-item rounded p-4 shadow-lg hover-shadow mt-4">
                            <div class="d-flex align-items-center">
                                <div class="service-content">
                                    <a href="#" class="h4 d-inline-block mb-3 text-primary">Ganti Oli</a>
                                    <p class="mb-0 text-muted">Proses mengganti oli mesin lama dengan yang baru untuk menjaga pelumasan dan performa mesin.</p>
                                    <a href="https://wa.me/6282211366436?text= saya mau tanya harga" class="btn text-secondary">Tanya Harga<i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="ps-4">
                                    <div class="service-btn bg-danger rounded-circle p-3">
                                        <i class="fas fa-oil-can text-white fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-item rounded p-4 shadow-lg hover-shadow mt-4">
                            <div class="d-flex align-items-center">
                                <div class="service-content">
                                    <a href="#" class="h4 d-inline-block mb-3 text-primary">Bore Up</a>
                                    <p class="mb-0 text-muted">Modifikasi untuk meningkatkan kapasitas mesin demi performa lebih tinggi.</p>
                                    <a href="https://wa.me/6282211366436?text= saya mau tanya harga" class="btn text-secondary">Tanya Harga<i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="ps-4">
                                    <div class="service-btn bg-success rounded-circle p-3">
                                        <i class="fas fa-chart-line text-white fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="text-center">
                            <img src="assets/landing/img/service-removebg-preview.png" class="img-fluid w-75 rounded shadow-sm" alt="Service Illustration">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="service-item rounded p-4 shadow-lg hover-shadow">
                            <div class="d-flex align-items-center">
                                <div class="pe-4">
                                    <div class="service-btn bg-warning rounded-circle p-3">
                                        <i class="fas fa-check-circle text-white fa-2x"></i>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <a href="#" class="h4 d-inline-block mb-3 text-primary">Servis Rutin</a>
                                    <p class="mb-0 text-muted">Perawatan berkala untuk menjaga kondisi mesin dan sistem pendukung lainnya.</p>
                                    <a href="https://wa.me/6282211366436?text= saya mau tanya harga" class="btn text-secondary">Tanya Harga<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="service-item rounded p-4 shadow-lg hover-shadow mt-4">
                            <div class="d-flex align-items-center">
                                <div class="pe-4">
                                    <div class="service-btn bg-info rounded-circle p-3">
                                        <i class="fas fa-recycle text-white fa-2x"></i>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <a href="#" class="h4 d-inline-block mb-3 text-primary">Pengecekan Roda</a>
                                    <p class="mb-0 text-muted">Pemeriksaan kondisi roda, termasuk ban dan velg, untuk keamanan dan kenyamanan.</p>
                                    <a href="https://wa.me/6282211366436?text= saya mau tanya harga" class="btn text-secondary">Tanya Harga<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="service-item rounded p-4 shadow-lg hover-shadow mt-4">
                            <div class="d-flex align-items-center">
                                <div class="pe-4">
                                    <div class="service-btn bg-secondary rounded-circle p-3">
                                        <i class="fas fa-tachometer-alt text-white fa-2x"></i>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <a href="#" class="h4 d-inline-block mb-3 text-primary">Pengecekan Ban</a>
                                    <p class="mb-0 text-muted">Memastikan kondisi ban untuk keamanan dan efisiensi berkendara.</p>
                                    <a href="https://wa.me/6282211366436?text= saya mau tanya harga" class="btn text-secondary">Tanya Harga<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <!-- Service End -->


        <!-- Products Start -->
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="text-primary">Produk Kami</h2>
                <p class="text-muted">Berbagai produk berkualitas tinggi untuk kebutuhan kendaraan Anda</p>
            </div>
            <div class="row g-4">
                <?php
                $ambil = $koneksi->query("SELECT * FROM produk LIMIT 3"); // Mengambil 3 produk pertama
                while ($perproduk = $ambil->fetch_assoc()) {
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="product-item bg-light p-4 text-center">
                            <img src="foto_produk/<?php echo htmlspecialchars($perproduk['foto_produk']); ?>" alt="<?php echo htmlspecialchars($perproduk['nama_produk']); ?>" class="img-fluid mb-3" style="height: 200px; object-fit: cover;">
                            <h5 class="text-primary"><?php echo htmlspecialchars($perproduk['nama_produk']); ?></h5>
                            <p class="price">Rp <span class="price-value"><?php echo number_format($perproduk['harga_produk']); ?></span></p>
                            <div class="mt-4 flex justify-center"> 
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal_<?php echo $perproduk['id_produk']; ?>">Detail</button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modal_<?php echo $perproduk['id_produk']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal_<?php echo $perproduk['id_produk']; ?>_label" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal_<?php echo $perproduk['id_produk']; ?>_label">
                                        <?php echo htmlspecialchars($perproduk['nama_produk']); ?>
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="foto_produk/<?php echo htmlspecialchars($perproduk['foto_produk']); ?>" alt="<?php echo htmlspecialchars($perproduk['nama_produk']); ?>" class="img-fluid">
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Nama Produk:</strong> <?php echo htmlspecialchars($perproduk['nama_produk']); ?></p>
                                            <p><strong>Harga:</strong> Rp <?php echo number_format($perproduk['harga_produk']); ?></p>
                                            <p><strong>Deskripsi:</strong></p>
                                            <p><?php echo nl2br(htmlspecialchars($perproduk['deskripsi_produk'])); ?></p>
                                            <form method="post" action="beli.php?id=<?php echo $perproduk['id_produk']; ?>">
                                                <div class="form-group">
                                                    <label for="jumlah">Jumlah:</label>
                                                    <input type="number" min="1" max="<?php echo $perproduk['qty']; ?>" class="form-control" name="jumlah" required><br> <!-- Menambahkan max qty -->
                                                </div>
                                                <div class="mt-3">
                                                    <button type="submit" class="btn btn-primary">Beli Sekarang</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="product.php">Lebih Banyak </a>
                </div>
            </div>
        </div>
        <!-- Products End -->

        <!-- Blog Start -->
        <div class="container-fluid blog pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-uppercase text-primary">Our Blog</h4>
                    <h1 class="display-3 text-capitalize mb-3">Latest YouTube Videos</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <!-- Video 1 -->
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <!-- YouTube Video Embed -->
                                <iframe width="100%" height="250" src="https://www.youtube.com/embed/rLpI5oLY4b4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> Jan 12, 2025</div>
                            </div>
                            <div class="blog-content rounded-bottom p-4">
                                <a href="https://youtu.be/rLpI5oLY4b4" class="h4 d-inline-block mb-3" target="_blank">Pasang Pelek Racing</a>
                                <p>Pasang velg racing bebek di RX King dengan as 15mm.</p>
                                <a href="https://youtu.be/rLpI5oLY4b4" class="fw-bold text-secondary" target="_blank">Watch Now <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Video 2 -->
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <!-- YouTube Video Embed -->
                                <iframe width="100%" height="250" src="https://www.youtube.com/embed/UJGwyO9O2II" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> Jan 12, 2025</div>
                            </div>
                            <div class="blog-content rounded-bottom p-4">
                                <a href="https://youtu.be/UJGwyO9O2II" class="h4 d-inline-block mb-3" target="_blank">Beat Merah Injeksi Kasar</a>
                                <p>Masalah Beat merah dengan sistem injeksi yang kasar.</p>
                                <a href="https://youtu.be/UJGwyO9O2II" class="fw-bold text-secondary" target="_blank">Watch Now <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Video 3 -->
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <!-- YouTube Video Embed -->
                                <iframe width="100%" height="250" src="https://www.youtube.com/embed/uoX5FSi-mVA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="blog-date px-4 py-2"><i class="fa fa-calendar-alt me-1"></i> Jan 12, 2025</div>
                            </div>
                            <div class="blog-content rounded-bottom p-4">
                                <a href="https://youtu.be/uoX5FSi-mVA" class="h4 d-inline-block mb-3" target="_blank">Pasang Stang Seher Beat 2013</a>
                                <p>Proses pemasangan stang seher pada motor Beat tahun 2013.</p>
                                <a href="https://youtu.be/uoX5FSi-mVA" class="fw-bold text-secondary" target="_blank">Watch Now <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Team Start -->
        <div class="container-fluid team pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-uppercase text-primary">Our Team</h4>
                    <h1 class="display-3 text-capitalize mb-3">What is Really seo & How Can I Use It?</h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item p-4">
                            <div class="team-inner rounded">
                                <div class="team-img">
                                    <img src="assets/landing/img/team-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                                    <div class="team-share">
                                        <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href=""><i class="fas fa-share-alt"></i></a>
                                    </div>
                                    <div class="team-icon rounded-pill py-2 px-2">
                                        <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light rounded-bottom text-center py-4">
                                    <h4 class="mb-3">Hard Branots</h4>
                                    <p class="mb-0">CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item p-4">
                            <div class="team-inner rounded">
                                <div class="team-img">
                                    <img src="assets/landing/img/team-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                                    <div class="team-share">
                                        <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href=""><i class="fas fa-share-alt"></i></a>
                                    </div>
                                    <div class="team-icon rounded-pill py-2 px-2">
                                        <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light rounded-bottom text-center py-4">
                                    <h4 class="mb-3">Hard Branots</h4>
                                    <p class="mb-0">CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item p-4">
                            <div class="team-inner rounded">
                                <div class="team-img">
                                    <img src="assets/landing/img/team-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                                    <div class="team-share">
                                        <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href=""><i class="fas fa-share-alt"></i></a>
                                    </div>
                                    <div class="team-icon rounded-pill py-2 px-2">
                                        <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light rounded-bottom text-center py-4">
                                    <h4 class="mb-3">Hard Branots</h4>
                                    <p class="mb-0">CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-item p-4">
                            <div class="team-inner rounded">
                                <div class="team-img">
                                    <img src="assets/landing/img/team-4.jpg" class="img-fluid rounded-top w-100" alt="Image">
                                    <div class="team-share">
                                        <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href=""><i class="fas fa-share-alt"></i></a>
                                    </div>
                                    <div class="team-icon rounded-pill py-2 px-2">
                                        <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="bg-light rounded-bottom text-center py-4">
                                    <h4 class="mb-3">Hard Branots</h4>
                                    <p class="mb-0">CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-uppercase text-primary">Testimonials</h4>
                    <h1 class="display-3 text-capitalize mb-3">Our clients reviews.</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                    <div class="testimonial-item text-center p-4">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
                        </p>
                        <div class="d-flex justify-content-center mb-4">
                            <img src="assets/landing/img/testimonial-1.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                        </div>
                        <div class="d-block">
                            <h4 class="text-dark">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center p-4">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
                        </p>
                        <div class="d-flex justify-content-center mb-4">
                            <img src="assets/landing/img/testimonial-2.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                        </div>
                        <div class="d-block">
                            <h4 class="text-dark">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center p-4">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
                        </p>
                        <div class="d-flex justify-content-center mb-4">
                            <img src="assets/landing/img/testimonial-3.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                        </div>
                        <div class="d-block">
                            <h4 class="text-dark">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item text-center p-4">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt pariatur officiis quis molestias, sit iure sunt voluptatibus accusantium laboriosam dolore.
                        </p>
                        <div class="d-flex justify-content-center mb-4">
                            <img src="assets/landing/img/testimonial-4.jpg" class="img-fluid border border-4 border-primary" style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                        </div>
                        <div class="d-block">
                            <h4 class="text-dark">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h3 class="text-primary fs-5 mb-3">
                                <img src="assets/landing/img/Logo-removebg-preview (1).png" alt="AJM Logo" class="me-2" style="height: 1em;">Agus Jaya Motor
                            </h3>
                            <p class="mb-3">Agus Jaya Motor adalah bengkel motor yang menyediakan layanan servis lengkap untuk perawatan dan perbaikan berbagai jenis motor.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Tentang Kami</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Hubungi Kami</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Jam Operasional</h4>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Senin - Kamis:</h6>
                                <p class="text-white mb-0">09.00 s/d 17.00</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Jumat:</h6>
                                <p class="text-white mb-0">Libur</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Sabtu - Minggu:</h6>
                                <p class="text-white mb-0">09.00 s/d 17.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Kontak Info</h4>
                            <a href="#"><i class="fa fa-map-marker-alt me-2"></i> Jl. Pertengahan No.01, RT.12/RW.3, Cijantung, Kec. Ps. Rebo, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13780</a>
                            <a href="mailto:ajm@gmail.com"><i class="fas fa-envelope me-2"></i> ajm@gmail.com</a>
                            <a href="tel:082211366436"><i class="fas fa-phone me-2"></i> 0822-1136-6436</a>
                            <div class="d-flex align-items-center justify-content-end mt-4">
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-secondary btn-md-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Agus Jaya Motor</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        Designed By Tim 5 PPPL
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/landing/lib/wow/wow.min.js"></script>
        <script src="assets/landing/lib/easing/easing.min.js"></script>
        <script src="assets/landing/lib/waypoints/waypoints.min.js"></script>
        <script src="assets/landing/ib/counterup/counterup.min.js"></script>
        <script src="assets/landing/lib/owlcarousel/owl.carousel.min.js"></script>


        <!-- Template Javascript -->
        <script src="assets/landing/js/main.js"></script>
    </body>

</html>