<h2>Edit Produk</h2>

<?php
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_produk']; ?>">
    </div>
    <div class="form-group">
        <label>Harga (Rp.)</label>
        <input type="number" class="form-control" name="harga" value="<?php echo $pecah['harga_produk']; ?>">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="10"><?php echo $pecah['deskripsi_produk']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Qty</label>
        <input type="number" class="form-control" name="qty" value="<?php echo $pecah['qty']; ?>">
    </div>
    <div class="form-group">
        <img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="200">
    </div>
    <div class="form-group">
        <label>Ganti Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <button class="btn btn-primary" name="ubah">Ubah</button>
</form>


<?php
if (isset($_POST['ubah'])) {
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    
    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "../foto_produk/$namafoto");

        $koneksi->query("UPDATE produk SET 
            nama_produk='$_POST[nama]', 
            harga_produk='$_POST[harga]', 
            deskripsi_produk='$_POST[deskripsi]',
            qty='$_POST[qty]',
            foto_produk='$namafoto' 
            WHERE id_produk='$_GET[id]'");
    } else {
        $koneksi->query("UPDATE produk SET 
            nama_produk='$_POST[nama]', 
            harga_produk='$_POST[harga]', 
            deskripsi_produk='$_POST[deskripsi]',
            qty='$_POST[qty]'
            WHERE id_produk='$_GET[id]'");
    }
    echo "<script>alert('Data telah Diubah!!');</script>";
    echo "<script>location='index.php?halaman=produk';</script>";
}
?>
