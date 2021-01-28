<?php
class Produk {
    // membuat property
    private  $judul = "judul", 
            $penulis = "penulis",
            $penerbit = "penerbit";

            // membuat visibility 
            // protected bisa di lihat di child, 
            // private hanya bisa di akses di class produk
            protected  $diskon = 0;  
            private $harga = 0;


    // membuat constructor
    public function __construct( $judul, $penulis, $penerbit, $harga ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    // setter
    public function setJudul ( $judul ){
        if ( !is_string($judul) ){
            throw new Exception("judul harus string");
        }
        $this->judul = $judul;
    }

    // getter 
    public function getJudul(){
        return $this->judul;
    }

    public function getHarga(){
        return $this->harga - ( $this->harga * $this->diskon / 100 ) ;
    }

    // membuat method
        public function sayHello(){
            return "Hello World";
        }

    public function getLabel(){
        // $this -> global function
        return "$this->penulis, $this->penerbit";
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    
}