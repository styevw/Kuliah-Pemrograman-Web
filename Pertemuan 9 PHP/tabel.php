<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM diary ORDER BY timestamp DESC");
?>

<table border="1" width="80%" align="center" cellpadding="8" cellspacing="0">
<tr style="background-color:#e6e6e6;">
    <th>No</th>
    <th>Judul</th>
    <th>Isi</th>
    <th>Waktu</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$no}</td>
            <td>{$row['judul']}</td>
            <td>{$row['isi']}</td>
            <td>{$row['timestamp']}</td>
            <td>
                <a href='edit.php?id={$row['id']}'>Edit</a> | 
                <a href='hapus.php?id={$row['id']}' onclick='return confirm(\"Yakin mau hapus?\")'>Hapus</a>
            </td>
          </tr>";
    $no++;
}
?>
</table>
