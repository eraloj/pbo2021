<?php

use application\Dosen;
use application\Mahasiswa;

require_once 'initialize.php';


$dian = new Dosen('198411132015041001', 'Tenaga Pengajar', '0800000', 'Dian Prawira', '13118405', '5000000');

$dian->mengajar();
$dian->meneliti();

$lita = new Mahasiswa('H1101191058', 'Lita Novitasari', '01-01-1965', 'P');
$lita->tampilkanAngkatan();

use application\backend\MyDate;
$tanggal = new MyDate();