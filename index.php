<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Data Siswa Kelas</h2>
<a href="tambah.php" class="btn">+ Tambah Data</a>
<table>
    <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Absen</th>
        <th>NISN</th>
        <th>Aksi</th>
    </tr>
    <?php
    $result = mysqli_query($conn, "SELECT * FROM siswa");
    $no = 1;
    while ($data = mysqli_fetch_array($result)) {
        echo "<tr>
                <td>{$no}</td>
                <td>{$data['nama_lengkap']}</td>
                <td>{$data['absen']}</td>
                <td>{$data['nisn']}</td>
                <td>
                    <a href='edit.php?id={$data['id']}'>Edit</a> |
                    <a href='hapus.php?id={$data['id']}' onclick=\"return confirm('Hapus data?')\">Hapus</a>
                </td>
              </tr>";
        $no++;
    }
    ?>
</table>
</body>
</html>
