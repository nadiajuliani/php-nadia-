<?php

//nama class
class manusia{
    //prop
    protected $nama = "nadia";

    //method manusia
    protected function nama(){
        return "nama saya".$this->nama;
    }
    public function tampilkan_nama(){
        return $this->nama;
    }
}

//instansiasi nama class
$cetak = new manusia();

//memanggil method
echo $cetak->tampilkan_nama();