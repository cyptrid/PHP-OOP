<?php 

// Jualan Produk
// Komik, Game

class Produk {
    // membuat property
    public  $judul = "judul", 
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    // membuat constructor
    public function __construct( $judul, $penulis, $penerbit, $harga ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

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

$produk3 = new Produk("naruto", "Masashi Kishimoto", "Shonen Jump", 3000) ;
echo $produk3->getLabel();