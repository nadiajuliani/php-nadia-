<?php

$nama = "Nadia";
$jk = "Perempuan";
$tgl = "2 oktober 2024";

echo "Nama : $nama <br>";
echo "Jenis Kelamin : $jk <br>";
echo "Tanggal Beli : $tgl <br>";



$jenis ="makanan";
$menu ="pentol";

if ($jenis == "makanan"){
    echo "Jenis : Makanan <br>";
    if ($menu == "seblak"){
        echo "Menu : Seblak <br>";
    }else if($menu == "pentol"){
        echo "Menu : Pentol <br>";
    }else if($menu == "batagor"){
        echo "Menu : Batagor <br>";
    }
    
}else if($jenis == "minuman"){
    echo "Jenis : Minuman <br>";
    if($menu == "thai tea"){
        echo "Menu : Thai tea <br>";
    }else if($menu == "mixue"){
        echo "Menu : Mixue <br>";
    }else if($menu == "kopi"){
        echo "Menu : Kopi <br>";
    }
}

$seblak = 10000;
$pentol = 15000;
$batagor = 20000;
$thai = 5000;
$mixue = 7000;
$kopi = 12000;
$jumlah = 10;
$diskon = 10000;

echo "Harga : $pentol <br>";
echo "Jumlah : $jumlah";
echo "<hr>";

$total = $pentol * $jumlah;
$hasil = $total - $diskon;

echo "Total : $total <br>";
echo "Diskon : $diskon <br>";
echo "<hr>";
echo "Total bayar : $hasil";

?>