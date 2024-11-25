<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>uas</title>
  </head>
  <body>
    <form action="" method="post">
    <center>
  <div class="" style="width: 25rem;">
  <img src="Logo_Indomaret.png" class="card-img-top" alt="...">
</div>
<h3>PENGGAJIHAN <br> KARYAWAN INDOMARET</h3>

<div class="card" style="width:40%">
  <div class="card-header" align="left">
    Data Penggajihan
  </div>
  <div class="card-body">

<div class="mb-3" style="width:95%" align="left">
  <label for="formGroupExampleInput" class="form-label">No</label>
  <input type="text" class="form-control" id="formGroupExampleInput"  name="no" placeholder="No">
</div>

<div class="mb-3" style="width:95%" align="left">
  <label for="formGroupExampleInput2" class="form-label">Nama</label>
  <input type="text" class="form-control" id="formGroupExampleInput2"  name="nama" placeholder="Nama">
</div>

<div class="mb-3" style="width:95%" align="left">
  <label for="formGroupExampleInput2" class="form-label">Unit Pendidikan</label>
  <select class="form-select"  name="unit" aria-label="Default select example">
  <option selected>Pilih Unit Pendidikan</option>
  <option value="SD">SD</option>
  <option value="SMP">SMP</option>
  <option value="SMK/SMA">SMK/SMA</option>
</select>
</div>

<div class="mb-3" style="width:95%" align="left">
  <label for="formGroupExampleInput2" class="form-label">Tanggal Gaji</label>
  <input type="date" class="form-control"  name="tg" id="formGroupExampleInput2" placeholder="">
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="">
      <div class="card-body">
        <h5 class="card-title">Gaji</h5>
        <div class="mb-3" style="width:95%" align="left">
  <label for="formGroupExampleInput2" class="form-label">Jabatan</label>
  <select class="form-select"  name="jabatan" aria-label="Default select example">
  <option selected>Pilih Jabatan</option>
  <option value="Pramuniaga">Pramuniaga</option>
  <option value="Kasir">Kasir</option>
  <option value="Merchandiser">Merchandiser</option>
  <option value="Building Maintance">Building Maintenance</option>
  <option value="Mekanik">Mekanik</option>
</select>
</div>
<div class="mb-3" style="width:95%" align="left">
  <label for="formGroupExampleInput2" class="form-label">Lama Kerja</label>
  <input type="text" class="form-control" id="formGroupExampleInput2"  name="lamker" placeholder="Lama Kerja">
</div>

<div class="mb-3" style="width:95%" align="left" >
  <label for="formGroupExampleInput2" class="form-label">Status Kerja</label>
  <select class="form-select" name="staker" aria-label="Default select example">
  <option selected>Pilih Status Kerja</option>
  <option value="Tetap">Tetap</option>
  <option value="Kontrak">Kontrak</option>
</select>
</div>

      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="">
      <div class="card-body">
        <h5 class="card-title">Potongan</h5>
        <div class="mb-3" style="width:95%" align="left">
  <label for="formGroupExampleInput2" class="form-label">BPJS</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" name="bpjs" placeholder="BPJS">
</div>

<div class="mb-3" style="width:95%" align="left">
  <label for="formGroupExampleInput2" class="form-label">Pinjaman</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" name="pinjam" placeholder="Pinjaman">
</div>

<div class="mb-3" style="width:95%" align="left" >
  <label for="formGroupExampleInput2" class="form-label">Cicilan</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" name="cicil" placeholder="Cicilan">
</div>

<div class="mb-3" style="width:95%" align="left">
  <label for="formGroupExampleInput2" class="form-label">Infaq</label>
  <input type="text" class="form-control" id="formGroupExampleInput2"  name="infaq" placeholder="Infaq">
</div>

      </div>
    </div>
  </div>
</div>
 
<tr> 
<td></td>
                    <td></td>
                    <td><input type="submit" value="submit" name="submit"></td>
                    </tr>
</div>
</div> 
</form>
</body>
</html>

<html>
  <body>
<table>
  <tr>
    <td>
    <?php


if(isset($_POST['submit'])){
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tgl_gaji = $_POST['tg'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lamker'];
    $status_kerja = $_POST['staker'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjam'];
    $cicilan = $_POST['cicil'];
    $infaq = $_POST['infaq'];


if ($jabatan == "Pramuniaga"){
   $gaji = 5000000;
}elseif ($jabatan == "Kasir"){
   $gaji = 4000000;
}elseif ($jabatan == "Merchandiser"){
    $gaji = 5000000;
}elseif ($jabatan == "Building Maintenance"){
    $gaji = 3500000;
}elseif ($jabatan == "Mekanik"){
    $gaji = 4500000;
}else {
    $gaji = 0;
}

$bonus= ($status_kerja == "Tetap") ? 1000000 : 0 ;

//$gaji_kotor = $gaji + $bonus;
//$topot = $bpjs + $pinjaman + $cicilan + $infaq;
$gaji_bersih = ($gaji + $bonus) - ($bpjs + $pinjaman + $cicilan + $infaq); 

    class struk_gaji{

      //public $luas;

      public function gaji($no2,$nama2,$unit2,$tgl_gaji2,$jabatan2,$gaji2,$lama_kerja2,$status_kerja2,$bonus,$bpjs2,$pinjaman2,$cicilan2,$infaq2,$gaji_bersih){
       ?>
     <div class="card">
  <div class="card-header">
    Nadia Juliani 
  </div>
  <div class="card-body">
    <blockquote class="blockquote md-5">
      <table>
        <tr>
          <td><b>STRUKTUR GAJI</b></td>
          <td></td>
          <td></td>
        </tr>
         <tr>
          <td><?php echo "No : ".$no2."<br>";?></td>
         </tr>
         <tr>
          <td><?php echo "Nama : ".$nama2."<br>";?></td>
         </tr>
          <tr>
            <td><?php echo "Unit Pendidikan :".$unit2."<br>";?></td>
          </tr>
          <tr>
            <td><?php echo "Tanggal Gaji :".$tgl_gaji2."<br>";?></td>
          </tr>
          <tr>
            <td><?php  echo "Jabatan :".$jabatan2."<br>";?></td>
          </tr>
         <tr>
          <td><?php  echo "Gaji :".$gaji2."<br>";?></td>
         </tr>
         <tr>
          <td><?php echo "Lama Kerja :".$lama_kerja2."<br>";?></td>
         </tr>
          <tr>
            <td><?php echo "Status Kerja :".$status_kerja2."<br>";?></td>
          </tr>
          <tr>
            <td><?php  echo "Bonus :".$bonus."<br>";?></td>
          </tr>
         <tr>
          <td><?php  echo "BPJS :".$bpjs2."<br>"; ?></td>
         </tr>
         <tr>
          <td><?php  echo "Pinjaman :".$pinjaman2."<br>"; ?></td>
         </tr>
         <tr>
          <td><?php  echo "Cicilan :".$cicilan2."<br>"; ?></td>
         </tr>
         <tr>
          <td><?php echo "Infaq :".$infaq2."<br>"; ?></td>
         </tr>
          <tr>
            <td><?php  echo "Gaji Bersih : ".$gaji_bersih."<br>"; ?></td>
          </tr>
         
          </table>
          </blockquote>
  </div>
</div>
       <?php
      }
  }

  $cetak = new struk_gaji();
  echo $cetak->gaji($no,$nama,$unit,$tgl_gaji,$jabatan,$gaji,$lama_kerja,$status_kerja,$bonus,$bpjs,$pinjaman,$cicilan,$infaq,$gaji_bersih);
}

?>



    </td>
  </tr>
</table>
</center>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
 
    </body>
</html>