<?php

require_once('vendor/autoload.php');

use App\Person;

$aldo = new Person();

$aldo -> goodBye ('Aldo');
$aldo ->hasName = "Eraldo";
echo $aldo->hasName;
