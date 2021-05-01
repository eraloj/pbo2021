<?php
require_once('vendor/autoload.php');

use App\Frontend\MyDate as FMyDate ;
use App\MyDate ; 

$tanggal = new FMyDate ();
$tgl = new Mydate ();

$tgl->setDay(18);
$tgl->setMonth(12);
$tgl->setYear(2021);

echo $tgl->getYear();

echo $tanggal->penanggalan();

