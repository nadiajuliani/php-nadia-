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
            <h2>Form Bilangan</h2>
            <table>
                <tr>
                    <td>Masukan Bilangan</td>
                    <td>:</td>
                    <td><input type="number" name="masukan_bilangan" id=""></td>
                </tr>
                <tr>
                    <td>Jenis Bilangan</td>
                    <td>:</td>
                    <td><select name="jenis_bilangan" id="">
                        <option value="kelipatan 3">Kelipatan 3</option>
                        <option value="ganjil">Ganjil</option>
                        <option value="genap">Genap</option>
                        <option value="besar ke kecil">Besar ke Kecil</option>
                    </select></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>    
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if (isset ($_POST ['simpan'])){

    $mb = $_POST ['masukan_bilangan'];
    $jb = $_POST ['jenis_bilangan'];

    if($jb == "besar ke kecil") {
        for($i=$mb; $i >= 1 ; $i-- ){
            echo " $i";
        }
    } elseif ($jb == "ganjil") {
        for($i=1; $i <= $mb ; $i+=2){
            echo " $i";
        }
    } elseif ($jb == "genap") {
        for($i=1; $i <= $mb ; $i+=2){
            echo " $i";
        }
    } elseif ($jb == "kelipatan 3") {
        for($i=1; $i <= $mb ; $i+=3) {  
            echo " $i";
          }
    }
}
?>