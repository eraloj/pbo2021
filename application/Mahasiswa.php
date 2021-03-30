<?php
namespace application;    

class Mahasiswa extends User {
 protected $nim;
 protected $nama;
 protected $tanggal_lahir;
 protected $jenis_kelamin;
 
 function __construct($nim,$nama,$tgl,$jk){
   $this->nim = $nim;
   $this->nama = $nama;
   $this->tanggal_lahir = $tgl;
   $this->jenis_kelamin = $jk;
 }
 
 public function tampilkanAngkatan(){
    $angkatan = substr($this->nim,5,-4);
    echo $this->nama.' Angkatan'.$angkatan;
 }
 
 public function tampilkanUmur(){
   echo 'Umur ' .date_diff(date_create($this->tanggal_lahir), date_create('today'))->y. ' Tahun' .'<br>';
 }
 
 public function tampilkanNama(){
   echo $this->nama. '<br>'.'<br>';
 }
 public function setNim($nim){
    $this->nim = $nim;
}
public function setNama($nama){
    $this->nama = $nama;
}
public function setTanggalLahir($tgl){
    $this->tanggal_lahir = $tgl;
}
public function setJenisKelamin($jk){
    $this->jenis_kelamin = $jk;
}

public function getNim($nim){
    return $this->nim;
}
public function getNama($nama){
   return $this->nama;
}
public function getTanggalLahir($tgl){
    return $this->tanggal_lahir;
}
public function getJenisKelamin($jk){
    return $this->jenis_kelamin;
}

}
?>
