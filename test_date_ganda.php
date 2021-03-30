<?php

require_once('initialize.php');

use application\frontend\Mydate;

$tanggalku = new MyDate();
$tanggalku->penanggalan();

echo $tanggalku->penanggalan();