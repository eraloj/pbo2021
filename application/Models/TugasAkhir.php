<?php

namespace App\Model;

class TugasAkhir {
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA = [];
    public $pengujiTA = [];

    public function tambahTA(){

    }

    function __construct($id,$judulTA,$mahasiswaTA,$pembimbingTA,$pengujiTA){
        $this->id = $id;
        $this->judulTA = $judulTA;
        $this->mahasiswaTA = $mahasiswaTA;
        $this->pembimbingTA = $pembimbingTA;
        $this->pengujiTA = $pengujiTA;
        $this->id = $id;
    }
    
}