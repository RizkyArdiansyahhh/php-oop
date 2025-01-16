<?php 

// Menjual Produk
// Komik
class Product{
    public $title;
    public $author;
    public $publisher;
    public $price;


    public function getProps(){
        return "$this->title, $this->author";
    }
}

$komik = new Product();
$komik->title = "Naruto";
$komik->author = "Rizky ardiansyah";
$komik->publisher = "Rizky cinema";
$komik->price = 300000;
echo "Komik : $komik->title, $komik->author, $komik->publisher, $komik->price";
echo "<br>";
echo "Komik : " . $komik->getProps();

$game = new Product();
$game->title = "Uncharted";
$game->author = "Neil Druckmann";
$game->publisher = "Sony Computer";
$game->price = 250000;
echo "<br>";
echo "Game : " . $game->getProps();


?>