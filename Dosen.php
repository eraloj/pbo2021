<?php
require_once 'Pegawai.php';
class Dosen extends Pegawai 
{
    public $nidn;
    public $kerjaan;

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
}

?>