<?php

class Animal {
    public $nama;
    public $kaki;
    public $cold_blooded;

    function __construct($nama) {
        $this->nama = $nama;
        $this->kaki = 4;
        $this->cold_blooded = "tidak";
    }
}