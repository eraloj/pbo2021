<?php
require_once 'User.php';
class Pegawai extends User{
 public $nip;
 public $nama;
 public $no_hp;
 public $gaji_pokok;
 
 function __construct($nip,$nama,$nh,$gp){
   $this->nip = $nip;
   $this->nama = $nama;
   $this->no_hp = $nh;
   $this->gaji_pokok = $gp;
 }
 
 public function tampilkanGaji(){ 
     echo $this->gaji_pokok;
 }
}
?>
