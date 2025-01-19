<?php
require_once 'App/init.php';

// $product1 = new Komik("Naruto", "Mashasi khimikage", "Shonen Jump", 300000, 120);
// $product2 = new Game("Valorant", "Riot Games", "Riot Games", 250000, 100);

// $cetakProduct = new CetakInfoProduct();
// $cetakProduct->tambahProduct($product1);
// $cetakProduct->tambahProduct($product2);
// echo $cetakProduct->cetak();


use App\Product\User as UserProduct;
use App\Services\User as UserServices;

new UserProduct();
echo "<hr/>";

new UserServices();