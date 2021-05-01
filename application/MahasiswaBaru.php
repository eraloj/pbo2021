<?php
namespace App;
require_once 'Mahasiswa.php';
class MahasiswaBaru extends Mahasiswa
{
    protected $no_regis;
    function __construct($nim,$nama,$tgl,$jk,$nrg){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tanggal_lahir = $tgl;
        $this->jenis_kelamin = $jk;
        $this->no_regis = $nrg;
}
public function bayarGedung(){    
}
public function setNoRegistrasi($no_regis){
    $this->no_regis = $no_regis;
}

public function getNoRegistrasi(){
    return $this->no_regis;
}
}
?>
