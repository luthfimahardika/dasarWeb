<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
$hasilPenugasanTambah = $a += $b;
$hasilPenugasanKurang = $a -= $b;
$hasilPenugasanKali = $a *= $b;
$hasilPenugasanBagi = $a /= $b;
$hasilPenugasanPersen = $a %= $b;
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Tambah = $hasilTambah <br>";
echo "Hasil Kurang = $hasilKurang <br>";
echo "Hasil Kali = $hasilKali <br>";
echo "Hasil Bagi = $hasilBagi <br>";
echo "Sisa Bagi = $sisaBagi <br>";
echo "Pangkat = $pangkat <br>";
echo "<br>";

echo "Hasil Sama = $hasilSama <br>";
echo "Hasil Tidak Sama = $hasilTidakSama <br>";
echo "Hasil Lebih Kecil = $hasilLebihKecil <br>";
echo "Hasil Lebih Besar = $hasilLebihBesar <br>";
echo "Hasil Lebih Kecil Sama = $hasilLebihKecilSama <br>";
echo "Hasil Lebih Besar Sama = $hasilLebihBesarSama <br>";
echo "<br>";

echo "Hasil And = $hasilAnd <br>";
echo "Hasil Or = $hasilOr <br>";
echo "Hasil Not A = $hasilNotA <br>";
echo "Hasil Not B = $hasilNotB <br>";
echo "<br>";

echo "Hasil Penugasan Tambah = $hasilPenugasanTambah <br>";
echo "Hasil Penugasan Kurang = $hasilPenugasanKurang <br>";
echo "Hasil Penugasan Kali = $hasilPenugasanKali <br>";
echo "Hasil Penugasan Bagi = $hasilPenugasanBagi <br>";
echo "Hasil Penugasan Sisa Bagi = $hasilPenugasanPersen <br>";
echo "<br>";

echo "Hasil Identik = $hasilIdentik <br>";
echo "Hasil Tidak Identik = $hasilTidakIdentik <br>";
echo "<br>";

$total_kursi = 45;
$kursi_ditempati = 28;

$kursi_kosong = $total_kursi - $kursi_ditempati;
$persentase_kosong = ($kursi_kosong / $total_kursi) * 100;

echo "Jumlah kursi yang masih kosong: $kursi_kosong <br>";
echo "Persentase kursi yang masih kosong: " . round($persentase_kosong, 2) . "% <br>";
?>