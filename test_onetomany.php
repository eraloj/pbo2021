<?php

require_once ('vendor/autoload.php');

use App\Pengguna;
use App\Penjual;
use App\Alamat;

$aldo = new Pengguna(3,"Eraldo Jonathan", new Alamat(18, "Sungai Jawi"));

$lapak_budi = new Penjual ();
$lapak_budi ->setName('Budi');
$lapak_budi ->setId(2);

$lapak_ani = new Penjual ();
$lapak_ani ->setName('ani');
$lapak_ani ->setId(1);

$lapak_wati = new Penjual ();
$lapak_wati ->setName('wati');
$lapak_wati ->setId(3);

$aldo->setPenjual($lapak_budi);
$aldo->setPenjual($lapak_ani);
$aldo->setPenjual($lapak_wati);

$penjual_aldo = $aldo->getPenjual();
echo $penjual_aldo[0]->getName();//ada 3 index 0,1,2