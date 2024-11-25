<?php

$nama = "Nadia Juliani";
$kelas = "XI RPL 2";
$jk = "Perempuan";

echo "Nama : $nama <br>";
echo "Kelas : $kelas <br>";
echo "Jenis Kelamin : $jk <br> <br>";

$nilai_mtk = "90";
$nilai_bindo = "90";
$nilai_binggris = "80";
$nilai_pro= "80";

echo "Nilai Matematika : $nilai_mtk <br>";
echo "Nilai B. indonesia : $nilai_bindo <br>";
echo "Nilai B. Inggris : $nilai_binggris <br>";
echo "Nilai Produktif : $nilai_pro <br><br>";

$mtk=90;
$indo=90;
$inggris=80;
$pro=80;
$bagi=4;

$jumlah = $mtk + $indo + $inggris + $pro;
$hasil = $jumlah / $bagi;

echo "Rata-rata : $hasil <br>";
echo "Keterangan :";

$nilai = 85;

if($nilai >= 75){
  echo "Selamat anda lulus";
}else{
    echo "Anda Tidak Lulus";
}
?>