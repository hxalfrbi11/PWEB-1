<?php
include 'db_connect.php'; // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // Query untuk menyimpan data ke database
    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>