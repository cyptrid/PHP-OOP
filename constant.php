<?php 

// define('NAMA', 'joban');
// echo NAMA;


// echo '<br>';

// const UMUR = 32;
// echo UMUR;

// menyimpan const ke dalam Class

class Coba{
    const NAMA = 'joban';
}

// echo coba::NAMA;
// echo __FILE__;


function coba2(){
    return __FUNCTION__;
}

echo coba2();
echo "<br>";

class Coba3{
    public $kelas = __CLASS__;
}

$obj = new Coba3; 
echo $obj->kelas;