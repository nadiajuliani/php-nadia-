<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Data Diri Calon Pendaftaran (Form yg bertanda * wajib di isi)</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan" id="">
                        <option value="pilih jurusan">Pilih Jurusan</option>
                        <option value="tkro(mobil)">TKRO(Mobil)</option>
                        <option value="tsbm(motor)">TBSM(Motor)</option>
                        <option value="rpl(komputer)">RPL(Komputer)</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="Nama_Lengkap" id=""></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name="jenis_kelamin" id="" value="laki-laki">Laki-Laki 
                        <input type="radio" name="jenis_kelamin" id="" value="perempuan">Perempuan</td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat_lahir" id=""></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" id=""></td>
                </tr>
                <tr>
                    <td>Nomor HP siswa yang bisa dihubungi</td>
                    <td>:</td>
                    <td><input type="number" name="no" id=""></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="submit" name="submit"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<html>
    <body>
        <center>
            <table>
                <tr>
                    <td>
<?php
if(isset($_POST['submit'])){
    $jurusan = $_POST['jurusan'];
    $nama = $_POST['Nama_Lengkap'];
    $jk = $_POST['jenis_kelamin'];
    $lahir = $_POST['tempat_lahir'];
    $tgl = $_POST['tanggal_lahir'];
    $no = $_POST['no'];
    $email = $_POST['email'];

    class data_diri{

        //public $luas;

        public function pendaftaran($jurusan2,$nama2,$jk,$lahir,$tgl,$no,$email){

           echo "Jurusan : ".$jurusan2."<br>";
           echo "Nama Lengkap : ".$nama2."<br>";
           echo "Jenis Kelamin :".$jk."<br>";
           echo "Tempat Lahir :".$lahir."<br>";
           echo "Tanggal Lahir :".$tgl."<br>";
           echo "No HP siswa yg  bisa dihubungi :".$no."<br>";
           echo "Email :".$email."<br>";
        }
    }

    $cetak = new data_diri();
    echo $cetak->pendaftaran($jurusan,$nama,$jk,$lahir,$tgl,$no,$email);

}
?>

</td>
</tr>
</table>
</center>
 </body>
</html>