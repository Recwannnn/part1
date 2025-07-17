<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Tambah Data Siswa</h2>
<form method="post">
    <label>Nama Lengkap</label>
    <input type="text" name="nama" required>

    <label>Absen</label>
    <input type="number" name="absen" required>

    <label>NISN</label>
    <input type="text" name="nisn" required>

    <input type="submit" name="submit" value="Simpan">
</form>

<?php
if (isset($_POST['submit'])) {
    $nama  = $_POST['nama'];
    $absen = $_POST['absen'];
    $nisn  = $_POST['nisn'];

    mysqli_query($conn, "INSERT INTO siswa (nama_lengkap, absen, nisn) VALUES ('$nama', '$absen', '$nisn')");
    header("Location: index.php");
}
?>
</body>
</html>
