<?php 

// Menjual Produk
// Komik
class Product{
    public $title;
    public $author;
    public $publisher;
    public $price;
    public $jmlhHalaman;
    public $jmlhJam;
    public $tipe;

    public function __construct($title, $author, $publisher, $price, $jmlhHalaman, $jmlhJam, $tipe){
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->price = $price;
        $this->jmlhHalaman = $jmlhHalaman;
        $this->jmlhJam = $jmlhJam;
        $this->tipe = $tipe;
    }

    public function getProps(){
        return "$this->title, $this->author";
    }

    public function cetakLengkap(){
        // Komik : Naruto | Mashasi khimikage, Shonen Jump (Rp. 300000) - 100 Halaman.
        $str = "{$this->title} | {$this->author}, {$this->publisher} (Rp. {$this->price})" ;
        return $str;

    }
}

class Komik extends Product{
    public function cetakLengkapKomik(){
        $str = "Komik : {$this->cetakLengkap()} - {$this->jmlhHalaman} Halaman.";
        // $str = "Komik : {$this->title} | {$this->author}, {$this->publisher} - (Rp. {$this->price}) - {$this->jmlhHalaman} Halaman.";
        return $str;
    }
}
class Game extends Product{
    public function cetakLengkapGame(){
        $str = "Game : {$this->title} | {$this->author}, {$this->publisher} - (Rp. {$this->price}) ~ {$this->jmlhJam} Jam.";
        return $str;
    }
}


class CetakInfoProduct{
    function cetak(Product $product){
        $str = "{$product->title} | {$product->author} | {$product->publisher} | {$product->price}";
        return $str;
    }
}

$product1 = new Komik("Naruto", "Mashasi khimikage", "Shonen Jump", 300000, 100, 0, "Komik");
$product2 = new Game("Valorant", "Riot Games", "Riot Games", 250000, 0, 60, "Game");

// Komik : Naruto | Mashasi khimikage, Shonen Jump (Rp. 300000) - 100 Halaman.
echo $product1->cetakLengkapKomik();
echo "<br>";
echo $product2->cetakLengkapGame();


?>