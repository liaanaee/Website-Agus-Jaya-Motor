<?php
session_start();
include 'koneksi.php';

// Inisialisasi variabel keranjang belanja
$keranjang = isset($_SESSION['keranjang']) ? $_SESSION['keranjang'] : [];
$total_pembelian = 0;

// Hitung total pembelian jika keranjang tidak kosong
if (!empty($keranjang)) {
    foreach ($keranjang as $id_produk => $jumlah) {
        // Query untuk mengambil informasi produk
        $ambil_produk = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$id_produk'");
        if ($ambil_produk && $ambil_produk->num_rows > 0) {
            $produk = $ambil_produk->fetch_assoc();
            $subtotal = $produk['harga_produk'] * $jumlah;
            $total_pembelian += $subtotal;
        }
    }
}
?>
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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;800&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

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

    <!-- Nota Pembelian Start -->
    <div class="container mx-auto px-4 py-8" style="padding-top: 120px;">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Nota Pembelian</h2>

            <!-- Tombol Download Nota -->
            <div class="mt-6">
                <a href="downloadnota.php" class="bg-yellow-500 text-white py-2 px-4 rounded-lg hover:bg-yellow-400">Download Nota PDF</a>
            </div>

            <!-- Detail Pembelian -->
            <div class="mt-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Detail Pembelian</h3>
                <?php if (!empty($keranjang)) { ?>
                    <table class="min-w-full border-collapse border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">No.</th>
                                <th class="border border-gray-300 px-4 py-2">Produk</th>
                                <th class="border border-gray-300 px-4 py-2">Harga</th>
                                <th class="border border-gray-300 px-4 py-2">Jumlah</th>
                                <th class="border border-gray-300 px-4 py-2">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($keranjang as $id_produk => $jumlah) {
                                $ambil_produk = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$id_produk'");
                                if ($ambil_produk && $ambil_produk->num_rows > 0) {
                                    $produk = $ambil_produk->fetch_assoc();
                                    $subtotal = $produk['harga_produk'] * $jumlah;
                                    ?>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2"><?php echo $no++; ?></td>
                                        <td class="border border-gray-300 px-4 py-2"><?php echo htmlspecialchars($produk['nama_produk']); ?></td>
                                        <td class="border border-gray-300 px-4 py-2">Rp. <?php echo number_format($produk['harga_produk']); ?></td>
                                        <td class="border border-gray-300 px-4 py-2"><?php echo $jumlah; ?></td>
                                        <td class="border border-gray-300 px-4 py-2">Rp. <?php echo number_format($subtotal); ?></td>
                                    </tr>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="5" class="text-center border border-gray-300 px-4 py-2">Produk dengan ID <?php echo $id_produk; ?> tidak ditemukan.</td>
                                    </tr>
                                <?php }
                            }
                            ?>
                            <!-- Total pembelian -->
                            <tr>
                                <td colspan="4" class="border border-gray-300 px-4 py-2 text-right font-semibold">Total Pembelian:</td>
                                <td class="border border-gray-300 px-4 py-2 font-semibold">Rp. <?php echo number_format($total_pembelian); ?></td>
                            </tr>
                        </tbody>
                    </table>
                <?php } else { ?>
                    <p class="text-gray-800">Keranjang belanja Anda kosong.</p>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Nota Pembelian End -->

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
