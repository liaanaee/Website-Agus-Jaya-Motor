<?php
session_start();
include 'koneksi.php';
// Mendapatkan ID produk yang dibeli dan jumlah yang dibeli
$id_produk = $_GET['id'];
$jumlah = $_POST['jumlah'];
// Ambil data produk dari database berdasarkan ID
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
$produk = $ambil->fetch_assoc();
// Mengurangi qty produk yang dibeli
$qty_sekarang = $produk['qty'];
$qty_baru = $qty_sekarang - $jumlah;
// Update qty produk di database
$koneksi->query("UPDATE produk SET qty='$qty_baru' WHERE id_produk='$id_produk'");
// Simpan informasi pembelian ke dalam keranjang atau transaksi
// Misalnya, masukkan ke dalam tabel `keranjang` atau `transaksi`
// Mulai sesi jika belum dimulai
if (!isset($_SESSION['keranjang'])) {
    $_SESSION['keranjang'] = [];
}
// Jika produk sudah ada di keranjang, tambahkan jumlahnya
if (isset($_SESSION['keranjang'][$id_produk])) {
    $_SESSION['keranjang'][$id_produk] += $jumlah;
} else {
    // Jika produk belum ada, tambahkan produk ke keranjang
    $_SESSION['keranjang'][$id_produk] = $jumlah;
}
// Redirect ke halaman keranjang setelah menambah item
echo "<script>alert('Produk berhasil ditambahkan ke keranjang');</script>";
echo "<script>location='keranjang.php';</script>";
?>