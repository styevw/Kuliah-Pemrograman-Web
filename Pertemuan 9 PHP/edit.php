<?php
include 'koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM diary WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<title>Edit Catatan</title>
</head>
<body>
<h2>Edit Catatan</h2>

<form method="POST" action="">
    Judul: <br>
    <input type="text" name="judul" value="<?php echo $row['judul']; ?>" required><br><br>
    Isi: <br>
    <textarea name="isi" rows="5" cols="40" required><?php echo $row['isi']; ?></textarea><br><br>
    <input type="submit" name="update" value="Update">
</form>

<?php
if (isset($_POST['update'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $update = mysqli_query($conn, "UPDATE diary SET judul='$judul', isi='$isi' WHERE id=$id");

    if ($update) {
        echo "<script>alert('Catatan berhasil diperbarui!'); window.location='index.php';</script>";
    } else {
        echo "Gagal memperbarui catatan: " . mysqli_error($conn);
    }
}
?>
</body>
</html>
