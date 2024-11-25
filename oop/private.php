<?php

//nama class
class manusia{
    //prop
    public $nama = "nadia";

    //method manusia
    function tampilkan_nama(){
        return "nama saya".$this->nama;

    }
}

//instansiasi nama class
$cetak = new manusia();

//memanggil method
echo $cetak->tampilkan_nama();