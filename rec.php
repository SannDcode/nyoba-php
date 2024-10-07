<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

// Cek metode request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form dengan sanitasi
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Format data yang ingin disimpan
    $data = "Nama: $name, Email: $email\n";

    // Simpan data ke file
    $file = 'data.txt'; // Set path to data.txt
    if (file_put_contents($file, $data, FILE_APPEND) !== false) {
        // Tampilkan pesan sukses
        echo "Data berhasil disimpan!";
    } else {
        // Tampilkan pesan kesalahan
        echo "Terjadi kesalahan saat menyimpan data.";
    }
} else {
    echo "Metode pengiriman tidak valid.";
}
?>
