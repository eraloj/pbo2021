<?php
namespace application;

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
public function setNh($nh){
  $this->no_hp = $nh;
}
public function setGp($gp){
  $this->gaji_pokok = $gp;
}
public function getNip(){
  return $this->nip;
}
public function getNama(){
  return $this->nama;
}
public function getNh(){
  return $this->no_hp;
}
public function getGp(){
  return $this->gaji_pokok;
}

}
?>
