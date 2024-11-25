<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="POST">
            <h2>Seblak Ceu Iroh</h2>
            <table>
                <tr>
                    <td>Nama Pembeli</td>
                    <td>:</td>
                    <td><input type="text" name="nama_pembeli" value=""></td>
                </tr>
                <tr>
                    <td>Tanggal Beli</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_beli" value=""></td>
                </tr>
                <tr>
                    <td>Makanan</td>
                    <td>:</td>
                    <td><select name="m" id="">
                        <option value="seblak ceker" name="sc">Seblak Ceker</option>
                        <option value="cilok goang" name ="cg">Cilok Goang</option>
                        <option value="cimol bojot" name="cb">Cimol Bojot</option>
                        <option value="makroni seuhah" name="ms">Makroni Seuhah</option>
                        <option value="pentol" name="p">Pentol</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Qty</td>
                    <td>:</td>
                    <td><input type="number" name="qty"></td>
                </tr>
                <tr>
                    <td>Minuman</td>
                    <td>:</td>
                    <td><select name="minuman" id="">
                        <option value="air mineral">Air Mineral</option>
                        <option value="teh manis">Teh Manis</option>
                        <option value="jus">Jus</option>
                        <option value="lemon tea">Lemon Tea</option>
                        <option value="thai tea">Thai Tea</option>
                    </select></td>           
                </tr>
                <tr>
                    <td>Qty</td>
                    <td>:</td>
                    <td><input type="number" name="qty2"></td>
                </tr>
                <tr>
                    <td>Pembayaran</td>
                    <td>:</td>
                    <td><input type="radio" name="bayar" id="" value="Cash">Cash
                    <input type="radio" name="bayar" id="" value="Qris">Qris</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="save" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </center>


    <?php
    if(isset($_POST['save'])){
        $nb = $_POST['nama_pembeli'];
        $tb = $_POST['tanggal_beli'];
        $mkn = $_POST['m'];
        $q = $_POST['qty'];
        $mnm = $_POST['minuman'];
        $qt = $_POST['qty2'];
        $pem = $_POST['bayar'];


        switch($mkn){
            case "seblak ceker":
                $harga1 = 10000;
                break;
            case "cilok goang":
                $harga1 = 15000;
                break;
            case "cimol bojot":
                $harga1 = 30000;
                break;
            case "makroni seuhah":
                $harga1 = 40000;
                break;
            case "pentol":
                $harga1 = 45000;
                break;
            default;
            $harga1 = 0;
            break;
        }
        switch($mnm){
            case "air mineral":
                $harga2 = 5000;
                break;
            case "teh manis":
                $harga2 = 10000;
                break;
            case "jus":
                $harga2 = 15000;
                break;
            case "lemon tea":
                $harga2 = 20000;
                break;
            case "thai tea":
                $harga2 = 25000;
                break;
            default;
            $harga2 = 0;
            break;
        }

        
    $total = ($harga1 * $q) + ($harga2 * $qt);

    if($total >= 50000){
        $diskon = $total * 0.1; 
    } else {
        $diskon= 0;
    }
?>
<center> 
<table>
    <p>------------------------------------------------------------------------------------</p>
    <h3>-- STRUK PEMBAYARAN SEBLAK CEU IROH --</h3>
    <p>------------------------------------------------------------------------------------</p>

<tr>
    <td>Nama Pembeli</td>
    <td>:</td>
    <td><?php echo "$nb" ?></td>
</tr>
<tr>
    <td>Tanggal</td>
    <td>:</td>
    <td><?php echo "$tb" ?></td>
</tr>
<tr>
    <td>Makanan</td>
    <td>:</td>
    <td><?php echo "$mkn" ?></td>
</tr>
<tr>
    <td>Harga</td>
    <td>:</td>
    <td><?php echo "$harga1" ?></td>
</tr>
<tr>
    <td>Qty</td>
    <td>:</td>
    <td><?php echo "$q" ?></td>
</tr>
<tr>
    <td>Minuman</td>
    <td>:</td>
    <td><?php echo "$mnm" ?></td>
</tr>
<tr>
    <td>Harga</td>
    <td>:</td>
    <td><?php echo "$harga2" ?></td>
</tr>
<tr>
    <td>Qty</td>
    <td>:</td>
    <td><?php echo "$qt" ?></td>
</tr>
<tr>
    <td>Pembayaran</td>
    <td>:</td>
    <td><?php echo "$pem" ?>   
</td>
</tr>
</table>
<p>------------------------------------------------------------------------------------</p>
<table>
    <tr>
        <td>Total</td>
        <td>:</td>
        <td><?php echo "$total" ?></td>
    </tr>
</table>
<p>------------------------------------------------------------------------------------</p>
<table>
    <tr>
        <td>Diskon</td>
        <td>:</td>
        <td><?php echo "$diskon" ?></td>
    </tr>
    <tr>
        <td>Bonus Pembayaran</td>
        <td>:</td>
        <td><?php     
        if($pem == "Qris"){
        $pem = 20000;
        echo "$pem";   
    } else {
        $pem = 0;
        echo "$pem";
    } ?></td>
    </tr>
</table>
<p>------------------------------------------------------------------------------------</p>
<table>
    <tr>
        <td>Total Pembayaran</td>
        <td>:</td>
        <td><?php  $tepe = $total - ($diskon + $pem); 
        echo $tepe;
        ?></td> 
    </tr>
</table>
</center>
<?php
} ?>
    
</body>
</html>