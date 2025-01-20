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
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">Tentang Kami</a>
                        <a href="service.php" class="nav-item nav-link">Servis</a>
                        <a href="service.php" class="nav-item nav-link active">Produk</a>
                        <a href="contact.php" class="nav-item nav-link">Kontak</a>
                        <!-- Icon keranjang -->
                        <a href="keranjang.php" class="nav-item nav-link"><i class="fas fa-shopping-cart"></i></a>
                    </div>
                </div>
            </nav>

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Produk Kami</h4>
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- Product Start -->
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
            </div>
        </div>
        <!-- Product End -->

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