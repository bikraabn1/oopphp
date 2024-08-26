<?php 

abstract class Pengguna{
    // Mendefinisikan sebuah metode abstrak yang harus diimplementasikan oleh kelas turunan
    abstract protected function aksesFitur();
}

class Mahasiswa extends Pengguna{
    public function __construct(){
        // Konstruktor kelas Mahasiswa, saat ini tidak melakukan apapun
    }

    // Implementasi metode abstrak dari kelas Pengguna
    public function aksesFitur() {
        return "Bisa Ngelihat Nilai doang" . PHP_EOL; // Mengembalikan string dengan fitur yang dapat diakses oleh Mahasiswa
    }
}

class Dosen extends Pengguna{
    public function __construct(){
        // Konstruktor kelas Dosen, saat ini tidak melakukan apapun
    }

    // Implementasi metode abstrak dari kelas Pengguna
    public function aksesFitur(){
        return "Bisa Ngasih Nilai bre" . PHP_EOL; // Mengembalikan string dengan fitur yang dapat diakses oleh Dosen
    }
}

$users = [new Mahasiswa(), new Dosen()]; // Membuat array berisi objek Mahasiswa dan Dosen

foreach ($users as $user) {
    echo $user->aksesFitur(); // Memanggil metode aksesFitur() untuk setiap objek dan mencetak hasilnya
}
