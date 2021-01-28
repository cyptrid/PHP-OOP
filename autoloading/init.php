<?php 

// require_once 'app/InfoProduk.php';
// require_once 'app/Produk.php';
// require_once 'app/Komik.php';
// require_once 'app/Game.php';
// require_once 'app/CetakInfoProduk.php';
// require_once 'app/User.php';
// require_once 'service/User.php';

spl_autoload_register(function( $class ){
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/app/'. $class . '.php';
});

spl_autoload_register(function( $class ){
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/service/'. $class . '.php';
});