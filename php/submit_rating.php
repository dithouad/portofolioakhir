<?php
// Ambil data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $performance_rating = $_POST['performance_rating']; // Radio button value
    $criticism = htmlspecialchars($_POST['criticism']);
    $suggestion = htmlspecialchars($_POST['suggestion']);

    // Proses penyimpanan data atau pengiriman email bisa ditambahkan di sini
    // Contoh sederhana, simpan data ke file log
    $file = 'ratings.log';
    $content = "Name: $name\nEmail: $email\nPerformance Rating: $performance_rating\nCriticism: $criticism\nSuggestion: $suggestion\n\n";

    // Tulis data ke file log
    file_put_contents($file, $content, FILE_APPEND | LOCK_EX);

    // Redirect kembali ke halaman sebelumnya atau halaman lain
    header('Location: ../');
    exit;
}
?>
