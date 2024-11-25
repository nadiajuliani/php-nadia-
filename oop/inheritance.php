<?php

//class utama
class kendaraan{
    protected $warna = "putih";
    public $merk;
}

//class turunan
class mobil extends kendaraan{
    public function deskripsi(){
        echo "warna mobil $this->warna";
    }
}

$cetak = new mobil();
echo $cetak->deskripsi();
?>