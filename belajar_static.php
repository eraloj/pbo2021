<?php 

require_once('vendor\autoload.php');
Use App\Mahasiswa ; 

Mahasiswa::bergerak();

echo Mahasiswa::$status. "<br/>";

$status_mahasiswa = Mahasiswa::NONAKTIF;
echo $status_mahasiswa . "<br/>";

echo Mahasiswa::hitungsks(3,2);

?>