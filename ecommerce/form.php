<!DOCTYPE html>
<html>
<head>
    <title>Form Produk</title>
</head>
<body>
    <h2>Tambah Produk</h2>
    <form action="process.php" method="post">
        <label>Nama Produk:</label><br>
        <input type="text" name="nama"><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga"><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi"></textarea><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
