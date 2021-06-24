<?php

namespace App\Model;

require_once('Pengguna.php');

Class TenagaKependidikan extends Pengguna{
    private $nip;
    private $nama;
    private $alamat;

    public function hitungTunjanganKinerja(){

    }
    public function setNip($nip)
    {
        $this->nip = $nip;
    }
    public function getNip()
    {
        return $this->nip;
    }
    public function setNama($nama){
        $this->nip = $nama;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function presensiMasuk(){
        
    }
}