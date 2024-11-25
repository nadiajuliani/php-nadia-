<?php

//clasa/krangka dasar

class manusia{
    //property/atribut
    public $warna;
    public $jk = "wanita";

    //method/function

    function makan(){
        echo "Nadia makan mie";
    }
    function data(){
        echo "Nadia seorang $this->jk";
    }
}

//object / untuk menampilkan yg ada di dalam class

$cetak = new manusia();
echo $cetak->makan();
echo "<br>";
echo $cetak->data();


?>