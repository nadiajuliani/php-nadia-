<?php

//nama class
class manusia{
    //prop
    public $nama;
    public $warna;

    //method manusia
    function tampilkan_nama(){
        return "nama saya nadia";
    }
}

//instansiasi nama class
$cetak = new manusia();

//memanggil method
echo $cetak->tampilkan_nama();