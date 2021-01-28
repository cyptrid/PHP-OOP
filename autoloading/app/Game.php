<?php 
class Game extends Produk implements InfoProduk{
        public $waktuMain;
         // overiding (mengambil alih property punya class produk)
         public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain){
            parent::__construct($judul, $penulis, $penerbit, $harga, $waktuMain);

            $this->waktuMain = $waktuMain;
         }

         public function setDiskon( $diskon ){
            $this->diskon = $diskon;
        }

        public function getInfoProduk(){
            $str = "Game : ". $this->getInfo() ." - {$this->waktuMain} Jam";
            return $str;
        }
    }