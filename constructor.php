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
}

$komik = new Product("naruto", "rizky ardiansyah", "rizky cinema", 300000);

echo "Komik : " . $komik->getProps();
echo "<br>";
$game = new Product("uncharted", "neil druckmann", "sony computer", 250000);

echo "Game : " . $game->getProps();


?>