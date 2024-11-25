<?php
echo "<h2>Soal 1</h2>";
$buku = "Novel";
$genre ="comedy";

switch ($buku) {
    case "Komik":
        echo "Jenis Buku : Komik <br> Harga : Rp.50.000 <br>";
    switch ($genre){
    case "romance":
    echo "Genre : Romance <br> Anda mendapat cahsback 5%";
    break;
    case "thriller":
    echo "Genre : Thiller <br> Anda mendapat cahsback 10%";
    break;
    case "comedy":
    echo "Genre : Comedy <br> Anda mendapat cahsback 15%";
    break;
}break;
case "Novel":
    echo "Jenis Buku : Novel <br> Harga : Rp.65.000 <br>";
    switch ($genre){
        case "romance":
        echo "Genre : Romance <br> Anda mendapat cahsback 5%";
        break;
        case "thriller":
        echo "Genre : Thiller <br> Anda mendapat cahsback 10% ";
        break;
        case "comedy":
        echo "Genre : Comedy <br> Anda mendapat cahsback 15%";
        break;
}break;
case "Sejarah":
    echo "Jenis Buku : Sejarah <br> Harga : Rp.45.000 <br>";
    switch ($genre){
        case "romance":
        echo "Genre : Romance <br> Anda mendapat cahsback 5%";
        break;
        case "thriller":
        echo "Genre : Thiller <br> Anda mendapat cahsback 10%";
        break;
        case "comedy":
        echo "Genre : Comedy <br> Anda mendapat cahsback 15%";
        break;
}break;
}

echo "<hr>";
echo "<h2>Soal 2</h2>";

$tb = 168;
$bb = 70;

$keterangan = ($tb>= 165 && $bb <= 75) ? "Lolos" : "Tidak Lolos";

echo "Tinggi Badan : $tb <br>";
echo "Berat Badan : $bb <br>";
echo "Keterangan : $keterangan";
echo "<hr>";

$buku ="Dilan wo i ni";
$harga = 80000;
$genre ="fiksi";
$cashback = 0;

switch ($genre){
    case "Romance":
        $cashback = $harga * 0.05;
        break;
    case "Thriller":
        $cashback = $harga * 0.1;
        break;
    case "Comedy":
        $cashback = $harga * 0.15;
        break;
    default :
    $cashback = 0;    
}

echo "Judul Buku : $buku <br>";
echo "Genre : $genre <br>";
echo "Harga : Rp." . number_format($harga,0,'.','.') . "<br>";
echo "Cashback : Rp." . number_format($cashback,0,'.','.');
?>