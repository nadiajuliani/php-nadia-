<?php
$jabatan = "Project Manager";
$absen = "60";
$perform = "10";

switch ($jabatan){
    case 'Programmer Junior':
        $gada = 6000000;
        break;
    case 'Programmer Senior':
        $gada = 10000000;
        break;
    case 'Project Manager':
        $gada = 15000000;
        break;
    default:
    $gada = 0;
    break;
}

$kehadiran = $absen ? 200000 : 0;

if ($perform > 90){
    $bonke = $gada * 0.1;
}else if ($perform >= 75 && $perform <= 90) {
    $bonke = $gadsa * 0.05;
}else {
    $bonke = 0;
}

$togaji = $gada + $kehadiran + $bonke ;
$papeng = $togaji * 0.05;
$togaber = $togaji - $papeng ;

echo "Jabatan : $jabatan <br>";
echo "Gaji Dasar : Rp" . number_format($gada,0,'.','.');
echo "<br>Tunjangan Kehadiran : Rp" . number_format($kehadiran,0,'.','.');
echo "<br>Bonus Kinerja : Rp" . number_format($bonke,0,'.','.');
echo "<br>Total Gaji Sebelum Pajak : Rp" . number_format($togaji,0,'.','.');
echo "<br>Pajak Penghasilan : Rp" . number_format($papeng,0,'.','.');
echo "<br>Total Gaji Bersih : Rp" . number_format($togaber,0,'.','.');
?>