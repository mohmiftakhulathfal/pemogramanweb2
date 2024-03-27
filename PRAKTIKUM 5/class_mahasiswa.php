<?php

class Mahasiswa {
    public $ipk;
    public $nama;
    public $nim;
    public $prodi;
    public $angkatan;

    function __construct($_nim, $_nama){
        $this->nim = $_nim;
        $this->nama = $_nama;
    }
    function predikat_ipk(){
        if($this->ipk < 2.0){
            return 'Cukup';
        } elseif ($this->ipk >= 2.0 && $this->ipk < 3.0){
            return 'Baik';
        } elseif ($this->ipk >= 3.0 && $this->ipk < 3.75){
            return 'Memuaskan';
        } elseif ($this->ipk >= 3.75 && $this->ipk < 4.0){
            return 'Cumlaude';
        } else{
            return 'Nilai Diluar Jangkauan';
        }
    }
}

$mahasiswa1 = new Mahasiswa(110223264, 'Moh Miftakhul Athfal');
$mahasiswa1->ipk = 3.75;
$mahasiswa1->prodi = 'Teknik Informatika';
$mahasiswa1->angkatan = 2023;