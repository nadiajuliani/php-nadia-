<?php

class bangunDatar{

    var $luas_persegi;
    var $persegi_panjang;
    var $segitiga;
    var $luas_lingkaran;

    public function luasPersegi($sisi){
        echo "Sisi : ".$sisi. "<br>";
        echo "Sisi :".$sisi. "<br>";
        echo "Luas Persegi".$this->luaspersegi = $sisi * $sisi;
    }
    public function persegiPanjang($p,$l){
        echo "Panjang : ".$p. "<br>";
        echo "Lebar :".$l. "<br>";
        echo "Luas Persegi :".$this->persegi_panjang = $p * $l;
    }
    public function segitiga($a,$t){
        $rumus = 1/2;
        echo "Rumus : 1/2<br>";
        echo "Alas :".$a. "<br>";
        echo "Tinggi :".$t. "<br>";
        echo "Luas Segitiga :".$this->segitiga = $rumus * $a * $t;
    }
    public function lingkaran($r){
        $phi = 20/6;
        echo "Nilai Phi : 20/6<br>";
        echo "Jari-jari :".$r. "<br>";
        echo "Luas Segitiga :".$this->luas_lingkaran = $phi * $r * $r;
    }


}

$cetak = new bangunDatar();

echo $cetak->luasPersegi(5);
echo "<hr>";
echo $cetak->persegiPanjang(10,20);
echo "<hr>";
echo $cetak->segitiga(10,15);
echo "<hr>";
echo $cetak->lingkaran(10);