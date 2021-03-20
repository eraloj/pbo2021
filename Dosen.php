<?php
require_once 'Pegawai.php';
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

    }
    public function meneliti (){
        
    }
    public function setNidn($nidn){
        $this->nidn = $nidn;
    }
    public function setKerjaan($kerjaan){
        $this->kerjaan = $kerjaan;
    }
    
    public function getNidn(){
        return $this->nidn;
    }
    public function getKerjaan(){
        return $this->kerjaan;
    }
}

?>