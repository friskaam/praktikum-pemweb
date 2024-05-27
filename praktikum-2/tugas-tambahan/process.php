<?php
$nama = $tanggal = $npm = $jenis_kelamin = $fakultas = $no_telepon = $program_studi = $email = $mata_kuliah = $alamat = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = test_input($_POST["nama"]);
    $tanggal = test_input($_POST["tanggal"]);
    $npm = test_input($_POST["npm"]);
    $jenis_kelamin = isset($_POST["jenis-kelamin"]) ? test_input($_POST["jenis-kelamin"]) : "";
    $fakultas = test_input($_POST["fakultas"]);
    $no_telepon = test_input($_POST["no-telepon"]);
    $program_studi = test_input($_POST["program-studi"]);
    $email = test_input($_POST["email"]);
    $mata_kuliah = test_input($_POST["mata-kuliah"]);
    $alamat = test_input($_POST["alamat"]);

    echo "<h2>Data Mahasiswa</h2>";
    echo "<p>Nama: $nama</p>";
    echo "<p>NPM: $npm</p>";
    echo "<p>Fakultas: $fakultas</p>";
    echo "<p>Program Studi: $program_studi</p>";
    echo "<p>Mata Kuliah: $mata_kuliah</p>";
    echo "<p>Tanggal: $tanggal</p>";
    echo "<p>Jenis Kelamin: $jenis_kelamin</p>";
    echo "<p>No. Telepon: $no_telepon</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Alamat: $alamat</p>";
    echo "<a href=\"index.html\">Back</a>";
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
