# OOP PHP

## Apa itu OOP?

Pemrograman Berorientasi Objek (OOP) adalah paradigma pemrograman yang mengorganisasi kode menjadi objek-objek. Objek ini merepresentasikan entitas dunia nyata, seperti mobil, orang, atau bahkan konsep abstrak seperti akun bank. Setiap objek memiliki atribut (data) dan metode (fungsi) yang terkait.

## Konsep Dasar OOP

Class: Blueprint atau cetak biru untuk membuat objek. Kelas mendefinisikan atribut dan metode yang akan dimiliki oleh objek.

```php
class Mahasiswa{
    public $nama, $nim, $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData(){
        echo "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }

}
```


Object: Instansi dari sebuah kelas. Setiap objek memiliki nilai atribut yang unik.

```php
$mahasiswa = new Mahasiswa("Joni", 230302005, "Teknik Informatika");
$mahasiswa->tampilkanData();
```


Attribute: Properti atau karakteristik dari sebuah objek.

```php
public $nama, $nim, $jurusan;
```


Method: Fungsi yang terkait dengan objek, digunakan untuk mengubah atau mengakses atribut.

```php
public function tampilkanData(){
        echo "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }
```


Inheritance: Mekanisme di mana sebuah kelas (kelas anak) mewarisi atribut dan metode dari kelas lain (kelas induk).

```php
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
```


Polimorphism: Kemampuan suatu objek untuk mengambil banyak bentuk.

```php
class Pengguna{
    public function __construct(){

    }

}

class Dosen extends Pengguna{
    public function aksesFitur(){
        echo "Bisa Ngasih Nilai Ke Mahasiswa" . PHP_EOL;
    }
}

class Mahasiswa extends Pengguna{
    public function aksesFitur(){
        echo "Bisa Ngelihat Nilai doang" . PHP_EOL;
    }
}
```


Encaptulation: Membungkus data (atribut) dan metode dalam sebuah kelas, sehingga data terlindungi dari akses langsung.

```php
private $nama, $nim, $jurusan;

```


Abstraction: Proses menyembunyikan detail implementasi internal dan
hanya menampilkan fungsionalitas utama kepada pengguna. 

```php
abstract class Pengguna{
    abstract protected function aksesFitur();
}
```


## Penerapan OOP dalam PHP

Framework PHP: Hampir semua framework PHP (Laravel, CodeIgniter, Symfony) menggunakan konsep OOP secara ekstensif.
Aplikasi Web: OOP sangat berguna untuk membangun aplikasi web yang kompleks dengan banyak fitur.
Permainan: OOP digunakan untuk membuat karakter, objek, dan interaksi dalam permainan.

## Manfaat Menggunakan OOP dalam PHP

Kode yang lebih bersih dan terstruktur: OOP membantu dalam membuat kode yang lebih mudah dibaca dan dipahami.
Meningkatkan produktivitas: Dengan menggunakan kembali kode, pengembang dapat lebih produktif.
Memudahkan dalam kolaborasi: OOP memungkinkan tim pengembang untuk bekerja sama dengan lebih efektif.
