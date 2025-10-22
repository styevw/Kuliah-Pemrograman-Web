<?php
include 'koneksi.php';
$id = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM diary WHERE id=$id");

if ($delete) {
    echo "<script>alert('Catatan berhasil dihapus!'); window.location='index.php';</script>";
} else {
    echo "Gagal menghapus catatan: " . mysqli_error($conn);
}
?>
