<?php 

// Menjual Produk
// Komik
class Product{
    public $title;
    public $author;
    public $publisher;
    public $price;

    public function __construct($title, $author, $publisher, $price){
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->price = $price;
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
    public $jmlhHalaman;

    function __construct($komikTitle, $komikAuthor, $komikPublisher, $komikPrice, $jmlhHalaman){
        parent::__construct($komikTitle, $komikAuthor, $komikPublisher, $komikPrice);
        $this->jmlhHalaman = $jmlhHalaman;
    }
    public function cetakLengkap(){
        $str = "Komik : " . parent::cetakLengkap() . " - {$this->jmlhHalaman} Halaman.";
        // $str = "Komik : {$this->title} | {$this->author}, {$this->publisher} - (Rp. {$this->price}) - {$this->jmlhHalaman} Halaman.";
        return $str;
    }
}
class Game extends Product{
    public $waktuMain;

    function __construct($gameTitle, $gameAuthor, $gamePublisher, $gamePrice, $waktuMain){
        parent::__construct($gameTitle, $gameAuthor, $gamePublisher, $gamePrice);
        $this->waktuMain = $waktuMain;

    }
    public function cetakLengkap(){
        $str = "Komik : " . parent::cetakLengkap(). " ~ {$this->waktuMain} Jam.";
        // $str = "Game : {$this->title} | {$this->author}, {$this->publisher} - (Rp. {$this->price}) ~ {$this->waktuMain} Jam.";
        return $str;
    }
}


class CetakInfoProduct{
    function cetak(Product $product){
        $str = "{$product->title} | {$product->author} | {$product->publisher} | {$product->price}";
        return $str;
    }
}

$product1 = new Komik("Naruto", "Mashasi khimikage", "Shonen Jump", 300000, 120);
$product2 = new Game("Valorant", "Riot Games", "Riot Games", 250000, 100);

// Komik : Naruto | Mashasi khimikage, Shonen Jump (Rp. 300000) - 100 Halaman.
echo $product1->cetakLengkap();
echo "<br>";
echo $product2->cetakLengkap();


?>