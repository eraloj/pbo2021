<?php

namespace App;

use App\Minuman;

class EsJeruk implements Minuman{
    public function minum(){
        echo"minummlah";
    }
    public function buat(){
        echo "blender";
    }
    
    public function dilihat(){
        echo"tengok je usah diminum puase<br/>";
    }
}