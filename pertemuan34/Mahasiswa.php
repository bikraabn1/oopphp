<?php 

class Mahasiswa {
    private $nama, $nim, $jurusan; // Deklarasi properti private untuk menyimpan data mahasiswa

    // Konstruktor untuk menginisialisasi objek Mahasiswa dengan nama, NIM, dan jurusan
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa dalam format string
    public function tampilData(){
        return "NAMA : $this->nama, NIM : $this->nim, JURUSAN : $this->jurusan";
    }

    // Metode untuk mengupdate jurusan mahasiswa
    public function updateJurusan($jurusan){
        $this->jurusan = $jurusan;
    }

    // Metode untuk mengupdate NIM mahasiswa
    public function setNim($nim){
        $this->nim = $nim;
    }
}

class Dosen{
    protected $nama, $nip, $matkul; // Deklarasi properti protected untuk menyimpan data dosen

    // Konstruktor untuk menginisialisasi objek Dosen dengan nama, NIP, dan mata kuliah
    public function __construct($nama, $nip, $matkul){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matkul = $matkul;
    }

    // Metode untuk menampilkan data dosen dalam format string
    public function tampilkanDosen(){
        return "NAMA : $this->nama, NIP : $this->nip, MATA KULIAH : $this->matkul";
    }
}

// Membuat objek Mahasiswa dengan nama, NIM, dan jurusan tertentu
$mahasiswa = new Mahasiswa("Bikra Abna", 230302005, "TI");
echo $mahasiswa->tampilData() . PHP_EOL; // Menampilkan data mahasiswa

// Mengupdate jurusan mahasiswa
$mahasiswa->updateJurusan("Sistem Informasi");

// Mengupdate NIM mahasiswa
$mahasiswa->setNim(230302006);

// Menampilkan data mahasiswa setelah diupdate
echo $mahasiswa->tampilData(). PHP_EOL;

// Membuat objek Dosen dengan nama, NIP, dan mata kuliah tertentu
$dosen = new Dosen("Prih Diantono Abda`u",123456,"PWEB2");

// Menampilkan data dosen
echo $dosen->tampilkanDosen();
