<?php 

// Jualan Produk
// Komik, Game

class Produk {
    // membuat property
    public  $judul = "judul", 
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0,
            $jmlHalaman = 0,
            $waktuMain = 0;


    // membuat constructor
    public function __construct( $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    // membuat method
        public function sayHello(){
            return "Hello World";
        }

    public function getLabel(){
        // $this -> global function
        return "$this->penulis, $this->penerbit";
    }

    
}
    // membuat inheritance 
    class Komik extends Produk {
        public function getInfoProduk(){
            $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
            return $str;
        }
    }

    class Game extends Produk {
        public function getInfoProduk(){
            $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam";
            return $str;
        }
    }

    // membuat object type
    class CetakInfoProduk{
        public function cetak( Produk $produk ){
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
            return $str;
        }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 25000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

