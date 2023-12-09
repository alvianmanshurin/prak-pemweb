<!-- 
    Nama    : Avian MANSHURIN
    Nim     : 120140162
    Kelas   : RC
-->

<?php

$koneksi = mysqli_connect("localhost", "root", "", "contacts");

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];

$query = "INSERT INTO contacts VALUES ('$id', '$nama', '$email', '$email')";

mysqli_query($koneksi, $query);

?>