<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $ucapan = $_POST['ucapan'];
    $keterangan = $_POST['keterangan'];

    if (!empty($nama) && !empty($ucapan) && !empty($keterangan)) {
        $sql = "INSERT INTO bukutamu (nama, ucapan, keterangan) VALUES ('$nama', '$ucapan', '$keterangan')";
        if ($connection->query($sql) === TRUE) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
    } else {
        echo "Semua kolom harus diisi!";
    }
}
?>
