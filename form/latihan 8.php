<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <h2>Nilai Ujian Sekolah</h2>
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama_lengkap" id=""></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" id=""></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan" id="">
                        <option value="rekayasa perangkat lunak">Rekayasa Perangkat Lunak</option>
                        <option value="teknik bisnis sepeda motor">Teknik Bisnis Sepeda Motor</option>
                        <option value="teknik kendaraan ringan otomotif">Teknik Kendaraan Ringan Otomitif</option>
                    </select></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><b>Masukan Nilai</b></td>
                </tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="nilai_harian" id="">40%</td>
                </tr>
                <tr>
                    <td>Nilai Sikap</td>
                    <td>:</td>
                    <td><input type="number" name="nilai_sikap" id="">20%</td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="nilai_uts" id="">20%</td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="nilai_uas" id="">20%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="Proses"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if (isset($_POST ['proses'])){
    $nl = $_POST ['nama_lengkap'];
    $kelas = $_POST ['kelas'];
    $jurusan = $_POST ['jurusan'];
    $nh = $_POST ['nilai_harian'];
    $ns = $_POST ['nilai_sikap'];
    $nu = $_POST ['nilai_uas'];
    $nu2 = $_POST ['nilai_uts'];
    
    $rt = ($nh * 0.4)+($ns * 0.2)+($nu * 0.2)+($nu2 * 0.2);
     
    ?>

    <center>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo "$nl"?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?php echo "$kelas"?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><?php echo "$jurusan"?></td>
            </tr>
            <tr>
                <td>Nilai Harian</td>
                <td>:</td>
                <td><?php echo "$nh"?></td>
            </tr>
            <tr>
                <td>Nilai Sikap</td>
                <td>:</td>
                <td><?php echo "$ns"?></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><?php echo "$nu"?></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><?php echo "$nu2"?></td>
            </tr>
            <tr>
                <td>Rata-Rata</td>
                <td>:</td>
                <td><?php echo "$rt"?></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><?php $ket = "$rt";
                if ($ket >= 75) {
                    echo "Selamat anda lulus";
                }else {
                    echo "Anda tidak lulus";
                }
                ?></td>
            </tr>
        </table>
    </center>
    <?php
}
?>