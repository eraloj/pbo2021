<?php
require_once 'Mahasiswa.php';
require_once 'MahasiswaBaru.php';
require_once 'User.php';
require_once 'Pegawai.php';
require_once 'Dosen.php';

//mahasiwa//
$aldo = new Mahasiswa('H1101191026','Eraldo Jonathan Ramadhan','2000-12-18','Pria');
$padel = new Mahasiswa('H1101191034','Muhammad Fadilah','2001-01-03','Pria');
$ipan = new Mahasiswa('H1101191062','Muhammad Pramudia Irvan Chaniago','2001-05-05','Pria');

//pegawai//
$p1 = new Pegawai('198503302003121002','Pegawai Baru 1','089694040172','3.000.000');
$p2 = new Pegawai('198503302003121003','Pegawai Baru 2','089694040173','3.500.000');
$p3 = new Pegawai('198503302003121004','Pegawai Baru 3','089694040174','4.000.000');

//MahasiswaBaru//
$mb1 = new MahasiswaBaru ('H1101201026','Jonathan Rama','2002-12-18','Pria',13245678);
$mb2 = new MahasiswaBaru ('H1101201026','Ammad Dilah','2002-01-03','Pria', 86754321);
$mb3 = new MahasiswaBaru ('H1101201026','Muham Amudia ','2002-05-05','Pria', 53421678);
 
//Dosen//
$d1 = new Dosen ('022407865',"Dosen 1",'198503302003111002','Pegawai Baru Dosen 1','089694040111','3.000.000');
$d2 = new Dosen ('022407864',"Dosen 2",'198503302003111003','Pegawai Baru Dosen 2','089694040122','3.500.000');
$d3 = new Dosen ('022407863',"Dosen 3",'198503302003111004','Pegawai Baru Dosen 3','089694040133','4.000.000');

//User//
$u1 = new User ('username 1','password1');
$u2 = new User ('username 2','password2');
$u3 = new User ('username 3','password3');

?>

<html>
 <head>
   <title>Praktikum 03 - Inheritance
</title>
 </head>
 <body>

 <?php
   $aldo ->tampilkanAngkatan();
   $aldo ->tampilkanUmur();
   $aldo ->tampilkanNama();
?>
<?php
   $padel ->tampilkanAngkatan();
   $padel ->tampilkanUmur();
   $padel ->tampilkanNama();
?>
<?php
   $ipan ->tampilkanAngkatan();
   $ipan ->tampilkanUmur();
   $ipan ->tampilkanNama();
?>

