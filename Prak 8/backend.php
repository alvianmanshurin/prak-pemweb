<!-- 
    Nama    : Avian MANSHURIN
    Nim     : 120140162
    Kelas   : RC
-->

<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "contacts";

$koneksi = new mysqli($host, $username, $password, $database);
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Operasi Create (Tambah kontak baru)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    $sql = "INSERT INTO contacts (nama, email, telepon) VALUES ('$nama', '$email', '$telepon')";
    if ($koneksi->query($sql) === TRUE) {
        // Redirect ke halaman setelah berhasil menambah kontak
        header('Location: Index.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

// Operasi Read (Tampilkan daftar kontak)
$sql = "SELECT id, nama, email, telepon FROM contacts";
$result = $koneksi->query($sql);

// Operasi Delete (Hapus kontak)
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $deleteSql = "DELETE FROM contacts WHERE id=$id";

    if ($koneksi->query($deleteSql) === TRUE) {
        header('Location: Index.php');
        exit;
    } else {
        echo "Error deleting record: " . $koneksi->error;
    }
}

$koneksi->close();