<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "kontak_form"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO kontak (nama, email, kelamin, nim, kelas, pesan) VALUES (?, ?, ?, ?, ?, ?)");

if ($stmt === false) {
    die('Prepare failed: ' . htmlspecialchars($conn->error));
}

$nama = isset($_POST['nama']) ? $_POST['nama'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$kelamin = isset($_POST['kelamin']) ? $_POST['kelamin'] : null;
$nim = isset($_POST['nim']) ? $_POST['nim'] : null;
$kelas = isset($_POST['kelas']) ? $_POST['kelas'] : null;
$pesan = isset($_POST['pesan']) ? $_POST['pesan'] : null;

if ($nama === null || $email === null || $kelamin === null || $nim === null || $kelas === null || $pesan === null) {
    die("Error: Semua field form harus diisi.");
}

$stmt->bind_param("ssssss", $nama, $email, $kelamin, $nim, $kelas, $pesan);

if ($stmt->execute()) {
    echo "Formulir anda telah terkirim";
} else {
    echo "Error: " . htmlspecialchars($stmt->error);
}

$stmt->close();
$conn->close();
?>
