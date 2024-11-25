<?php

class manusia{
    //property
    var $nama;
    var $warna;

    function __construct(){
        echo "isi method construct <br>";
    }

    function tampilkan_nama(){
        echo "nama saya nadia";
    }
}

$cetak = new manusia();

echo $cetak->tampilkan_nama();