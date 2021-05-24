<?php

use App\Pengguna;
use App\Alamat;

require_once('vendor/autoload.php');

$pengguna = new Pengguna (3,"Eraldo Jonathan", new Alamat(18, "Sungai Jawi"));

$alamat_pengguna = $pengguna->getAlamat();
echo $alamat_pengguna->getKota();