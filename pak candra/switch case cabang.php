<?php

$tipeakun = "User";
$aksi ="Edit";
echo "Tipe akun : $tipeakun <br>";

switch ($tipeakun){
    case "admin":
    switch ($aksi){
        case "Edit":
            echo "Aksi : Edit Akun Admin";
        break;
        case "Hapus":
            echo "Aksi : Hapus Akun Admin";
        break;
    }break;
    case "User":
        switch ($aksi){
            case "Edit":
                echo "Aksi : Edit Akun User";
            break;
            case "Hapus":
                echo "Aksi : Hapus Akun User";
            break;
        }break;
    default :
        echo "Akun Tidak Ada";
}