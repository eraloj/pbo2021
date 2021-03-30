<?php

namespace application;
// require_once 'Pegawai.php';
class Dosen extends Pegawai 
{
    protected $nidn;
    protected $kerjaan;

    function __construct($nidn,$kerjaan,$nip,$nama,$nh,$gp){
        $this->nidn = $nidn;
        $this->kerjaan = $kerjaan;
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $nh;
        $this->gaji_pokok = $gp;
        
    }

    public function mengajar (){
        echo $this->nama." sedang mangajar<br>";
    }
    public function meneliti (){
        echo $this->nama." sedang meneliti<br>";
    }

    public function getNidn(){
        return $this->nidn;
    }
    public function getKerjaan(){
        return $this->kerjaan;
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
    public function setNidn($nidn){
        $this->nidn = $nidn;
    }
    public function setKerjaan($kerjaan){
        $this->kerjaan = $kerjaan;
    }
    public function setNip($nip){
        $this->nip = $nip ;
    }
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function setNh($nh){
        $this->no_hp = $nh ;
    }
    public function setGp($gp){
        $this->gaji_pokok = $gp ;
    }
}

?>