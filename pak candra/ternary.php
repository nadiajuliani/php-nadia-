<?php
$years = date("Y");

$kabisat = $years % 4 == 0 ? 'kabisat' : 'bukan kabisat';

echo "$years itu tahun $kabisat";
?>