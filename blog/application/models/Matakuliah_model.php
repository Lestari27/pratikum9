<?php
class Matakuliah_model extends CI_Model {
    public $nama;
    public $sks;
    public $kode;

    function __construct($nama,$sks,$kode){
        $this->nama = $nama;
        $this->kode = $kode;
        $this->sks = $sks;
    }
}