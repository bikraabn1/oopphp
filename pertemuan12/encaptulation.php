<?php 

class Mahasiswa{
    private $nama, $nim, $jurusan; // Deklarasi properti private untuk menyimpan data mahasiswa

    // Konstruktor kelas Mahasiswa, saat ini tidak melakukan inisialisasi apapun
    public function __construct(){
        
    }

    // Metode untuk mengatur nilai properti $nama
    public function setNama(string $nama){
        return $this->nama = $nama; // Menetapkan nilai $nama
    }

    // Metode untuk menampilkan nilai properti $nama
    public function getNama() : void {
        echo $this->nama . PHP_EOL; // Mencetak nilai $nama diikuti dengan baris baru
    }

    // Metode untuk mengatur nilai properti $nim
    public function setNim(int $nim){
        return $this->nim = $nim; // Menetapkan nilai $nim
    }

    // Metode untuk menampilkan nilai properti $nim
    public function getNim() : void {
        echo $this->nim . PHP_EOL; // Mencetak nilai $nim diikuti dengan baris baru
    }

    // Metode untuk mengatur nilai properti $jurusan
    public function setJurusan(string $jurusan){
        return $this->jurusan = $jurusan; // Menetapkan nilai $jurusan
    }

    // Metode untuk menampilkan nilai properti $jurusan
    public function getJurusan() : void {
        echo $this->jurusan . PHP_EOL; // Mencetak nilai $jurusan diikuti dengan baris baru
    }
}

// Membuat objek Mahasiswa baru
$mahasiswa = new Mahasiswa();

// Mengatur nama mahasiswa menggunakan metode setNama()
$mahasiswa->setNama("Mikel");

// Menampilkan nama mahasiswa menggunakan metode getNama()
$mahasiswa->getNama();

// Mengatur NIM mahasiswa menggunakan metode setNim()
$mahasiswa->setNim(230302005);

// Menampilkan NIM mahasiswa menggunakan metode getNim()
$mahasiswa->getNim();

// Melanjutkan kode:

// Mengatur jurusan mahasiswa menggunakan metode setJurusan()
$mahasiswa->setJurusan("Teknik Informatika");

// Menampilkan jurusan mahasiswa menggunakan metode getJurusan()
$mahasiswa->getJurusan();