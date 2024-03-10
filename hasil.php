<?php
//menangkap value form berdasarkan unique name & simpan kedalam varible
$nim = $_POST['nim']; 
$nama = $_POST['nama']; 
$jk = $_POST['jk']; 
$prodi = $_POST['prodi']; 
$skill = $_POST['skill']; 
$domisili = $_POST['domisili']; 
$email = $_POST['email']; 

$nilai = 0;
foreach ($skill as $data) {
    switch ($data) {
        case 'html':
            $nilai += 10;
            break;
        case 'css':
            $nilai += 10;
            break;
        case 'javascript':
            $nilai += 20;
            break;
        case 'rwd':
            $nilai += 20;
            break;
        case 'php':
            $nilai += 30;
            break;
        case 'java':
            $nilai += 30;
            break;
        case 'phyton':
            $nilai += 50;
            break;
        default:
            # code...
            break;
    }
}
echo "<h4>Informasi Yang Dikirim</h4>";
echo "<table border='1'>";
echo "<tr><td>NIM</td><td>$nim</td></tr>";
echo "<tr><td>Nama</td><td>$nama</td></tr>";
echo "<tr><td>Jenis Kelamin</td><td>$jk</td></tr>";
echo "<tr><td>Program Studi</td><td>$prodi</td></tr>";
echo "<tr><td>Skill</td><td>" . implode(", ", $skill) . "</td></tr>";
echo "<tr><td>Domisili</td><td>$domisili</td></tr>";
echo "<tr><td>Email</td><td>$email</td></tr>";
echo "<tr><td>Nilai skill</td><td>$nilai</td></tr>";
echo "<tr><td>Keterangan</td><td>";
if ($nilai == 0) {
    echo "Tidak memadai";
} elseif ($nilai <= 40) {
    echo "Kurang";
} elseif ($nilai <= 60) {
    echo "Cukup";
} elseif ($nilai <= 100) {
    echo "Baik";
} elseif ($nilai <= 150) {
    echo "Sangat baik";
}
echo "</td></tr>";
echo "</table>";