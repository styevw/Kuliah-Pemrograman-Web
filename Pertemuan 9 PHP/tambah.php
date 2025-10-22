<?php include 'koneksi.php'; ?>

<title>Tambah Catatan</title>
</head>
<body>
<h2>Tambah Catatan Baru</h2>
<form method="POST" action="">
    Judul: <br>
    <input type="text" name="judul" required><br><br>
    Isi: <br>
    <textarea name="isi" rows="5" cols="40" required></textarea><br><br>
    <input type="submit" name="submit" value="Simpan">
</form>

<?php
if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $sql = "INSERT INTO diary (judul, isi) VALUES ('$judul', '$isi')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Catatan berhasil disimpan!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
</body>
</html>
