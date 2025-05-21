<?php
include 'db.php';

$nama = $_POST['nama'] ?? '';
$harga = $_POST['harga'] ?? '';
$deskripsi = $_POST['deskripsi'] ?? '';

if (empty($nama) || empty($harga) || empty($deskripsi)) {
    echo "Semua field harus diisi. <a href='form.php'>Kembali</a>";
    exit;
}

$sql = "INSERT INTO products (nama_produk, harga, deskripsi, stok) VALUES (?, ?, ?, 0)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sis", $nama, $harga, $deskripsi);

if ($stmt->execute()) {
    echo "Produk berhasil ditambahkan.";
} else {
    echo "Gagal menambahkan produk: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
