<?php include 'config.php'; ?>
<?php
$id = $_GET['id'];
$data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM siswa WHERE id=$id"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Edit Data Siswa</h2>
<form method="post">
    <label>Nama Lengkap</label>
    <input type="text" name="nama" value="<?= $data['nama_lengkap'] ?>" required>

    <label>Absen</label>
    <input type="number" name="absen" value="<?= $data['absen'] ?>" required>

    <label>NISN</label>
    <input type="text" name="nisn" value="<?= $data['nisn'] ?>" required>

    <input type="submit" name="submit" value="Update">
</form>

<?php
if (isset($_POST['submit'])) {
    $nama  = $_POST['nama'];
    $absen = $_POST['absen'];
    $nisn  = $_POST['nisn'];

    mysqli_query($conn, "UPDATE siswa SET nama_lengkap='$nama', absen='$absen', nisn='$nisn' WHERE id=$id");
    header("Location: index.php");
}
?>
</body>
</html>
