<?php

class contoh{

    public $nama = "nadia";

    private function tampil(){
        echo "Perkenalkan nama akuu $this->nama panggil aku nanat yaa";
    }
    public function keluar(){
        echo $this->tampil();

    }
}

$cetak = new contoh();
echo $cetak->keluar();
echo "<br>";
echo $cetak->nama;
