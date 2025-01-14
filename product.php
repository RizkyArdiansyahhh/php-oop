<?php 

// Menjual Produk
// Komik
class Product{
    public $title;
    public $author;
    public $publisher;
    public $price;
}

$komik = new Product();
$komik->title = "Naruto";
$komik->author = "Rizky ardiansyah";
$komik->publisher = "Rizky cinema";
$komik->price = 300000;
echo "Komik : $komik->title, $komik->author, $komik->publisher, $komik->price";


?>