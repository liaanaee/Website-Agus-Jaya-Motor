<!DOCTYPE html>
<html lang="en">
<?php
session_start();
// Koneksi ke database
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

    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 fixed-top bg-white shadow-sm">
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
                    <a href="index.php" class="nav-item nav-link text-dark">Home</a>
                    <a href="about.php" class="nav-item nav-link text-dark">Tentang Kami</a>
                    <a href="service.php" class="nav-item nav-link text-dark">Servis</a>
                    <a href="product.php" class="nav-item nav-link text-dark">Produk</a>
                    <a href="contact.php" class="nav-item nav-link text-dark">Kontak</a>
                    <a href="keranjang.php" class="nav-item nav-link text-dark active"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Main Content Start -->
    <main class="container mx-auto px-4 py-16" style="padding-top: 120px;">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Checkout</h2>
        <?php if (isset($_SESSION['keranjang']) && !empty($_SESSION['keranjang'])) { ?>
        <div class="bg-white shadow-lg rounded-lg p-8">
            <table class="table table-hover">
                <thead style="background-color: #4a90e2; color: white;">
                    <tr>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) {
                        $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = $id_produk");
                        $pecah = $ambil->fetch_assoc();
                        $subtotal = $pecah['harga_produk'] * $jumlah;
                        $total += $subtotal;
                    ?>
                    <tr>
                        <td><?php echo $pecah['nama_produk']; ?></td>
                        <td>Rp. <?php echo number_format($pecah['harga_produk']); ?></td>
                        <td><?php echo $jumlah; ?></td>
                        <td>Rp. <?php echo number_format($subtotal); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="text-end"><strong>Total</strong></td>
                        <td colspan="2">Rp. <?php echo number_format($total); ?></td>
                    </tr>
                </tfoot>
            </table>
            <div class="mt-8">
                <form action="proses_checkout.php" method="POST">
                    <div class="mt-8">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Metode Pembayaran</h3>
                        <div id="payment-timer" class="text-red-500 font-semibold"></div>
                        <div class="mb-4">
                            <input type="radio" id="bank_transfer" name="payment_method" value="bank_transfer" required>
                            <label for="bank_transfer" class="text-gray-800">Transfer Bank</label>
                        </div>
                        <div id="bank_details" style="display: none;" class="bg-gray-100 p-4 rounded-lg">
                            <p class="text-gray-800">Silakan transfer ke salah satu rekening bank kami:</p>
                            <ul class="list-disc ml-5">
                                <li>Bank BCA - 2730408334 a/n Agus Jaya Motor</li>
                                <li>Dana - 082111053731 a/n Agus Jaya Motor</li>
                            </ul>
                            <p class="text-gray-800 mt-2">Setelah melakukan transfer, konfirmasi pembayaran melalui halaman <a href="https://wa.me/6282111053731?text= saya mau konfirmasi pembayaran" class="text-yellow-500 hover:underline">konfirmasi pembayaran</a>.</p>
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <a href="nota.php" class="btn btn-warning">Checkout</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php } else { ?>
        <div class="text-center">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Keranjang Anda Kosong</h3>
            <a href="product.php" class="btn btn-warning">Belanja Sekarang</a>
        </div>
        <?php } ?>
    </main>
    <!-- Main Content End -->
    
    <script>
        document.getElementById('bank_transfer').addEventListener('change', function() {
        document.getElementById('bank_details').style.display = 'block';
        });
        // Set timer for 5 minutes (300 seconds)
        let timeLeft = 300;

        function startTimer() {
            const timer = setInterval(function () {
                const minutes = Math.floor(timeLeft / 60);
                const seconds = timeLeft % 60;

                // Update timer display
                document.getElementById("payment-timer").innerHTML = 
                `Waktu pembayaran tersisa: ${minutes} menit ${seconds} detik`;

                timeLeft--;

                // When time is up, redirect or alert
                if (timeLeft < 0) {
                    clearInterval(timer);
                    alert('Waktu pembayaran telah habis! Anda akan diarahkan kembali ke halaman keranjang.');
                    window.location.href = "keranjang.php";  // Redirect to cart or another page
                }
            }, 1000);
        }

        // Start the timer when the page loads
        window.onload = startTimer;
    </script>
    
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/landing/lib/wow/wow.min.js"></script>
    <script src="assets/landing/lib/easing/easing.min.js"></script>
    <script src="assets/landing/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/landing/lib/counterup/counterup.min.js"></script>
    <script src="assets/landing/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/landing/js/main.js"></script>
</body>

</html>
