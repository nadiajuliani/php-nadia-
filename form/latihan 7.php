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
            <h2>Form Biodata Diri</h2>
            <table> 
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" id=""></td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir" id=""></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
            </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" id=""></textarea></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><select name="agama" id="">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                </select></td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td><select name="pendidikan_terakhir" id="">
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMK">SMK</option>
                </select></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><select name="status" id="">
                    <option value="sudah menikah">Sudah menikah</option>
                    <option value="belum menikah">Belum menikah</option>
                </select></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type="checkbox" name="hobi" id="membaca">Membaca
            <input type="checkbox" name="hobi" id="menulis">Menulis
            <input type="checkbox" name="hobi" id="ngepush">Ngepush
        </td>
            </tr>
            <tr>
                <td>Cita-cita</td>
                <td>:</td>
                <td><select name="cita_cita" id="">
                    <option value="programer">Programer</option>
                    <option value="penari">Penari</option>
                    <option value="hacker">Hacker</option>
                </select></td>
            </tr>
            <tr>
                <td>Kata-Kata bijak</td>
                <td>:</td>
                <td><textarea name="kata_kata_bijak" id=""></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="kirim" value="kirim"></td>
            </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php

if(isset($_POST['kirim'])){

    $nama1 = $_POST['nama'];
    $temla1= $_POST['tempat_lahir'];
    $tangla1= $_POST['tanggal_lahir'];
    $jk=$_POST['jenis_kelamin'];
    $alamat= $_POST['alamat'];
    $agama= $_POST['agama'];
    $pente= $_POST['pendidikan_terakhir'];
    $status= $_POST ['status'];
    $hobi= $_POST['hobi'];
    $cita= $_POST['cita_cita'];
    $katbij=$_POST['kata_kata_bijak'];



?>
<br><br>
<center>
<table>
<h2>Hasil</h2>
<tr>
<td>Nama</td>
<td>:</td>
<td><?php echo "$nama1"?></td>
</tr>
<tr>
<td>Tempat Lahir</td>
<td>:</td>
<td><?php echo "$temla1"?></td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<td>:</td>
<td><?php echo "$tangla1"?></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td><?php echo "$jk"?></td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><?php echo "$alamat"?></td>
</tr>
<tr>
<td>Agama</td>
<td>:</td>
<td><?php echo "$agama"?></td>
</tr>
<tr>
<td>pendidikan_terakhir</td>
<td>:</td>
<td><?php echo "$pente"?></td>
</tr>
<tr>
<td>Status</td>
<td>:</td>
<td><?php echo "$status"?></td>
</tr>
<tr>
<td>Hobi</td>
<td>:</td>
<td><?php echo "$hobi"?></td>
</tr>
<tr>
<td>Cita-cita</td>
<td>:</td>
<td><?php echo "$cita"?></td>
</tr>
<tr>
<td>Kata-Kata Bijak </td>
<td>:</td>
<td><?php echo "$katbij"?></td>
</tr>
</table>

<?php
}
?>
</center>