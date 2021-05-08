<?php

namespace App;

use App\Minuman;

class Cendol implements Minuman{
    public function buat (){
        echo"tambh cendol , gula , air, dan es";
        echo"batu";
    }
    public function minum(){
        echo"disedot pake sedotan <br/>";
    }

    public function diberikanPadaTeman(){
        echo"ini untuk kau , takde sianida tenang yak";
    }
}