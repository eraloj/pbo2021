<?php
require_once 'User.php';
class Pegawai extends User{
 protected $nip;
 protected $nama;
 protected $no_hp;
 protected $gaji_pokok;
 
 function __construct($nip,$nama,$nh,$gp){
   $this->nip = $nip;
   $this->nama = $nama;
   $this->no_hp = $nh;
   $this->gaji_pokok = $gp;
 }
 
 public function tampilkanGaji(){ 
     echo $this->gaji_pokok;
 }
 public function setNip($nip){
  $this->nip = $nip;
}
public function setNama($nama){
  $this->nama = $nama;
}
public function setNoHp($no_hp){
  $this->no_hp = $nh;
}
public function setGajiPokok($gaji_pokok){
  $this->gaji_pokok = $gp;
}
public function getNip($nip){
  return $this->nip;
}
public function getNama($nama){
  return $this->nama;
}
public function getNoHp($nh){
  return $this->no_hp;
}
public function getGajiPokok($gp){
  return $this->gaji_pokok;
}

}
?>
