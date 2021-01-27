<?php 

// Jualan Produk
// Komik, Game

class Produk {
    // membuat property
    public  $judul = "judul", 
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    // membuat method
        public function sayHello(){
            return "Hello World";
        }

    public function getLabel(){
        // $this -> global function
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1 -> judul = "naruto";
// var_dump($produk1);


$produk3 = new Produk();
$produk3->judul = "naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 3000;

echo "Komik : $produk3->penulis, $produk3->penerbit";

echo "<br>";
// memanggil method
echo $produk3->sayHello();
echo "<br>";
echo $produk3->getLabel();