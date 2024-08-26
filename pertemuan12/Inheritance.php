<?php 

class Pengguna{
    protected $nama;

    public function __construct(string $nama){
        $this->nama = $nama;
    }   

    public function getNama() {
        return $this->nama  . PHP_EOL;
    }
}

class Dosen extends Pengguna{
    private $matakuliah;

    public function __construct($nama, $matakuliah){
        parent::__construct($nama);
        $this->matakuliah = $matakuliah;
    }

    public function getMatkul(){
        return $this->matakuliah;
    }
}

$dosen = new Dosen("Prih Diantono Abda`u","Pemrograman Web 2");
echo $dosen->getNama();
echo $dosen->getMatkul();