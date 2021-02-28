<?php
require_once 'User.php';    
class Mahasiswa extends User {
 public $nim;
 public $nama;
 public $tanggal_lahir;
 public $jenis_kelamin;
 
 function __construct($nim,$nama,$tgl,$jk){
   $this->nim = $nim;
   $this->nama = $nama;
   $this->tanggal_lahir = $tgl;
   $this->jenis_kelamin = $jk;
 }
 
 public function tampilkanAngkatan(){
     echo 'Angkatan' .substr($this->nim,5,-4). '<br>';
 }
 
 public function tampilkanUmur(){
   echo 'Umur ' .date_diff(date_create($this->tanggal_lahir), date_create('today'))->y. ' Tahun' .'<br>';
 }
 
 public function tampilkanNama(){
   echo $this->nama. '<br>'.'<br>';
 }
 
}
?>
