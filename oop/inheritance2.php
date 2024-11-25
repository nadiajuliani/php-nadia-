<?php

class bangun_datar{
    public $luas_peregi_panjang;
}

class luas extends bangun_datar{

    public function persegi_panjang($panjang,$lebar){
        echo "<h3>Menghitung luas peregi panjang</h3>";
        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar<br>";
        $this->luas_persegi_panjang = $panjang * $lebar;
        echo "Hasilnya : this->luas_persegi_panjang";
    }
}

$cetak = new luas();
echo $cetak->persegi_panjang(10,5);
?>