<?php 

// Jualan Produk
// Komik, Game

// abstract Class
abstract class Produk {
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

    abstract public function getInfoProduk();
    
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    
}
    // membuat inheritance 
    class Komik extends Produk {
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

    class Game extends Produk {
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

    // membuat object type
    class CetakInfoProduk{
        public $daftarProduk = array();

        public function tambahProduk( Produk $produk ){
            $this->daftarProduk[] = $produk;
        }

        public function cetak(){
            $str = "DAFTAR PRODUK : <br>";

            foreach( $this->daftarProduk as $p){
                $str .= "- {$p->getInfoProduk()} <br>";
            }
            return $str;
        }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 25000, 500);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();