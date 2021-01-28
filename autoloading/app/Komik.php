<?php 
class Komik extends Produk implements InfoProduk {
        public $jmlhHalaman;
        // overiding (mengambil alih property punya class produk)
        public function __construct( $judul, $penulis, $penerbit, $harga, $jmlHalaman){
            parent::__construct($judul, $penulis, $penerbit, $harga, $jmlHalaman);

            $this->jmlHalaman = $jmlHalaman;
        }

        public function getInfoProduk(){
            // membuat overiding (mengambil function getInfoProduk di class produk) 
            $str = "Komik : ". $this->getInfo() ." - {$this->jmlHalaman} Halaman";
            return $str;
        }
    }