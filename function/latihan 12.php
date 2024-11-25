<?php


echo "<center><h1> Menghitung luas bangun datar </h1> </center> <br>";

echo "<h2> Menghitung luas persegi </h2>";


function bangun_datar($s){
    echo "Sisi : $s * $s <br>";
    echo "Jumlah Luas :" . $jumlah = $s * $s;

}

bangun_datar(5);
echo "<hr>";

function persegi_panjang($p,$l){

    echo "Panjang : $p <br>";
    echo "Lebar : $l <br>";
    echo "Luas : ".$jumlah = $p * $l ;
}
 
echo "<h2>Menghitung Luas Persegi Panjang</h2>";
persegi_panjang(20,25);
echo "<hr>";

function luas_segitiga($a,$t){

    $rumus = 1/2;
    $jumlah = $rumus * $a * $t;

    echo "Rumus : 1/2 <br>";
    echo "Alas : $a <br>";
    echo "Tinggi : $t<br>";
    echo "Luas : " . $jumlah;
}
    
echo "<h2>Menghitung Luas Segitiga</h2>";
luas_segitiga(10,15);
echo "<hr>";

function luas_lingaran($r){
 
    $TT = 20/6;

    $jumlah = $TT * $r * $r;

    echo "Nilai : 20/6 <br>";
    echo "Jari - Jari : $r <br>";
    echo "Luas :" . $jumlah;
 }

 echo "<h2> Menghitung Luas Lingkaran</h2>";
 luas_lingaran (15);


?>