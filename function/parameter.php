<?php

function datadiri($jurusan, $nama, $jk, $tempat_lahir, $tanggal_lahir, $no_hp,$email){
    echo "Jurusan : $jurusan <br>";
    echo "Nama Lengkap  : $nama <br>";
    echo "Jenis Kelamin : $jk <br>";
    echo "Tempat Lahir  : $tempat_lahir <br>";
    echo "Tanggal lahir : $tanggal_lahir <br>";
    echo "No Hp         : $no_hp <br>";
    echo "Email         : $email";
}

echo "<h3> Data Diri </h3>";
datadiri("RPL","Nadia","perempuan","Bandung","26 juli 2008","089652145544","juliani226@gmail.com");
echo "<hr>";

function calonpendaftar($provinsi, $kab, $kec, $desa, $alamat, $kode_pos){
    echo "Provinsi       : $provinsi <br>";
    echo "Kab/Kota       : $kab <br>";
    echo "Kecamatan      : $kec <br>";
    echo "Desa/Kelurahan : $desa <br>";
    echo "Alamat         : $alamat <br>";
    echo "Kode Pos       : $kode_pos <br>";

}
echo "<h3> Alamat Calon Pendaftar </h3>";
calonpendaftar("Jawa barat","kab.bandung","Baleendah","Rancamanyar","kp.nusa baru","40376");
echo "<hr>";

function asal($asal, $alamat_sekolah){
    echo "Asal Sekolah   : $asal <br>";
    echo "Alamat Sekolah : $alamat_sekolah <br>";
}

echo "<h3> Data asal sekolah </h3>";
asal("Mts.Nurul Iman","cibaduyut");
echo "<hr>";

function ortu($namleng, $pekerjaan, $no_hp, $alamat){
    echo "Nama Lengkap Ayah/Ibu/Wali : $namleng <br>";
    echo "Pekerjaan Ayah/Ibu/Wali    : $pekerjaan <br>";
    echo "No Hp yg bisa dihubungi    : $no_hp <br>";
    echo "Alamat Lengkap             : $alamat <br>";
}

echo "<h3> Data Orang Tua </h3>";
ortu("Rani Nurani","rumah tangga","088802203106","kp.nusa baru");
echo "<hr>";

?>