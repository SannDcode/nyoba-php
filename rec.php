<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Format data yang ingin disimpan
    $data = "Nama: $name, Email: $email\n";

    // Simpan data ke file
    file_put_contents('data.txt', $data, FILE_APPEND);

    // Tampilkan pesan sukses
    echo "Data berhasil disimpan!";
} else {
    echo "Metode pengiriman tidak valid.";
}
?>
