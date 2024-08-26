<?php 

class Mahasiswa{
    public $nama, $nim, $jurusan; // Deklarasi properti publik untuk menyimpan data mahasiswa

    // Konstruktor untuk menginisialisasi objek Mahasiswa dengan nama, NIM, dan jurusan
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;  // Mengisi properti $nama dengan nilai parameter $nama
        $this->nim = $nim;    // Mengisi properti $nim dengan nilai parameter $nim
        $this->jurusan = $jurusan; // Mengisi properti $jurusan dengan nilai parameter $jurusan
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData(){
        echo "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan"; // Mencetak data mahasiswa dalam format string
    }
}

// Membuat objek Mahasiswa dengan nama, NIM, dan jurusan tertentu
$mahasiswa = new Mahasiswa("Joni", 230302005, "Teknik Informatika");

// Memanggil metode tampilkanData() untuk menampilkan data mahasiswa
$mahasiswa->tampilkanData();
