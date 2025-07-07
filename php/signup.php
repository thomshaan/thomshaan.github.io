<?php

if(isset($POST["submit"]))
{
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }


// Memeriksa apakah form telah dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $umur = $_POST["email"];
    $alamat = $_POST["alamat"];
    $nomortelepon = $_POST["nomortelepon"];
    $password = $_POST["password"];

    // Validasi data
    $errors = array();
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email tidak valid.";
    }
    if (empty($umur)) {
        $errors[] = "Password harus diisi.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password harus minimal 8 karakter.";
    }
    if ($password != $confirm_password) {
        $errors[] = "Konfirmasi password tidak cocok.";
    }

    $sql = "INSERT INTO anggota_tbl (username, email_anggota, umur_anggota, no_telepon, password_anggota) VALUES ('$nama', '$email', '$umur', '$no_telepon', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

}
}
?>
