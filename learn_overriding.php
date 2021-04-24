<?php

class bermain {
    public $nama;

    public function game(){
        echo "PUBG GA  " .$this->nama. "?\n";
    }

    public function masuk(){
        echo "YOK" . "\n";
    }
}

class Bola extends bermain{
    public function game(){
        echo "CODM GA " .$this->nama. "?\n";
    }

    public function parentGame(){
        return parent::game();
    }
}

$aldo = new Bola();
$aldo->nama = "QI";


$aldo->game();
$aldo->parentGame();
$aldo ->masuk();
