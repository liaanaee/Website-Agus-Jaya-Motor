<!DOCTYPE html>
<html lang="en">

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
                        <a href="service.php" class="nav-item nav-link">Produk</a>
                        <a href="contact.php" class="nav-item nav-link active">Kontak</a>
                        <!-- Icon keranjang -->
                        <a href="keranjang.php" class="nav-item nav-link"><i class="fas fa-shopping-cart"></i></a>
                    </div>
                </div>
            </nav>

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Hubungi Kami</h4>
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- Contact Start -->
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 h-100 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                            <h4 class="text-uppercase text-primary">Hubungi Kami</h4>
                            <h1 class="display-3 text-capitalize mb-3">Kirim Pesan</h1>
                            <p class="mb-0">Apakah Anda mengalami kendala dengan motor Anda? Jangan ragu untuk menyampaikan masalah atau keluhan Anda kepada kami. 
                                Tinggalkan pesan detail mengenai kendala yang Anda hadapi, dan tim kami akan dengan senang hati membantu mencari solusi terbaik untuk Anda. 
                                Kami berkomitmen memberikan pelayanan yang cepat dan memuaskan!</p>
                        </div>
                        <form>
                            <div class="row g-4">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="name" placeholder="Your Name">
                                        <label for="name">Nama</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0" id="email" placeholder="Your Email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="phone" class="form-control border-0" id="phone" placeholder="Phone">
                                        <label for="phone">No. HandPhone</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 175px"></textarea>
                                        <label for="message">Pesan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-inline-flex rounded bg-white w-100 p-4">
                                    <i class="fas fa-map-marker-alt fa-2x text-secondary me-4"></i>
                                    <div>
                                        <h4>Alamat</h4>
                                        <p class="mb-0">Jl. Pertengahan No.01, RT.12/RW.3, Cijantung, Kec. Ps. Rebo, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13780</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="d-inline-flex rounded bg-white w-100 p-4">
                                    <i class="fas fa-envelope fa-2x text-secondary me-4"></i>
                                    <div>
                                        <h4>Email Kami</h4>
                                        <p class="mb-0">ajm@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="d-inline-flex rounded bg-white w-100 p-4">
                                    <i class="fa fa-phone-alt fa-2x text-secondary me-4"></i>
                                    <div>
                                        <h4>Telephone</h4>
                                        <p class="mb-0">0822-1136-6436</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="h-100 overflow-hidden">
                                    <iframe class="w-100 rounded" 
                                            style="height: 400px;" 
                                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15808.267278442264!2d106.8584818!3d-6.3188221!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eda2059521f1%3A0x2d6629cf58f77841!2sJl.%20Pertengahan%20No.1%2C%20RT.1%2FRW.3%2C%20Cijantung%2C%20Kec.%20Ps.%20Rebo%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013770!5e0!3m2!1sen!2sid!4v1605613493829!5m2!1sen!2sid" 
                                            loading="lazy" 
                                            referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

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