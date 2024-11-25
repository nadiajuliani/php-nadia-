<?php

class pendaftaran{
    public function dataDiricalonPendaftar($jurusan, $nama_lengkap, $jk, $tempat_lahir, $tanggal_lahir, $no_hp, $email){

        echo "Jurusan : ".$jurusan."<br>";
        echo "Nama Lengkap :".$nama_lengkap."<br>";
        echo "Jenis Kelamin : ".$jk."<br>";
        echo "Tempat Lahir :".$tempat_lahir."<br>";
        echo "Tanggal Lahir : ".$jk."<br>";
        echo "No Hp Siswa :".$no_hp."<br>";
        echo "Email :".$email."<br>";

    }
    public function asal($provinsi, $kotkab, $kecamatan, $deskel, $alamat, $kodpos){

        echo "Provinsi : ".$provinsi."<br>";
        echo "Kota / Kabupaten :".$kotkab."<br>";
        echo "Kecamatan : ".$kecamatan."<br>";
        echo "Desa / Kelurahan :".$deskel."<br>";
        echo "Alamat : ".$alamat."<br>";
        echo "Kode pos :".$kodpos."<br>";
    }
    public function asalSekolah($nama_asal_sekolah, $alamat_sekolah){

        echo "Nama asal sekolah : ".$nama_asal_sekolah."<br>";
        echo "Alamat sekolah :".$alamat_sekolah."<br>";
    }
    public function dataOrangtua($nama, $pekerjaan, $notlp, $alamat_ortu){

        echo "Nama Lengkap ayah / ibu / wali : ".$nama."<br>";
        echo "Pekerjaan ayah / ibu / wali :".$pekerjaan."<br>";
        echo "No Hp yg bisa dihubungi: ".$notlp."<br>";
        echo "Alamat Lengkap:".$alamat_ortu."<br>";
    }
}

$cetak = new pendaftaran();

echo $cetak->dataDiricalonPendaftar("Rpl","Nadia Juliani","Perempuan","Bandung","2008-07-26","089652145544","julianinadia266@gmail.com");
echo "<hr>";
echo $cetak->asal("Jawa barat","Kab.Bandung","Baleendah","Rancamanyar","Kp.nusabaru","-");
echo "<hr>";
echo $cetak->asalSekolah("Mts.Nurul iman","Cibaduyut");
echo "<hr>";
echo $cetak->dataOrangtua("Rani nurani","Pabrik","088802203104","nusa baru");

?>