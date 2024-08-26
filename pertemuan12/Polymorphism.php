<?php 

class Pengguna{
    // Konstruktor kelas Pengguna
    public function __construct(){

    }

    // Metode untuk menampilkan fitur yang bisa diakses oleh pengguna
    public function aksesFitur(){
        echo "Pengguna Bisa Mengakses Fitur-fitur berikut". PHP_EOL; // Mencetak pesan akses fitur untuk pengguna umum
    }
}

class Dosen extends Pengguna{
    // Konstruktor kelas Dosen
    public function __construct(){

    }

    // Metode untuk menampilkan fitur yang bisa diakses oleh dosen
    public function aksesFitur(){
        echo "Bisa Ngasih Nilai Ke Mahasiswa" . PHP_EOL; // Mencetak pesan akses fitur spesifik untuk dosen
    }
}

class Mahasiswa extends Pengguna{
    // Konstruktor kelas Mahasiswa
    public function __construct(){
    
    }

    // Metode untuk menampilkan fitur yang bisa diakses oleh mahasiswa
    public function aksesFitur(){
        echo "Bisa Ngelihat Nilai doang" . PHP_EOL; // Mencetak pesan akses fitur spesifik untuk mahasiswa
    }
}

// Membuat array yang berisi objek dari kelas Pengguna, Mahasiswa, dan Dosen
$users = [new Pengguna(), new Mahasiswa(), new Dosen()];

// Melakukan iterasi pada setiap objek di array $users
foreach ($users as $user) {
    $user->aksesFitur(); // Memanggil metode aksesFitur() sesuai dengan kelas dari objek yang bersangkutan
}
